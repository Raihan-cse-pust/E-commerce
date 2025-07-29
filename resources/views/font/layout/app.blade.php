<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home | Fashionwave - Ecommerce Website</title>
    <meta name="description" content="Fashionwave - Ecommerce Website" />
    <meta name="keywords"
        content="business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive" />
    <meta name="author" content="liveprojectacademy" />
    <meta name="csrf-token" content="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">

    <!-- fonts file -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- css file  -->
    <!-- resources/views/layouts/app.blade.php -->

    <link rel="stylesheet" href="{{ asset('fontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/assets/css/extra.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/assets/css/cookie-consent.css') }}">



    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('fontend/assets/images/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('fontend/admin/css/toastr.min.css') }}">

</head>

<body class="direction-ltr">
    <!-- Preloader Area Start -->
    @include('font.partial.header')

    <div class="maincontent">
        @yield('content')
    </div>


    <!-- footer area start here -->
    <!-- footer area start here -->
    @include('font.partial.footer')
    <!-- footer area end here -->
    <!-- footer area end here -->


    <!-- Js file  -->
    @include('font.partial.script')
</body>

</html>
