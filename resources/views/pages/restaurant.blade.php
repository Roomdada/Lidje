@extends('layouts.master')
@section('content')
<div class="page-title-area page-title-img-one">
<div class="container">
<div class="page-title-item">
<h2>Restaurants</h2>
<ul>
<li>
<a href="index.html">Acceuil</a>
</li>
<li>
<i class='bx bx-chevron-right'></i>
</li>
<li>nos restaurants</li>
</ul>
</div>
</div>
</div>


<div class="feature-area pt-100 pb-70">
<div class="container">

@livewire('all-restaurant')


</div>
</div>


@include('layouts.footer')



@stop