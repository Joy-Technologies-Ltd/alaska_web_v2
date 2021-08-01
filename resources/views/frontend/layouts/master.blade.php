<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/socialitev2.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jun 2021 10:00:32 GMT -->
<head>
    @section('title')
        Alaska Home
    @endsection
    @include('frontend.includes_landing.head_items')
</head>

<body class="overflow-x-hidden">

<main class="app-content">
{{--    <div id="Wrapper">--}}
    <div>
        <!-- Header ================================================== -->
        @include('frontend.includes_landing.header')

        @yield('content')

        <!-- Footer ================================================== -->
        @include('frontend.includes_landing.footer')
    </div>
</main>
<!-- Scripts ================================================== -->
@include('frontend.includes_landing.body_items')

</body>

<!-- Mirrored from demo.foxthemes.net/socialitev2.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jun 2021 10:02:08 GMT -->
</html>
