<header id="header" class="tg-haslayout">
	<div class="container">
		<strong class="logo">
			<a href="/">
				<img src="{{asset('images/logo.png')}}" alt="Constructioner">
			</a>
		</strong>
		<div class="navigation-area">
			<ul class="add-nav">
				@if (Route::has('login'))
                @auth
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
				@else
	        		<li><a data-toggle="modal" data-target=".login-modalbox" href="#">Login</a></li>
	        		<li><a data-toggle="modal" data-target=".signup-modalbox" href="#">Register</a></li>
				@endauth
				@endif
			</ul>
			<nav id="nav">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul>
					<li>
						<a href="/">Home</a>
						<ul>
							<li><a href="{{route('index.2')}}">Home2</a></li>
						</ul>
					</li>
						<li><a href="{{route('about')}}">About</a></li>
						<li><a href="{{route('services')}}">Services</a></li>
						<li>
						<a href="#">BUILD IT YOURSELF</a>
						<ul>
							<li><a href="{{route('introduction')}}">Introduction</a></li>
							<li><a href="{{route('select.design')}}">Select your design</a></li>
							<li><a href="{{route('virtual.construction')}}">virtual construction</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Portfolio</a>
						<ul>
							<li class="current-menu-item">
								<a href="{{route('portfolio.grid')}}">Portfolio grid</a>
							</li>
          					<li>
          						<a href="{{route('portfolio.list')}}">Portfolio list</a>
          					</li>
							<li>
								<a href="{{route('portfolio.detail')}}">Portfolio Detail</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Blog</a>
						<ul>
							<li><a href="{{route('blog.grid')}}">blog grid</a></li>
							<li><a href="{{route('blog.list')}}">blog list</a></li>
							<li><a href="{{route('blog.detail')}}">blog detail</a></li>
						</ul>
					</li>
					<li><a href="{{route('contact')}}">Contact</a></li>
						
					<li>
						<a href="#">
							<span>pages</span>
							<i class="fa fa-navicon"></i>
						</a>
						<ul>
							<li>
								<a href="{{route('comming.soon')}}">comming soon</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		</div>
	</div>
</header>