<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
    public function privacyPolicy(){
        return view('frontend.privacy_policy');
    }
    public function termsCondition(){
        return view('frontend.terms_condition');
    }
    public function userProfile(){
        return view('frontend.profile');
    }
}
