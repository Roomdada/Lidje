@extends('layouts.master')
@section('content')
<div class="page-title-area page-title-img-one">
<div class="container">
<div class="page-title-item">
<h2>Contact</h2>
<ul>
<li>
<a href="index.html">Acceuil</a>
</li>
<li>
<i class='bx bx-chevron-right'></i>
</li>
<li>contactez nous</li>
</ul>
</div>
</div>
</div>


<div class="feature-area pt-100 pb-70">
<div class="container">







<div class="contact-form-area ptb-100">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="contact-item">
<form id="contactForm">
<div class="row">
<div class="col-sm-6 col-lg-12">
<div class="form-group">
<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-sm-6 col-lg-12">
 <div class="form-group">
<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-sm-6 col-lg-12">
<div class="form-group">
<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-sm-6 col-lg-12">
<div class="form-group">
<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12 col-lg-12">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12 col-lg-12">
<button type="submit" class="cmn-btn btn">
Send Message
</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
<div class="contact-social">
<span>Follow Us on</span>
<ul>
<li>
<a href="#" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-instagram'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-youtube'></i>
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="contact-img">
<img src="assets/img/contact-man.png" alt="Contact">
</div>
</div>
</div>
</div>
</div>






</div>
</div>


@include('layouts.footer')



@stop