<?php

namespace App\Http\Controllers\API\Frontend;

use Auth;
use Validator;

use App\Models\User;
use App\Models\UserDetails;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //PERSONAL INFO
    public function personalInfo(Request $request) {
        // return $request;
        $userId = Auth::user()->id;

        $validator = Validator::make($request->all(), [
            'user_name'             => 'required',
            'date_of_birth'         => 'required',
            'gender'                => 'required',
            'country_id'            => 'required',
            'language_id'           => 'required',
        ]);

        if ($validator->fails()) {
            $output = [
                'errors'            => $validator->errors()->all(),
                'status'            => '400',
                'message'           => 'Please try again!'
            ];
        } else {
            //UPDATE USER TABLE
            $userInfo = User::find($userId)->update([
                'user_name'                 => $request->user_name,
                'signup_status'             => 1,
            ]);

            //UPDATE USER DETAILS
            $unserDetails = UserDetails::where('user_id', $userId)->where('status', 1)->first();
            $personalInfo = [
                'user_id'                   => $userId,
                'date_of_birth'             => $request->date_of_birth,
                'gender'                    => $request->gender,
                'country_id'                => $request->country_id,
                'default_language_id'       => $request->language_id,
                'status'                    => 1,
            ];
            if ($unserDetails) {
                $updateInfo = $unserDetails->update($personalInfo);
            } else {
                $updateInfo = UserDetails::create($personalInfo);
            }

            if ($updateInfo) {
                $output = [
                    'status'            => '200',
                    'message'           => 'Successfully completed!'
                ];
            } else {
                $output = [
                    'status'            => '400',
                    'message'           => 'Please try again!'
                ];
            }
        }

        return response()->json($output);
    }
    //END PERSONAL INFO
}
