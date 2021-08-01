@extends('frontend.layouts.master')
@section('title')
    Terms and Conditions
@endsection
@section('content')
    <div class="container">
        <div class="bdCareAppRight">
            <h1>
                Terms and Conditions
            </h1>
            <br>
            <hr>
            <br>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
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
