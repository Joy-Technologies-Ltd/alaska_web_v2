@extends('frontend.layouts.master')
@section('title')
    Alaska Home
@endsection
@section('content')
    <div class="lg:py-40 pt-24 pb-12 relative -mt-20 bg-white" id="home">
        <div class="banner1">
{{--            <div class="objectWrapper">--}}
{{--                <img src="{{asset('frontend/assets/images/demos/first-banner.png')}}" alt="" class="Image__ImageWrapper">--}}
{{--                --}}
{{--            </div>--}}
            <div class="dashboardWrapper">
                <img src="{{asset('frontend/assets/images/banner-app.png')}}" alt="" class="shadow-2xl">
            </div>
        </div>
        <div class="uk-container mx-auto lg:mt-28">
            <div class="lg:w-5/12 lg:space-y-6 text-center lg:text-left lg:block flex flex-col justify-center items-center">

                <h1 class="font-bold lg:leading-snug lg:text-4xl text-2xl">
                    The Ultimate Social Sharing Network
                </h1>
                <p>
                    is developer-friendly, rich with features and highly customizable.
                    We’ve followed the highest industry standards to bring you the very best Social
                </p>
                <div class="flex gap-4">
                    <a href="#"
                       class="bg-gradient-to-bl font-semibold from-purple-500 to-blue-600 px-10 py-2 rounded text-sm text-white
                        hover:shadow-lg hover:text-white">
                        DOWNLOAD NOW </a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top" id="features">
        <div class="container">
            <div class="row" style="margin-bottom: 5%">
                <div class="text-center mb-3" style="width: 100%">
                    <h1 class="text-3xl font-semibold">Keep your life easier with Alaska online </h1>
                    <p class="mt-2"> Alaska is always ready to provide the full experience even if you don’t
                        have
                        access
                        to your phone or desktop app.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-alaska">
                        <a target="_blank" href="#">
                            <div class="demo-card">
                                <img src="frontend/assets/images/demos/home-page-meet-name-your-call-party-tab.jpg"
                                     alt="" style="height: 211.5px;">
                            </div>
                            <div class="row">
                                <h2
                                    style="width: 100%; text-align: center;font-size: 20px; font-weight: 700; padding: 40px;">
                                    Give your next Alaska Call</h2>
                            </div>
                            <div class="row" style="margin-bottom: 20%">
                                <p
                                    style=" width: 72%;margin-left: 14%;text-align: justify; line-height: 20px !important">
                                    Show your
                                    support by
                                    flashing a thumbs-up or celebrate with a birthday cake and balloons.</p>
                            </div>
                            <div class="row" style="margin-left: 12%; padding: 0 0 10% 0;">
                                <a href="#" class="bg-gradient-to-bl font-semibold from-purple-500 to-blue-600 px-5 py-2 rounded text-sm text-white
                                    hover:shadow-lg hover:text-white">
                                    Learn More -> </a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-alaska">
                        <a target="_blank" href="#">
                            <div class="demo-card">
                                <img src="frontend/assets/images/demos/livesubtitles.jpg" alt=""
                                     style="height: 211.5px;">
                            </div>
                            <div class="row">
                                <h2
                                    style="width: 100%; text-align: center;font-size: 20px; font-weight: 700; padding: 40px;">
                                    Live Subtitle </h2>
                            </div>
                            <div class="row" style="margin-bottom: 20%">
                                <p
                                    style=" width: 72%;margin-left: 14%;text-align: justify; line-height: 20px !important">
                                    Show your
                                    support by
                                    flashing a thumbs-up or celebrate with a birthday cake and balloons.</p>
                            </div>
                            <div class="row" style="margin-left: 12%; padding: 0 0 10% 0;">
                                <a href="#" class="bg-gradient-to-bl font-semibold from-purple-500 to-blue-600 px-5 py-2 rounded text-sm text-white
                                    hover:shadow-lg hover:text-white">
                                    Learn More -> </a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-alaska">
                        <a target="_blank" href="#">
                            <div class="demo-card">
                                <img src="frontend/assets/images/demos/features-skype-number.jpg" alt=""
                                     style="height: 211.5px;">
                            </div>
                            <div class="row">
                                <h2
                                    style="width: 100%; text-align: center;font-size: 20px; font-weight: 700; padding: 40px;">
                                    Alaska Number</h2>
                            </div>
                            <div class="row" style="margin-bottom: 20%">
                                <p
                                    style=" width: 72%;margin-left: 14%;text-align: justify; line-height: 20px !important">
                                    Show your
                                    support by
                                    flashing a thumbs-up or celebrate with a birthday cake and balloons.</p>
                            </div>
                            <div class="row" style="margin-left: 12%; padding: 0 0 10% 0;">
                                <a href="#" class="bg-gradient-to-bl font-semibold from-purple-500 to-blue-600 px-5 py-2 rounded text-sm text-white
                                    hover:shadow-lg hover:text-white">
                                    Learn More -> </a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{----------------------------------------------------------------------------------------------------------------------}}
    <div class="bg-white"  id="features">
        <svg width="100%" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100" xml:space="preserve" class="-mt-24 absolute fill-current text-white invisible lg:visible">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        <div class="container m-auto  py-20">
            <div class="text-center mb-3">
                <h1 class="text-3xl font-semibold"> Features that you really love </h1>
                <p class="mt-2"> Start building fast, beautiful and modern looking websites in no time using our
                    themes.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12 px-4">

                <!-- our first cad -->
                <div class="rounded p-6">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12 h-12 text-blue-500 mb-4 mt-6">
                        <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z" clip-rule="evenodd"></path>
                    </svg>
                    <h2 class="text-xl font-bold leading-10"> Extended color palette </h2>
                    <h2>
                        <p class="font-medium text-gray-600"> A beautiful color palette that can be easily modified with our
                            nicely coded Sass files. </p>
                    </h2>

                </div>
                <!-- our first cad -->
                <div class="rounded p-6">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12 h-12 text-blue-500 mb-4 mt-6">
                        <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z">
                        </path>
                    </svg>
                    <h2 class="text-xl font-bold leading-10"> Everything is modular </h2>
                    <h2>
                        <p class="font-medium text-gray-600"> Nicely customized components that can be reused anytime and
                            anywhere in your project.</p>

                    </h2>
                </div>

                <!-- our first cad -->
                <div class="rounded p-6">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12 h-12 text-blue-500 mb-4 mt-6">
                        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                        </path>
                    </svg>
                    <h2 class="text-xl font-bold leading-10"> 700+ Components </h2>
                    <h2>
                        <p class="font-medium text-gray-600"> Nicely customized components that can be reused anytime and
                            anywhere in your project </p>

                    </h2>
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
