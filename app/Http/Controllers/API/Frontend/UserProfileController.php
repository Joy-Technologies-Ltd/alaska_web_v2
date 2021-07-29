<?php

namespace App\Http\Controllers\API\Frontend;

use DB;
use Auth;
use Helper;
use Validator;
use App\Models\User;
use App\Models\Gallery;
use App\Models\UserDetails;
use App\Models\JobExperience;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserProfileResource;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{

    //profile
    public function profile(Request $request){
        $userId                 = $request->user_id;

        $data['userInfo']       = $userInfo = User::find($userId);
        $data['userDetails']    = $userDetails = UserDetails::leftJoin('blood_groups', 'blood_groups.id', '=', 'user_details.blood_group_id')
                                ->leftJoin('languages', 'languages.id', '=', 'user_details.default_language_id')
                                ->leftJoin('countries', 'countries.id', '=', 'user_details.country_id')
                                ->leftJoin('genders', 'genders.id', '=', 'user_details.gender')
                                ->select('user_details.*', 'genders.gender_name', 'blood_groups.blood_group_name', 'languages.name as language_name', 'countries.name as country_name')
                                ->where('user_details.user_id', $userId)->first();

        $data['jobExperiences'] = JobExperience::where('user_id', $userId)->where('status', 1)->get();
        
        return response()->json($data);
    }

    //PROFILE UPDATE
    public function profileUpdate(Request $request){
        $userId = Auth::user()->id;

        $validator = Validator::make($request->all(), [
            'name'                      => 'required',
            'user_name'                 => 'required',
            'gender'                    => 'required',
            'address'                   => 'required',
            'country_id'                => 'required',
            'default_language_id'       => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'errors'            => $validator->errors()->all(),
                'status'            => '400',
                'message'           => 'Please try again!'
            ];
        } else {
            DB::beginTransaction();
            $userInfo = User::find($userId);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPathGallery = public_path('/frontend/users/gallery');
                $image->move($destinationPathGallery, $name);
    
            } else {
                $name =  $userInfo->image;
            }

            //USER INFORMATION UPDATE
            User::find($userId)->update([
                'name'                      => $request->name,
                'image'                     => $name,
                'user_name'                 => $request->user_name,
                'phone'                     => $request->phone
            ]);

            //IMAGE UPLOAD TO GALLERY
            Gallery::create([
                'user_id'                   => $userId,
                'image'                     => $name,
                'image_type'                => 1
            ]);
    
            //USER DETAILS UPDATE
            $userDetails = UserDetails::where('user_id', $userId)->first();

            if($userDetails) {
                $userDetails->update([
                    'date_of_birth'             => $request->date_of_birth,
                    'blood_group_id'            => $request->blood_group_id,
                    'gender'                    => $request->gender,
                    'address'                   => $request->address,
                    'country_id'                => $request->country_id,
                    'default_language_id'       => $request->default_language_id,
                ]);
            } else {
                UserDetails::create([
                    'user_id'                   => $userId,
                    'date_of_birth'             => $request->date_of_birth,
                    'blood_group_id'            => $request->blood_group_id,
                    'gender'                    => $request->gender,
                    'address'                   => $request->address,
                    'country_id'                => $request->country_id,
                    'default_language_id'       => $request->default_language_id,
                ]);
            }            

            $response = [
                'status'            => '200',
                'message'           => 'Profile successfully updated!'
            ];
            DB::commit();
        }

        return response()->json($response);
    }




    //GALLERY
    public function gallery(Request $request){
        $userId = Auth::user()->id;
        $images = $request->image; //Array

        $validator = Validator::make($request->all(), [
            'image'     => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'errors'                        => $validator->errors()->all(),
                'status'                        => 400,
                'message'                       => 'Please try again!'
            ];
        } else {
            foreach($images as $image) {
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $name = time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/frontend/users/gallery');
                    $image->move($destinationPath, $name);

                    $storeData = Gallery::create([
                        'user_id'           => $userId,
                        'image'             => $name
                    ]);
                }
            } 

            $response = [
                'status'                        => 200,
                'message'                       => 'Image successfully uploaded!'
            ];
        }
    }
}
