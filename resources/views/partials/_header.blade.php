<div style="display: flex; align-items: center;">
	<div style=" margin-right: 20px;" id="iconBurger">
		<div class="barre"></div>
	    <div class="barre"></div>
	    <div class="barre"></div>
	</div>
	<a href="{{url('home')}}"><h1>Energy Kids Academy</h1></a>
</div>
<div id="login">
	<ul class="row">
		<!--Si Admin utilisateur -->
		@if (Auth::user()->id == 1)
			<li><p style="color: #00ffa1"><i style="color: #00ffa1" class="fa fa-cog"></i>Admin</p></li>
            <li><a href="{{ url('logout') }}"><i class="fa fa-user"></i>Déconnexion</a></li>
        @else
        	<li><a href="{{ url('logout') }}"><i class="fa fa-user"></i>Déconnexion</a></li>
        @endif
       
	</ul>
</div>


<!--hamburger-->

