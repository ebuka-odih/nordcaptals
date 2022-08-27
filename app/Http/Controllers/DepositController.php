<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\InvestmentPlan;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DepositController extends Controller
{

    public function plans()
    {
        $invest_plans = InvestmentPlan::all();
        return view('dashboard2.deposit-plans', compact('invest_plans'));
    }

    public function plan_details($slug)
    {
        $invest_plans = InvestmentPlan::findBySlugOrFail($slug);
        return view('dashboard2.make-deposit', compact('invest_plans'));
    }

    public function make_deposit(Request $request, $id)
    {
//        return $request->all();
        $invest_plan = InvestmentPlan::findBySlugOrFail($request->plan_id);
        if ($request->amount < $invest_plan->min_deposit || $request->amount > $invest_plan->max_deposit){
           return redirect()->back()->with('disapproved', "The Entered Amount is less or more than the chosen plan amount");
        }else {
            $deposit = new Deposit();
            $deposit->amount = $request->input('amount');
            $deposit->hash_code = (string)Str::uuid();
            $deposit->user_id = auth()->id();
            $deposit->investment_plans_id = $invest_plan->id;
            $deposit->save();
            return redirect()->route('user.user_deposits.view', $deposit->id);
        }
    }


     public function deposit_details($id){
        $deposit_detail = Deposit::whereUserId(auth()->id())->findOrFail($id);
        $investment_plan = InvestmentPlan::findOrFail($deposit_detail->investment_plans_id);
        $user = User::findOrFail($deposit_detail->user_id);
        $expected_profit = $investment_plan->total_return()  * $deposit_detail->amount;
        $profit =  number_format((float)$expected_profit / 100, 2, '.', '');

        $expected_percent = $investment_plan->daily_interest  * $deposit_detail->amount;
        $profit_percent =  number_format((float)$expected_percent / 100, 2, '.', '');

        $days = 1;

        $current_date = Carbon::now();
        $d_approved = Carbon::parse($deposit_detail->approved_date);
        $d_ended = Carbon::parse($deposit_detail->end_date);

         if($d_approved->diffInDays($current_date) < $investment_plan->term_days){
              $days = $d_approved->diffInDays($current_date);
         }else {
              $days =  $investment_plan->term_days;
         }

        $i = 1;
        while ($i < $days){
            $i++;
        }


        return view('dashboard2.transaction', compact('deposit_detail', 'investment_plan', 'profit', 'days', 'i'));
    }

    public function process_deposit(Request $request)
    {
        $id = $request->payment_proof_id;
        if ($request->hasFile('payment_proof')) {
            $fileNameWithExt = $request->file('payment_proof')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('payment_proof')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //store the image
            $path = $request->file('payment_proof')->storeAs('public/payment-proof/', $fileNameToStore);
        }else {
            $fileNameToStore = ' Noimage';
        }

        $payment_image = Deposit::findOrfail($id);
        if($fileNameToStore){
            $payment_image->update(['payment_proof' => $fileNameToStore]);
        }
        return redirect()->back()->with('success_message', 'Submitted, Proof of Payment awaiting confirmation');

    }

    public function deposit_history()
    {
        $deposit_history = Deposit::whereUserId(auth()->id())->get();
        $total           = Deposit::whereUserId(auth()->id())->select('amount')->sum('amount');
        $approved_cash   = Deposit::whereUserId(auth()->id())->select('amount')->where('status', '=', 'approved')->sum('amount');
        $pending_cash    = Deposit::whereUserId(auth()->id())->select('amount')->where('status', '=', 'pending')->sum('amount');
        return view('dashboard2.deposits', compact('deposit_history', 'total', 'approved_cash', 'pending_cash'));
    }


    public function my_plans()
    {
        $my_plan = Deposit::whereUserId(auth()->id())->where('status', '=', 'approved')->orderBy('approved_date', 'desc')->get();
        $total = Deposit::whereUserId(auth()->id())->select('amount')->sum('amount');
        $approved_plan = Deposit::whereUserId(auth()->id())->select('amount')->where('status', '=', 'approved')->sum('amount');
        return view('dashboard.my-plan', compact('my_plan', 'total', 'approved_plan'));
    }


    public function earning()
    {
        $my_plans = Deposit::whereUserId(auth()->id())->where('status', '=', 'approved')->get();
        $total =    0;
        foreach ($my_plans as $item){
            $total += $item->earning;
        }
        return view('dashboard.earning-history', compact('my_plans', 'total'));
    }


}
