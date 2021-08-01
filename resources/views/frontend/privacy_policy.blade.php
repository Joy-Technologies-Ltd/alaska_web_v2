@extends('frontend.layouts.master')
@section('title')
    Privacy Policy
@endsection
@section('content')
    <div class="container">
        <div class="bdCareAppRight">
            <h1>
                Privacy Policy
            </h1>
            <br>
            <hr>
            <br>
            <p>
                We at "Video Translation"(“we”, “us”, or “our”) have created this Privacy Policy to explain how we collect, use, disclose and otherwise process personal information in connection with operating our business. This Privacy Policy describes the practices concerning the information collected by "Video Translation", through the use of our websites and mobile applications on which this Privacy Policy is posted. This Privacy Policy applies to our mobile applications and other online services we may provide on which this Privacy Policy is posted, and our collection of information from our corresponding social media features and pages (each a “Service” and collectively, the “Services”). In addition to describing how we collect, use, disclose and otherwise process personal information, this Privacy Policy explains the rights and choices available to individuals with respect to their personal information. We may provide additional privacy notices to you at the time we collect your data. This type of an “in-time” notice will govern how we may process the information you provide at that time.
            </p>
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
