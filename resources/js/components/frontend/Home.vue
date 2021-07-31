<template>
    <div id="Wrapper">
        <header class="border-none bg-transparent" uk-sticky="cls-active: is_fixed ; cls-inactive: bg-transparent">
            <div class="header_inner">
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="index.html">
                            <img src="public/frontend/assets/images/demos/logo.png" alt="" style="height: auto;">
                            <img src="public/frontend/assets/images/logo-light.html" class="logo_inverse" alt="">
                            <img src="public/frontend/assets/images/logo-mobile.png" class="logo_mobile" alt="">
                        </a>
                    </div>

                    <div class="triger" uk-toggle="target: .header_menu ; cls: is-visible">
                        <i class="uil-bars"></i>
                    </div>
                    <div class="overly" uk-toggle="target: .header_menu ; cls: is-visible"></div>

                </div>
                <div class="right-side uk-visible@s">

                    <ul class="header_menu" uk-scrollspy-nav="closest: li; scroll: true">
                        <li><router-link to="/signin" uk-scroll> Login</router-link> </li>
                    </ul>
                    <router-link to="/signup" 
                        class="bg-gradient-to-bl font-semibold from-purple-400 px-8 py-2 ml-8 rounded text-sm text-white to-blue-600 hover:shadow-lg hover:text-white">
                        Registration
                    </router-link>
                </div>
            </div>
        </header>

        <div class="lg:py-40 pt-24 pb-12 relative -mt-20 bg-white" id="home">
            <div class="banner1">
                <!-- <div class="objectWrapper"> -->
                <!-- <img src="public/frontend/assets/images/demos/first-banner.png" alt="" class="Image__ImageWrapper"> -->
                <div class="dashboardWrapper">
                    <img src="public/frontend/assets/images/demos/cover.jpeg" alt="" class="shadow-2xl">
                </div>
                <!-- </div> -->
            </div>
            <div class="uk-container mx-auto lg:mt-28">
                <div
                    class="lg:w-5/12 lg:space-y-6 text-center lg:text-left lg:block flex flex-col justify-center items-center">

                    <h1 class="font-bold lg:leading-snug lg:text-4xl text-2xl">
                        Stay connected anywhere with Alaska online
                    </h1>
                    <p>
                        Enjoy the full effortless Alaska experience from your browser without having to install the
                        application on your computer or mobile phone.
                    </p>
                    <div class="gap-4">
                        <a href="#" class="bg-gradient-to-bl font-semibold from-purple-500 to-blue-600 px-10 py-2 rounded text-sm text-white 
                        hover:shadow-lg hover:text-white">
                           Download Now </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:py-20 py-12 lg:mb-24 relative" id="demos">
            <div class="uk-container mx-auto">

                <div class="text-center lg:mb-20 mb-10 max-w-md mx-auto">
                    <h1 class="lg:text-3xl text-2xl mb-2"> Discover more features</h1>
                    <p> It provides all your favourite features and it’s available in one click.</p>
                </div>


                <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-flex-center"
                    uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 100" uk-grid>

                    <div>
                        <a target="_blank" href="#">
                            <div class="demo-card">
                                <img src="public/frontend/assets/images/demos/home-page-meet-name-your-call-party-tab.jpg" alt="" style="height: 211.5px;">
                                <p> Give your next Alaska Call </p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a target="_blank" href="#">
                            <div class="demo-card">
                                <img src="public/frontend/assets/images/demos/livesubtitles.jpg" alt="">
                                <p> Live Subtitle </p>
                               
                            </div>
                        </a>
                    </div>
                    <div>
                        <a target="_blank" href="#">
                            <div class="demo-card">
                                <img src="public/frontend/assets/images/demos/features-skype-number.jpg" alt="">
                                <p> Alaska Number </p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="bg-white" id="features">

            <svg width="100%" height="100px" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px"
                viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100" xml:space="preserve"
                class="-mt-24 absolute fill-current text-white invisible lg:visible">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>

            <div class="container-fluid m-auto  py-20">

                <div class="text-center mb-3">
                    <h1 class="text-3xl font-semibold">Keep your life easier with Alaska online </h1>
                    <p class="mt-2"> Alaska is always ready to provide the full experience even if you don’t have access to your phone or desktop app.</p>
                </div>


                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12 px-4">

                    <!-- our first cad -->
                    <div class="rounded p-6">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-12 h-12 text-blue-500 mb-4 mt-6">
                            <path fill-rule="evenodd"
                                d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h2 class="text-xl font-bold leading-10"> End to end encryption </h2>
                        <h2>
                            <p class="font-medium text-gray-600"> We got you and your conversations covered with an industry standard end to end encryption. </p>

                        </h2>
                    </div>

                    <!-- our first cad -->
                    <div class="rounded p-6">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-12 h-12 text-blue-500 mb-4 mt-6">
                            <path
                                d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z">
                            </path>
                        </svg>
                        <h2 class="text-xl font-bold leading-10"> Sync up your conversations </h2>
                        <h2>
                            <p class="font-medium text-gray-600">Use Alaska in your browser for an easy access to your conversations and chat history.</p>

                        </h2>
                    </div>

                    <!-- our first cad -->
                    <div class="rounded p-6">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-12 h-12 text-blue-500 mb-4 mt-6">
                            <path
                                d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                            </path>
                        </svg>
                        <h2 class="text-xl font-bold leading-10"> Supported browsers </h2>
                        <h2>
                            <p class="font-medium text-gray-600"> You can enjoy Alaska online experience on Microsoft Edge, Google Chrome, Safari and Opera browsers.</p>

                        </h2>
                    </div>
                </div>


            </div>
        </div>
        <div class="" id="features">
            <div class="container m-auto  py-20">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="bdCareAppLeft">
                            <div class="bdCareImg">

                                <img src="public/frontend/assets/images/demos/pngtree-illustration-of-a-woman-with-a-baby-making-video-calls-png-image_1816726.png" style="width:70%;height:270px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="bdCareAppRight">
                            <h1>Download the Alaska Audio Video App!</h1>
                            <p style="font-size: 15px;color: #c9c9c9;font-weight: 500;padding: 10px 10px 10px 20px;">
                                Alaska is not a replacement for your telephone and can't be used for emergency calling
                            </p>
                            <div class="d-flex store-btn mt-4" style="margin-left:25%;">
                                <div>
                                    <h4 style="text-align: center;">Alaska App</h4>
                                    <a target="_blank"
                                        href="https://play.google.com/store/apps/details?id=com.xyz_doccure.doctor"
                                        class="mr-2">
                                        <img src="public/frontend/assets/images/demos/google-play.png">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container-fluid">

            
            
                <div class="row">
                    <div class="col-lg-4 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-about">
                            <div class="footer-logo">
                                <img src="public/frontend/assets/images/demos/logo.png" alt="logo">
                            </div>
                            <div class="footer-about-content">
                                <p style="color:white;">Alaska provide expert medical advice and healthcare through online video
                                    consultation.</p>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                    <div class="col-lg-4 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title" style="color:white;">Menus</h2>
                            <ul>
                                <li><a style="color:white;" href="url('/') ">Home</a></li>
                                    <li><a style="color:white;" href="route('login')">Login</a></li>
                                <li><a style="color:white;" href="route('mobile-verify')">Register</a></li>
                                
                                
                            </ul>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                    

                    <div class="col-lg-4 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-contact">
                            <h2 class="footer-title" style="color:white;">Contact Us</h2>
                            <div class="footer-contact-info">
                                <div class="footer-address">
                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                    <p style="color:white;"> D58(5th Floor) Road#8,Niketon, <br> Gulshan-1, Dhaka-1212, Bangladesh.</p>
                                </div>
                                <p style="color:white;">
                                    <i class="fas fa-phone-alt"></i>
                                    +880 961 167 7187
                                </p>
                                <p class="mb-0" style="color:white;">
                                    <i class="fas fa-envelope"></i>
                                    info@alaska.xyz
                                </p>
                            </div>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                </div>
            </div>
            
        </div>
        <!-- /Footer Top -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
                
            <div class="container-fluid">

            

                <!-- Copyright -->
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="copyright-text">
                                <p class="mb-0" style="color:white;">&copy; {{ currentYear }} Alaska. All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">

                            <!-- Copyright Menu -->
                            <div class="copyright-menu">
                                <ul class="policy-menu">
                                    <li><a style="color:white;" href=" url('service/terms-and-conditions') ">Terms and Conditions</a>
                                    </li>
                                    <li><a style="color:white;" href=" url('service/privacy-policy') ">Policy</a></li>
                                </ul>
                            </div>
                            <!-- /Copyright Menu -->

                        </div>
                    </div>
                </div>
                <!-- /Copyright -->
            </div>
            
        </div>
        <!-- /Footer Bottom -->
    </div>




</template>
<script>
    export default {
        data(){
            return {
                currentYear: new Date().getFullYear(),
            }
        }


    }

</script>

<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap');
 .bdCareAppRight h1 {
        text-align: center;
        font-size: 25px;
        color: #0a6aa1;
        box-sizing: border-box;
    }
    .footer-top{
    background-color: #2563eb;
    padding: 40px 70px;
}
.footer-bottom {
    background-color: #2563eb;
      padding: 0px 70px;

}

 .copyright {
    border-top: 1px solid #1663a6;
    padding: 20px 0;
}
.policy-menu{
    text-align: right;
    
}
    body {
        margin:0 auto;
        background-color: #f8f9fa;
        font-family: Inter;
    }

    .uk-container,
    header .header_inner {
        max-width: 1200px !important;
    }

   
    header {
        box-shadow: none;
        background-color: #fff;
        border-bottom: 1px solid #E5E9EF;
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        z-index: 99;
        height: 76px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    header .header_inner {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        max-width: 1400px;
        margin: auto;
        width: 100%;
        padding: 0 35px;
    }

    header .header_inner .left-side {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    header .header_inner .left-side #logo {
        display: inline-block;
        margin-right: 20px;
        font-size: 21px;
        letter-spacing: .9px;
    }

    header .header_inner .left-side #logo img {
        max-width: none;
        height: 28px;
    }

    header .header_inner .left-side #logo img.logo_inverse,
    header .header_inner .left-side #logo img.logo_mobile {
        display: none;
    }

    header .header_inner .left-side .triger {
        position: absolute;
        left: 25px;
        top: 20px;
        color: #464646;
        display: none;
        font-size: 19px;
    }

    header .header_inner .right-side {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        margin-left: auto;
    }

    header .header_inner .right-side .header-links-item {
        padding: 10px;
    }

    header .header_inner .right-side .header-links-item svg {
        width: 25px;
        height: 25px;
        color: #676666;
    }

    header .header_inner .right-side .header-avatar {
        width: 32px;
        height: 32px;
        border-radius: 100%;
        margin-left: 15px;
    }

    .is_fixed {
        -webkit-transition: all 0.8s;
        transition: all 0.8s;
        -webkit-box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.04);
        box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.04);
        background-color: white;
        border: 0;
    }

    .header_dropdown {
        width: 330px;
        margin-top: 50px;
        border-radius: 5px;
    }

    .header_dropdown ul {
        padding: 0;
        margin: 0 -20px;
    }

    .header_dropdown ul li a {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        text-decoration: none;
        color: #808080;
        position: relative;
        padding: 8px 20px;
        font-weight: 500;
    }

    .header_dropdown ul li a:hover {
        background: #f7f7f7;
    }


    .header_menu {
        padding: 0;
        margin: 0;
    }

    .header_menu li {
        list-style: none;
        display: inline;
        padding: 0;
        margin-left: 7px;
    }

    .header_menu li a {
        color: #b3b3b3;
        font-size: 0.92rem;
        text-transform: capitalize;
        font-weight: 500;
        padding: 0.8rem 0.6rem;
        border-radius: 0.375rem;
    }

    .header_menu li a:hover,
    .header_menu li a.active {
        color: black;
    }

    .header_menu li ul li a {
        color: #797979;
    }

    .header_menu li ul li a:hover {
        color: #000;
    }

    @media (min-width: 1240px) {

        .uk-container,
        header .header_inner {
            max-width: 1200px !important;
        }
    }

    .header_inner {
        padding: 0 20px !important;
    }

    .header_menu li a {
        font-size: 16px;
        padding: 0.8rem 0.9rem;
    }

    .header_menu li.uk-active a {
        color: #1e2be8 !important
    }

    .banner1 {
        position: absolute;
        width: 54%;
        height: 100%;
        top: 0px;
        right: 0px;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
    }

    .banner1 .objectWrapper {
        margin-left: auto;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .banner1 .objectWrapper .Image__ImageWrapper {
        display: block;
        max-width: 100%;
        height: auto;
        box-sizing: border-box;
        margin: 0px;
    }

    .objectWrapper .dashboardWrapper {
        position: absolute;
        right: 0px;
    }

    .objectWrapper .dashboardWrapper img {
        display: block;
        max-width: 100%;
        height: auto;
        box-sizing: border-box;
        margin: 0px;
    }


    .demo-card {
        text-align: center;
        color: #4a4a4a;
        text-transform: capitalize;
    }

    .demo-card img {
        border-radius: 8px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        margin-right: 1px;
    }

    .demo-card:hover.demo-card img,
    .demo-card:hover span.new {
        transition: 0.4s ease all;
        transform: translateY(-10px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .demo-card span.new {
        color: white;
        padding: 2px 9px;
        border-radius: 6px;
        position: absolute;
        z-index: 1;
        right: -12px;
        top: -13px;
        box-shadow: 2px 2px 3px 0px #cecece;
    }

    .demo-card p {
        margin-top: 15px;
    }

    @media (max-width: 992px) {
        .banner1 {
            width: 80%;
            position: relative;
            margin: auto;
        }
    }

</style>
