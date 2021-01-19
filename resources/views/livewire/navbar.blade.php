<div>
   <nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="index.html">
<img class="nav-two-logo-one" src="assets/img/logo-two.png" alt="Logo">
<img class="nav-two-logo-two" src="assets/img/logo.png" alt="Logo">
</a>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<ul class="navbar-nav">
<li class="nav-item">
<a href="#" class="nav-link dropdown-toggle active">Accueil</a>

</li>
<li class="nav-item">
<a href="about.html" class="nav-link">A propos</a>
</li>
<li class="nav-item">
<a href="/restaurants" class="nav-link">Nos Restaurant</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link dropdown-toggle">Plats<i class='bx bx-chevron-down'></i></a>
<ul class="dropdown-menu">
@foreach($categories as $item)
<li class="nav-item">
<a href="service.html" class="nav-link">{{$item->name}}</a>
</li>
@endforeach
</ul>
</li>

<li class="nav-item">
<a href="contact-us.html" class="nav-link">Contact</a>
</li>
<li class="nav-item">
<a href="contact-us.html" class="nav-link">Se connecter</a>
</li>
</ul>
<div class="side-nav">
 <a class="nav-cart" href="#">
<i class='bx bxs-cart'></i>
<span>1</span>
</a>
<button type="button" class="btn modal-btn" data-toggle="modal" data-target="#myModalRight">
<i class='bx bx-menu-alt-right'></i>
</button>
</div>
</div>
</nav>
</div>
