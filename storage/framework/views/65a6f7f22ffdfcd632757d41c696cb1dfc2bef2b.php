<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Alaska')); ?></title>
    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/assets/css/icons.css')); ?>">

    <!-- CSS 
    ================================================== --> 
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/assets/css/uikit.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/assets/css/tailwind.css')); ?>">  
    <!-- Styles -->
    <link href="<?php echo e(asset('public/css/app.css')); ?>" rel="stylesheet">
    <style>
    
        input , .bootstrap-select.btn-group button{
            background-color: #f3f4f6  !important;
            height: 44px  !important;
            box-shadow: none  !important; 
        }
       
   
    </style>
</head>
<body>
    
<div id="app_frontend">
    
</div>
<script src="<?php echo e(asset('public/frontend/assets/js/jquery-3.3.1.min.js')); ?>"></script> 
    <script src="<?php echo e(asset('public/frontend/assets/js/tippy.all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/assets/js/uikit.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/assets/js/simplebar.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/assets/js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/assets/js/bootstrap-select.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/app_frontend.js')); ?>" defer></script>
</body>
</html>
<?php /**PATH /media/heart/Extension/JTL Projects/alaska_web_v2/resources/views/frontend/layouts/master.blade.php ENDPATH**/ ?>