<div>
	<div class="row">
@foreach($restaurants as $restaurant)
    <div class="col-sm-6 col-lg-4">
			<div class="feature-item">
			<img src="assets/img/home-one/feature1.jpg" alt="Feature">
				<div class="feature-inner">
				<ul>
				<li>
				<img src="assets/img/home-one/feature1.png" alt="Feature">
				</li>
				<li>
				<span>{{$restaurant->name}}</span>
				</li>
				<li>
				<a href="#">
				<i class='bx bx-right-arrow-alt'></i>
				</a>
				</li>
				</ul>
				</div>
			</div>
		</div>
	@endforeach
	</div>
	<div class="container">
		{{$restaurants->links()}}
	</div>
</div>
