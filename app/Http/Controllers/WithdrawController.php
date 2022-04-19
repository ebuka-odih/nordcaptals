<?php

namespace App\Http\Controllers;

use App\Mail\AdminWithdrawAlert;
use App\Mail\DepositMail;
use App\Mail\RequestWithdraw;
use App\Mail\WithdrawMail;
use App\User;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class WithdrawController extends Controller
{


    public function index()
    {
        $withdrawal = Withdraw::whereUsersId(auth()->id())->get();
        $total = Withdraw::whereUsersId(auth()->id())->select('amount')->sum('amount');
        $approved_cash = Withdraw::whereUsersId(auth()->id())->select('amount')->where('status', '=', 'approved')->sum('amount');
        $pending_cash = Withdraw::whereUsersId(auth()->id())->select('amount')->where('status', '=', 'pending')->sum('amount');
        return view('dashboard2.withdraw_history', compact('withdrawal', 'total', 'approved_cash', 'pending_cash'));
    }

    public function create()
    {
//        $user = User::findOrFail($user_wallet);

        return view('dashboard2.withdraw');
    }

    public function store(Request $request)
    {
        $withdraw = $this->getData($request);
        $withdraw['code_hash'] = (string) Str::uuid();
        $withdraw['users_id'] = auth()->id();

        if ($request->wallet_type == 'acct_wallet'){
            if (auth()->user()->acct_wallet < $withdraw['amount']){
                return redirect()->back()->with('declined_message', 'You do not have upto that amount to withdraw from your main balance');
            }
            $withdraw = Withdraw::create($withdraw);
            $user = User::findOrFail($withdraw->users_id);
            $data = ['withdraw' => $withdraw, 'user' => $user];
            Mail::to($user->email)->send( new RequestWithdraw($data));
            Mail::to('support@sam-trader.com')->send( new AdminWithdrawAlert($data));
            return redirect()->back()->with('success_message', 'Withdrawal Request Sent Successfully');

        }else if($request->wallet_type == "bonus_wallet"){
            if (auth()->user()->bonus_wallet < $withdraw['amount']){
                return redirect()->back()->with('declined', 'You do not have upto that amount to withdraw from your bonus balance');
            }
            $withdraw = Withdraw::create($withdraw);
            $user = User::findOrFail($withdraw->users_id);
            $data = ['withdraw' => $withdraw, 'user' => $user];
            Mail::to($user->email)->send( new RequestWithdraw($data));
            Mail::to('support@sam-trader.com')->send( new AdminWithdrawAlert($data));
            return redirect()->back()->with('success_message', 'Withdrawal Request Sent Successfully');
        }else{
            return redirect()->back()->with('reject', "Request Failed");
        }
    }


    protected function getData(Request $request){
        $rules = [
            'amount' => 'required',
            'status' => 'nullable',
            'code_hash' => 'nullable',
            'users_id' => 'nullable',
            'wallet_type' => 'nullable',
            'account_type' => 'nullable',
        ];
        return $request->validate($rules);
    }
}
