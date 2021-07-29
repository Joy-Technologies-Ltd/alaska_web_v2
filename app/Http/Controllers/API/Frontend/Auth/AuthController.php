<?php

namespace App\Http\Controllers\API\Frontend\Auth;

use Auth;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Backend\UserRequest;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //SIGNIN
    public function signIn(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'             => 'required|email',
            'password'          => 'required'
        ]);

        if ($validator->fails()) {
            $output = [
                'errors'            => $validator->errors()->all(),
                'status'            => false,
                'message'           => 'Please try again!'
            ];
        } else {
            $credential = Auth::attempt($request->only('email', 'password'));

            if($credential){
                $user = Auth::user();
                $token = $user->createToken('alaska')->plainTextToken;
                
                User::find($user->id)->update([
                    'firebase_token'            => $request->firebase_token,
                    'web_token'                 => $request->web_token,
                ]);
                if($user->signup_status==0){
                    $output = [
                        'user'              => User::find($user->id),
                        'token'             => $token,
                        'status'            => true,
                        'message'           => 'Login successful!',
                        'signup_status'     => '0'
                    ];

                }
                else{
                    $output = [
                        'user'              => User::find($user->id),
                        'token'             => $token,
                        'status'            => true,
                        'signup_status'     => 1,
                        'message'           => 'Login successful!'
                    ];

                }
            } else {
                $output = [
                    'status'            => false,
                    'message'           => 'These credentials do not match our records.',
                ];
            } 
        }

        return response($output);         
    } 
    //END SIGNIN

    
    //START SIGNIN FROM SOCIAL
    public function signUpSocial(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'                              => 'required',
            'email'                             => 'required|email',
        ]);

        if ($validator->fails()) {
            $output = [
                'errors'                        => $validator->errors()->all(),
                'status'                        => false,
                'message'                       => 'Please try again!'
            ];
        } else {

            $existUser = User::where('email', $request->email)->where('status', 1)->first();

            if ($existUser) {
                $token = $existUser->createToken('alaska')->plainTextToken;
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $name = time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/frontend/users/profile');
                    $image->move($destinationPath, $name);
        
                } else {
                    $name = $existUser->image;
                }
                
                User::find($existUser->id)->update([
                    'image'                     => $name,
                    'firebase_token'            => $request->firebase_token,
                    'web_token'                 => $request->web_token,
                ]);

                $output = [
                    'user'                      => User::find($existUser->id),
                    'token'                     => $token,
                    'status'                    => true,
                    'message'                   => 'Login successful!'
                ];
            } else {
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $name = time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/frontend/users/profile');
                    $image->move($destinationPath, $name);
        
                } else {
                    $name = '';
                }

                $data = [
                    'name'                      => $request->name,
                    'email'                     => $request->email,
                    'phone'                     => $request->phone,
                    'image'                     => $name,
                    'firebase_token'            => $request->firebase_token,
                    'web_token'                 => $request->web_token,
                    'user_type'                 => 2,
                    'signup_from'               => $request->signup_from,
                    'status'                    => 1,
                ];
        
                $userInfo =  User::create($data);

                if (!empty($userInfo) && !empty($name)) {
                    Gallery::create([
                        'user_id'           => $userInfo->id,
                        'image'             => $name,
                        'image_type'        => 0,
                        'created_by'        => $userInfo->id,
                    ]);
                }

                $token = $userInfo->createToken('alaska')->plainTextToken;
                $output = [
                    'user'                      => $userInfo,
                    'token'                     => $token,
                    'status'                    => true,
                    'message'                   => 'Login successful!'
                ];
            }
        }

        return response($output);         
    } 
    //END SIGNIN FROM SOCIAL

    //FORGET PASSWORD
    public function forgetPassword() {

    }


    //SIGNUP
    public function signUp(Request $request)
    {
        $this->validate($request, [
            'name'              => 'required',
            'email'             => 'required',
            'password'          => 'required'
        ]);

        $emailCheck = User::where('email', $request->email)->where('status', 1)->first();

        if ($emailCheck) {
            $output = [
                'status' => '400',
                'message' => 'Your email already exist!'
            ];
        } else {
            $data = [
                'name'                  => $request->name,
                'email'                 => $request->email,
                'phone'                 => $request->phone,
                'password'              => Hash::make($request->password),
                'firebase_token'        => $request->firebase_token,
                'web_token'             => $request->web_token,
                'user_type'             => 2,
                'signup_from'           => $request->signup_from,
                'status'                => 1,
            ];
    
            $userInfo =  User::create($data);

            if ($userInfo) {
                $credential = Auth::attempt($request->only('email', 'password'));

                if ($credential) {
                    $user = Auth::user();
                    $token = $user->createToken('alaska')->plainTextToken;

                    $output = [
                        'user'              => $user,
                        'token'             => $token,
                        'status'            => true,
                        'message'           => 'Account is created Successfully!'
                    ];
                } else {
                    $output = [
                        'status'                => '400',
                        'message'               => 'Please try again!'
                    ];
                }
            } else {
                $output = [
                    'status'                => '400',
                    'message'               => 'Please try again!'
                ];
            }
            
        }

        return response()->json($output);
    }

    //SIGNOUT
    public function signOut(Request $request)
    {
        $logoutFrom = $request->logout_from; //1=App, 2=Web
        $userId = $request->user_id;
        
        if($logoutFrom==1){
            User::find($userId)->update([
                'firebase_token'            => NULL,
            ]);
        } else {
            User::find($userId)->update([
                'web_token'                 => NULL,
            ]);
        }
        
        Auth::logout();
        
        return response()->json([
            'status' => 200,
            'message' => 'Sign Out Successfully!'
        ]);
    }
}
