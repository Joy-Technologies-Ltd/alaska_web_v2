<header>
    <div class="header_wrap">
        <div class="header_inner mcontainer">
            <div class="left_side">
                        <span class="slide_menu" uk-toggle="target: #wrapper ; cls: is-collapse is-active">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M3 4h18v2H3V4zm0 7h12v2H3v-2zm0 7h18v2H3v-2z" fill="currentColor"></path></svg>
                        </span>

                <div id="logo">
                    <a href="{{url('/')}}">
                        <img style="height: 50px" src="{{asset('frontend/assets/images/logo.png')}}" alt="">
                        <img src="assets/images/logo-light.html" class="logo_inverse" alt="">
                        <img src="{{asset('frontend/assets/images/logo.png')}}" class="logo_mobile" alt="">
                    </a>
                </div>
            </div>
            <div class="right-side uk-visible@s">
                <a href="#" class="bg-gradient-to-bl font-semibold from-purple-400 px-8 py-2 ml-8 rounded text-sm text-white to-blue-600 hover:shadow-lg hover:text-white">
                    DOWNLOAD
                </a>
                <ul class="header_menu">
                    <li class="{{request()->segment(1) == 'features' ? 'uk-active' : ''}}"><a href="#"> Features </a> </li>
                    <li class="{{request()->segment(1) == 'get-help' ? 'uk-active' : ''}}"><a href="#"> Get Help </a> </li> &nbsp;&nbsp;|&nbsp;&nbsp;
                    @if(empty(session('user_session')))
                        <li class="{{request()->segment(1) == 'sign-in' ? 'uk-active' : ''}}"><a href="{{url('/sign-in')}}"> Login </a> </li>
                        <li class="{{request()->segment(1) == 'sign-up' ? 'uk-active' : ''}}"><a href="{{url('/sign-up')}}"> Registration </a> </li>
                    @endif
                </ul>
                @if(session('user_session') === null)
                    <div class="right_side">
                        <div class="header_widgets">
                            <a href="#">
                                <img src="{{asset('frontend/assets/images/default_user.png')}}" class="is_avatar" alt="">
                            </a>
                            <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">
                                <a href="{{url('/user-profile')}}" class="user">
                                    <div class="user_avatar">
                                        <img src="{{asset('frontend/assets/images/default_user.png')}}" alt="">
                                    </div>
                                    <div class="user_name">
                                        <div> Stella Johnson </div>
                                        <span> @johnson</span>
                                    </div>
                                </a>
                                <hr>
                                <a href="#">
                                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                                    My Account
                                </a>
                                <a href="{{url('sign-out-user')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                    Log Out
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>
