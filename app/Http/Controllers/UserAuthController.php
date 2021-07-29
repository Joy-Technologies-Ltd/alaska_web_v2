<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function authenticate(Request $request){
        $user = $request->validate([
            'email'             => 'required|email',
            'password'          => 'required'
        ]);
        if ($user == true){
            if ($userData = User::where('email',$request->email)->first()){
                if (Hash::check($request->password, $userData->password)){
                    if ($userData->signup_status == 0){
                        if ($userData->user_type == 1){
                            session(['admin_session'=>true]);
                            return 'admin panel';
                        } else{
                            session(['user_session'=>true]);
                            return 'profile update page';
                        }
                    } else {
                        return 'profile page';
                    }
                } else{
                    return redirect()->back()->with('err_msg','Wrong Password');
                }
            } else{
                return redirect()->back()->with('err_msg','Email is\'t valid');
            }
        }
    }
    public function adminSessionClose(){
        session()->forget('admin_session');
        return redirect()->to('/a-l-a-s-k-a/admin');
    }
    public function userSessionClose(){
        session()->forget('user_session');
        return redirect()->to('/');
    }
    public function signUpUser(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['user_type'] = 2;
        $user = User::create($input);
        return 'profile update page';
    }
    public function signUpAdmin(Request $request){
        $fileName = \Helper::imgProcess($request, 'image', $request->name, '', 'images/admin', 'store', User::class);
        $data = $request->all();
        $data['image'] = $fileName;
        $data['user_type'] = 1;
        $data['password'] = Hash::make($request->password);
        User::insert($data);
        session(['admin_session'=>true]);
        return 'admin panel';
    }
}
