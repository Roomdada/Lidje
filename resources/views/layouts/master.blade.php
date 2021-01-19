<!DOCTYPE html>
<html lang="zxx">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
<title>{{config('app.name')}}</title>
<link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
 @livewireStyles
</head>
<body>

<div class="loader">
<div class="d-table">
<div class="d-table-cell">
<div class="spinner"></div>
</div>
</div>
</div>


<div class="navbar-area fixed-top">

<div class="mobile-nav">
<a href="index.html" class="logo">
<img src="{{asset('assets/img/logo-two.png')}}" alt="Logo">
</a>
</div>

<div class="main-nav main-nav-two">
<div class="container">
@livewire('navbar')
</div>
</div>
</div>


<div id="myModalRight" class="modal fade modal-right" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<img src="{{asset('assets/img/logo.png')}}" alt="Logo">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<h2>About Us</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic aliquid quas qui minus! Dolor, ad. Odit, ullam perspiciatis nesciunt numquam explicabo, sunt ipsa libero ipsum maiores officia eius reprehenderit exercitationem.</p>
<div class="image-area">
<h2>Instagram</h2>
<div class="row">
<div class="col-lg-4">
<a href="#">
<img src="{{asset('assets/img/home-one/blog1.jpg')}}" alt="Instagram">
</a>
</div>
<div class="col-lg-4">
<a href="#">
<img src="{{asset('assets/img/home-one/blog2.jpg')}}" alt="Instagram">
</a>
</div>
<div class="col-lg-4">
<a href="#">
<img src="{{asset('assets/img/home-one/blog3.jpg')}}" alt="Instagram">
</a>
</div>
<div class="col-lg-4">
<a href="#">
<img src="{{asset('assets/img/home-one/blog4.jpg')}}" alt="Instagram">
</a>
</div>
<div class="col-lg-4">
<a href="#">
<img src="{{asset('assets/img/home-one/blog5.jpg')}}" alt="Instagram">
</a>
</div>
<div class="col-lg-4">
<a href="#">
<img src="{{asset('assets/img/home-one/blog6.jpg')}}" alt="Instagram">
</a>
</div>
</div>
</div>
<div class="social-area">
<h3>Our Social Contact</h3>
<ul>
<li>
<a href="https://www.facebook.com/" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
<li>
<a href="https://www.twitter.com/" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
 </li>
<li>
<a href="https://www.linkedin.com/" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
<li>
<a href="https://www.instagram.com/" target="_blank">
<i class='bx bxl-instagram'></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>




@yield('content')


@livewireScripts


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script data-cfasync="false" src="https://templates.hibootstrap.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.0.min.js"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>

<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.mixitup.min.js')}}"></script>

<script src="{{asset('assets/js/slick.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{asset('assets/js/form-validator.min.js')}}"></script>

<script src="{{asset('assets/js/contact-form-script.js')}}"></script>

<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>