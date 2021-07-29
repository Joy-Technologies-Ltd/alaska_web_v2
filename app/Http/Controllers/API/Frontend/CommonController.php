<?php

namespace App\Http\Controllers\API\Frontend;

use DB;
use App\Models\Country;
use App\Http\Controllers\Controller;
use App\Http\Resources\BloodGroupResource;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    //COUNTRIES
    public function countries(Request $request){
        $name = $request->country_name;

        if ($name) {
            $data['countries'] = DB::table('countries')->where('name', 'Like', '%' . $name . '%')->get();
        } else {
            $data['countries'] = DB::table('countries')->get();
        }        

        return response()->json($data);
    }

    //LANGUAGES
    public function languages(Request $request){
        $name = $request->language_name;

        if ($name) {
            $data['languages'] = DB::table('languages')->where('name', 'Like', '%' . $name . '%')->get();
        } else {
            $data['languages'] = DB::table('languages')->get();
        }  

        return response()->json($data);
    }

    
    //genders
    public function genders(){
        $data['genders'] = DB::table('genders')->get();

        return response()->json($data);
    }

    //genders
    public function bloodGroups(){
        $data = DB::table('blood_groups')->get();

        return BloodGroupResource::collection($data);
    }


}
