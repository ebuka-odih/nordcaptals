<?php

namespace App\Http\Controllers;

use App\Notifications\AdminShareFund;
use App\Share;
use App\Notifications\ShareFund;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ShareController extends Controller
{
    public function index()
    {
        $share_fund = Share::whereUserId(auth()->id())->get();;
        return view('dashboard2.share', compact('share_fund'));
    }

    public function create()
    {
//        $share = Share::get()->first();
//        return $share->user_id->user;
        return view('dashboard2.share-create');
    }

    public function store(Request $request)
    {
//        $username = $request->input('username');
//        $user = User::where('username', $username)->first();
//
//        $share = new Share();
//        $share->amount = $request->input('amount');
//        $share->sender = auth()->id();
//        $share->receiver = auth()->id();30
//        $user->acct_wallet += $share->amount;
//        $share->save();

        $share = $this->getData($request);
        $username = $request->input('username');
        $user = User::where('username', $username)->first();
        if ($user){
            if ($share['amount'] > 51){
                return redirect()->back()->with('message', 'You can not share more than 50$');
            }elseif($share['amount'] > auth()->user()->acct_wallet){
                return redirect()->back()->with('message', 'You do not have enough in your balance to share');
            }
            $share['user_id'] = auth()->id();
            $share['receiver'] = $user->username;
            $share = Share::create($share);
            if ($user->username != auth()->user()->username){
                $user->acct_wallet += $share['amount'];
                auth()->user()->acct_wallet -= $share->amount;
                auth()->user()->save();
                $share->save();
                $user->save();
            }else{
                return redirect()->back()->with('declined', 'Sorry, you cannot share fund with yourself');
            }
            $user_mail = $user->email;
            $data = ['user' => $user, 'share' => $share];
            Notification::route('mail', $user_mail)->notify(new ShareFund($data));
            Notification::route('mail', 'karenbengal6@gmail.com')->notify(new AdminShareFund($data));

            return redirect()->route('user.share.index')->with('success', $share['amount']."$"." Sent to ".$share['receiver']." Successfully");
        }else{
            return redirect()->back()->with('message', "No such username");
        }




    }

    protected function getData(Request $request)
    {
        $rules = [
          'amount' => 'nullable',
          'user_id' => 'nullable',
          'receiver' => 'nullable',
        ];
        return $request->validate($rules);
    }
}
