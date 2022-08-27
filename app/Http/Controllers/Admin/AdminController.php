<?php

namespace App\Http\Controllers\Admin;

use App\Deposit;
use App\Deposits;
use App\InvestmentPlan;
use App\Mail\BonusMail;
use App\Mail\FundMail;
use App\Mail\Welcome;
use App\Mail\WithdrawMail;
use App\User;
use App\Withdraw;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
        $total_withdraw = Withdraw::select('amount')->sum('amount');
//        $total_plan = InvestmentPlan::select('id')->sum('id');
        $total_deposit = Deposit::select('amount')->sum('amount');
        $users_count = User::where('user_role', '=', 'client')->count();
        $users = User::where('user_role', '=', 'client')->paginate(10);
        return view('admin2.dashboard', compact('users', 'users_count', 'total_withdraw', 'total_deposit'));
    }


    public function listUsers(){
        $users = User::where('user_role', '!=', 'admin')->latest()->get();
        return view('admin2.users', compact('users'));
    }

    public function show($id){
        $user_details = User::findOrFail($id);
        return view('admin2.user_details', compact('user_details'));
    }

    public function user_withdraw($id)
    {
        $user_details = User::findOrFail($id);
        $user_withdraw = User::with('withdraws')->findOrFail($id);
        return view('admin2.user_withdrawal', compact('user_withdraw', 'user_details'));
    }


    public function suspendUser($id){
        if (auth()->user()->user_role == 'admin'){
            $user = User::findOrFail($id);
            $user->status = 0;
            $user->save();
        }
        return redirect()->back();
    }

    
    public function verify_user($id){
        if(auth()->user()->user_role == 'admin'){
            $user = User::findOrFail($id);
            $user->status = 2;
            $data = ['user' => $user];
            Mail::to($user->email)->send(new Welcome($data));
            $user->save();
        }
        return redirect()->back()->with('verified', $user->last_name. " is now verified");
    }

    public function approve_withdraw($withdraw){
        $dep = Withdraw::findOrFail($withdraw);
        $user = User::findOrFail($dep->users_id);
        if ($dep->wallet_type == "acct_wallet"){
            $new_wallet = $user->acct_wallet - $dep->amount;
            $user->acct_wallet = $new_wallet;
            $data = ['user' => $user, 'withdraw' => $dep];
            Mail::to($dep->users->email)->send( new WithdrawMail($data));
            $user->save();
            $dep->status = 'approved';
            $dep->save();
        }elseif($dep->wallet_type == "bonus_wallet"){
            $new_wallet = $user->bonus_wallet - $dep->amount;
            $user->bonus_wallet = $new_wallet;
            $data = ['user' => $user, 'withdraw' => $dep];
            Mail::to($dep->users->email)->send( new WithdrawMail($data));
            $user->save();
            $dep->status = 'approved';
            $dep->save();
        }
        return redirect()->back();
    }

    public function reject_withdraw($id){
        $dep = Withdraw::findOrFail($id);
        $dep->status = 'canceled';
        $dep->save();
        return redirect()->back();
    }

    public function show_withdraw($id)
    {
        $show_withdraw = Withdraw::findOrFail($id);
        return view('admin.withdraw', compact('show_withdraw'));
    }

    public function users_withdraw()
    {
        $users_withdrawals = Withdraw::all();
        return view('admin2.withdrawal', compact('users_withdrawals'));
    }

    public function withdraw_single($id)
    {
        $withdraw = Withdraw::findOrFail($id);
        $user = User::findOrFail($withdraw->users_id);
        return view('admin.single-withdraw', compact('withdraw', 'user'));
    }

    public function delete_withdrawal($id)
    {
        $withdrawal = Withdraw::findOrFail($id);
        $withdrawal->delete();
        return redirect()->back();
    }

    public function update_hash(Request $request, $id)
    {
        $withdraw_hash = Withdraw::findOrFail($id);
        $withdraw_hash->update(['code_hash' => $request->input('code_hash')]);
        return redirect()->back()->with('success_message', 'Transaction has been approved successfully');
    }


    public function update_acct(Request $request, $id)
    {
        $add_bonus = $request->input('bonus');
        $user = User::findOrFail($id);
        $user->acct_wallet += $add_bonus;
        $user->save();
//        $user->update(['acct_wallet' => $request->input('acct_wallet')]);
        return redirect()->back()->with('success_message', 'Sent successfully');
    }

    public function delete_user($id){
        $delete_user = User::findOrFail($id);
        $delete_user->delete();
        return redirect()->back();
    }

    public function fund_account(Request $request, $id)
    {
        $add_amt = $request->input('amount');
        $user = User::findOrFail($id);
        $user->acct_wallet += $add_amt;
//        $data = ['add_amt' => $add_amt, 'user' => $user];
//        Mail::to($user->email)->send(new FundMail($data));
        $user->save();
        return redirect()->back()->with('fund_success', 'Fund Sent successfully');
    }

    public function bonus(Request $request, $id)
    {
        $add_bonus = $request->input('bonus');
        $user = User::findOrFail($id);
        $user->bonus_wallet += $add_bonus;
//        $data = ['user' => $user, 'add_bonus' => $add_bonus];
//        Mail::to($user->email)->send(new BonusMail($data));
        $user->save();
//        $user->update(['acct_wallet' => $request->input('acct_wallet')]);
        return redirect()->back()->with('bonus_message', 'Bonus Sent successfully');
    }

}
