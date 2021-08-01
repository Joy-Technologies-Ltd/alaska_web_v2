<html>
<head>
    <title>Profile</title>
    @include('frontend.includes_landing.head_items')
</head>
<body>
    <div id="wrapper">
        @include('frontend.includes.profile_header')
        @include('frontend.includes.side_bar')
        @include('frontend.includes.profile_body')
    </div>
    <!-- Scripts ================================================== -->
    @include('frontend.includes_landing.body_items')
</body>
</html>
