@extends('frontend.layouts.master')
@section('title')
    Personal Info Update
@endsection
@section('content')
    <div class="container">
        <div class="row" style="margin-top: 20px; margin-bottom: 80px">
            <div class="col-md-7">
                <div style="margin-left: 10%">
                    <h1 class="font-bold lg:leading-snug lg:text-4xl text-2xl">
                        Stay connected anywhere with Alaska online
                    </h1>
                    <p>
                        Enjoy the full effortless Alaska experience from your browser without having to install the
                        application on your computer or mobile phone.
                    </p><br>
                    <div class="gap-4">
                        <a href="#" class="bg-gradient-to-bl font-semibold from-purple-500 to-blue-600 px-10 py-2 rounded text-sm text-white
                          hover:shadow-lg hover:text-white">
                            Download Now </a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="dashboardWrapper">
                    <form class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" action="{{route('reg-user')}}" method="post">
                        @csrf
                        <div>
                            <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Update Personal Information </h1>

                            <div>
                                <div>
                                    <label class="mb-0"> User Name </label>
                                    <input type="text" placeholder="Enter your username" name="user_name"
                                           class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                                </div>
                            </div>

                            <div>
                                <label class="mb-0"> Email Address </label>
                                <input type="email" name="email" placeholder="enter your email"
                                       class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                            </div>
                            <div>
                                <label class="mb-0"> Select Gender </label>
                                <select name="gender" id="Gender"
                                        class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-0"> Date of Birth</label>
                                <input type="date" name="date_of_birth"
                                       class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                            </div>
                            <div>
                                <label class="mb-0"> Enter your country </label>
                                <select name="country" id="Gender"
                                        class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                                    <option value="1">BD</option>
                                    <option value="2">USA</option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-0"> Enter your language </label>
                                <select name="language" id="Gender"
                                        class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full">
                                    <option value="1">English</option>
                                    <option value="2">Bengali</option>
                                </select>
                            </div>

                            <div>
                                <button type="submit"
                                        class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                                    Update Information</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="footer-top" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6 download-img">
                    <div class="bdCareAppLeft">
                        <div class="bdCareImg">
                            <img src="{{asset('frontend/assets/images/video_calling_phone.png')}}" width="60%">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bdCareAppRight">
                        <h1>Download the Alaska App!</h1>
                        <p
                            style="font-size: 13px;color: #413c3c;font-weight: 500;padding: 10px 10px 10px 20px;">
                            Alaska is not a replacement for your telephone and can't be used for emergency
                            calling
                        </p>
                        <div class="store-btn mt-4" style="margin-left:25%;">

                            <div class="row">
                                <div class="col-md-4"><img src="{{asset('frontend/assets/images/qr_code.png')}}">
                                </div>
                                <div class="col-md-8">
                                    <div class="row" style="padding-bottom: 5%; padding-top:3%"><img
                                            src="{{asset('frontend/assets/images/google_play.png')}}" alt="" width="50%">
                                    </div>
                                    <div class="row"><img src="{{asset('frontend/assets/images/app_store.png')}}" alt=""
                                                          width="50%">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
