<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link href="assets/images/favicon.png" rel="icon" type="image/png">

<!-- Basic Page Needs
    ================================================== -->
<title>@yield('title')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Socialite is - Professional A unique and beautiful collection of UI elements">
<!-- icons
================================================== -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/icons.css') }}">
<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/uikit.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/tailwind.css') }}">

@yield('css')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap');

    .bdCareAppRight h1 {
        text-align: center;
        font-size: 25px;
        color: #0a6aa1;
        box-sizing: border-box;
    }

    .fa {
        color: white;
        font-size: 20px;
    }

    .footer-top {

        padding: 30px 70px 10px 70px;
    }

    .download-img {
        padding-left: 10%;
    }

    .footer-bottom {
        background-color: #2563eb;
        padding: 0px 70px;

    }

    .social-icon {
        padding: 10px 0;
    }

    .quick-menu-footer {
        padding-top: 2%;
    }

    .contact-footer {
        padding-top: 2%;
    }

    .copyright {
        border-top: 1px solid #6f7c88;
        padding: 10px 0 10px 0;
    }

    .policy-menu {
        text-align: right;

    }

    .footer-title {
        font-size: 20px;
        font-weight: 500;
        padding-bottom: 10px;
    }

    body {
        margin: 0 auto;
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

    .footer-about-content {
        width: 70%;
        padding-top: 15px;
    }

</style>
