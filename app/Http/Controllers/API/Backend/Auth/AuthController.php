<?php

namespace App\Http\Controllers\API\Backend\Auth;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Backend\UserRequest;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    
    public function signIn(Request $request)
    {
        $user = $request->validate([
            'email'             => 'required|email',
            'password'          => 'required'
        ]);


       $credential = Auth::attempt($request->only('email', 'password'));

       if($credential){

        $user = Auth::user();
        $token = $user->createToken('alaska')->plainTextToken;

        $response = [
            'user'              => $user,
            'token'             => $token,
            'status'            => true,
            'message'           => 'Login successful!'
        ];

        return response($response, 201);

       } else {

            // if (! $user || ! Hash::check($request->password, $user->password)) {

            //     // throw ValidationException::withMessages([
            //     //     'email' => ['The provided credentials are incorrect.'],
            //     // ]);

            //     return response([
            //         'message' => ['These credentials do not match our records.']
            //     ], 404);

            // }

            return response()->json([
                [
                    'message' => 'These credentials do not match our records.',
                    'status'  => false
                ], 404
            ]);

       }
    
        
    } 

    public function forgetPassword(){

    }

    public function signUp(UserRequest $request)
    {

        $validated = $request->validated();
        // $rules = [

        //         'name'      => 'required|string|max:255',
        //         'email'     => 'required|string|email|max:255|unique:users',
        //         'password'  => 'required|string|min:8'
        // ];

        // $validator = Validator::make($request->all(), $rules);

        // if ($validator->fails()) {
        //    return response()->json($validator->errors(), 422);
        // }

        $user =  User::create($request->all()); 

        return response()->json([
            'status' => true,
            'message' => 'Registration Success!'
            ]); 

    }

    public function signOut()
    {
        Auth::logout();
        return response()->json([
            'status' => 200,
            'message' => 'Sign Out Successfully!'
        ]);
    }

}
