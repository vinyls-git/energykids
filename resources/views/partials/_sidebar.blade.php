
	<nav role="navigation">
		<ul>
			<li class="sidebarLi sidebarLiHome"><a href="{{ url('home') }}"><i class="fa fa-home"></i>Accueil</a></li>
			<li class="sidebarLi"><a href="{{ url('stock') }}"><i class="fa fa-archive"></i>Stock</a></li>
			<li class="sidebarLi"><a href="{{ url('course') }}"><i class="fa fa-cart-plus"></i>Course</a></li>

			<!--Si Admin utilisateur -->
			@if (Auth::user()->id == 1)
			
				<li class="sidebarLi"><a style="color: #00ffa1" href="{{ url('gestion') }}"><i class="fa fa-cogs"></i>Gestion</a></li>
				<li class="sidebarLi"><a style="color: #00ffa1" href="{{ url('register') }}"><i style="color: #00ffa1" class="fa fa-user"></i>Utilisateur</a></li>
			@endif
			
		</ul>
	</nav>
