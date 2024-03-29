<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dawn Amadis Christian School Inc.</title>
    <meta name="description" content="Welcome to Dawn Amadis Christian School Inc., where academic excellence meets spiritual growth. Our dedicated team of educators is committed to providing a nurturing environment that promotes holistic development, rooted in Christian values. Discover a comprehensive curriculum designed to engage and challenge students at every grade level.">
    <!-- Favicon -->

    <link href="{{ asset('/frontend/img/dawnlogo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('/frontend/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    
    <!-- Navbar Start -->
    <x-nav-start />
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <x-carousel-advert />
    <!-- Carousel End -->

    <!-- Service Start -->
    <x-servicepage />
    <!-- Service End -->

    <!-- About Start -->
    <x-about-us />
    <!-- About End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('/frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('/frontend/js/main.js') }}"></script>
</body>
</html>