<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Messages;
//use App\Notify;
use App\User;
use App\Withdraw;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
//    public function testFunction(){
//        $this->add_bonus();
//        return redirect()->route('user.home');
//    }

    public function __construct()
    {
     $this->middleware(['auth', 'verified']);
    }


    public function dashboard()
    {
//        $deposit_detail = Deposit::all();
//        return $deposit_detail;
//        return Carbon::now();
        $total = Deposit::whereUserId(auth()->id())->select('amount')->sum('amount');
        $approved_cash = Deposit::whereUserId(auth()->id())->select('amount')->where('status', '=', 'approved')->sum('amount');
        $pending_cash = Deposit::whereUserId(auth()->id())->select('amount')->where('status', '=', 'pending')->sum('amount');

        $my_plans = Deposit::whereUserId(auth()->id())->where('status', '=', 'approved')->get();
        $total_earned =    0;
        foreach ($my_plans as $item){
            $total_earned += $item->earning;
        }

        $total_withdraw = Withdraw::whereUsersId(auth()->id())->select('amount')->sum('amount');
        $withdraw_approved_cash = Withdraw::whereUsersId(auth()->id())->select('amount')->where('status', '=', 'approved')->sum('amount');
        $withdraw_pending_cash = Withdraw::whereUsersId(auth()->id())->select('amount')->where('status', '=', 'pending')->sum('amount');
        $last_withdraw = optional(Withdraw::whereUsersId(auth()->id())->select('amount')->where('status', '=', 'approved')->latest()->first())->amount;
        return view('dashboard2.dashboard', compact( 'total', 'approved_cash', 'pending_cash', 'total_withdraw', 'withdraw_approved_cash', 'withdraw_pending_cash', 'last_withdraw', 'total_earned'));
    }

    public function user_details(){
        $user = Auth::user();
        return view('dashboard2.profile', compact('user'));
    }

    public function personal_info_store(Request $request)
    {

        $user = User::findOrFail(auth()->id());
        $data = $this->getData($request);
        $user->update($data);
        return redirect()->back()->with('success', 'Profile Updated Successful');
    }

    public function security()
    {
        return view('dashboard2.security');
    }

    public function update(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));

        $user->save();
        return redirect()->back()->with('success_password',' Password Updated Successful!');

    }

//    public function edit_profile($id)
//    {
//        $user = User::findOrFail($id);
//        return view('dashboard.account-settings', compact('user'));
//    }
//
//    public function update_profile(Request $request, $id)
//    {
//        $user = User::findOrFail($id);
//        $user->update($this->getData($request));
//        return redirect()->back()->with('success_profile', 'Profile Updated Successful');
//
//    }

    protected function getData(Request $request){
        $rules = [
            'first_name' => 'nullable',
            'last_name' => 'nullable',
            'email' => 'nullable|email',
            'btc_wallet' => 'nullable',
            'country' => 'nullable',
            'state' => 'nullable',
            'city' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable',
            'postal_code' => 'nullable',
            'date_of_birth' => 'nullable',
        ];
        return $request->validate($rules);
    }


        public function kyc_store(Request $request)
        {
            $request->validate([
                    'id_type' => 'required',
                    'id_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]
            );
            if( $image = $request->file('id_image')){
                $input['id_image'] = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/id_image/images');
                $image->move($destinationPath, $input['id_image']);
                $article = User::findOrFail(auth()->id());
                $article->id_type = $request->get('id_type');
                $article->id_image = $input['id_image'];
                $article->save();
                return redirect()->back()->with('success_upload', 'ID submitted successfully, wait for approval');
            }else{
                return redirect()->back()->with('failed', "ID upload failed");
            }

////        $id = $request->user_id;
//            if ($request->hasFile('id_image')) {
//                $fileNameWithExt = $request->file('id_image')->getClientOriginalName();
//                $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
//                $extension = $request->file('id_image')->getClientOriginalExtension();
//                // file name to store
//                $fileNameToStore = $filename.'_'.time().'.'.$extension;
//                //store the image
//                $path = $request->file('id_image')->storeAs('id_cards/', $fileNameToStore);
////                $image_path = Storage::disk('public')->putFile('folders/inside/public', $request->file('id_image'));
////                $request['id_image'] = $image_path;
//
//            }else {
//                $fileNameToStore = ' Noimage';
//            }
//
//            $user_id_type = User::findOrFail(auth()->id());
//            if($fileNameToStore){
//                $user_id_type->update(['id_type' => $request->id_type, 'id_image' => $fileNameToStore]);
//            }
//            return redirect()->back()->with('success_upload', 'ID submitted successfully, wait for approval');

    }

    public function all_referrals()
    {
//        $refs = User::whereReferredBy($this->id);
        return view('dashboard2.referral');
    }

    public function messages()
    {
        $messages = Messages::whereUserId(auth()->id())->latest()->get();
        return view('dashboard2.messages', compact('messages'));
    }

    public function show_messages($id)
    {
        $msg_details = Messages::findOrFail($id);
        if(!$msg_details->read){
            $msg_details->read = 1;
            $msg_details->save();
        }
        return view('dashboard2.msg_details', compact('msg_details'));
    }


}
