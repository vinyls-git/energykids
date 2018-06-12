@extends('layouts.mainLayout')

    @section('content')
    	<section id="index" class="container">

    		<!--Box 1 - Bienvenue -->	
    		<div id="logoIndex" class="box">
    			<h1>Energy Kids Academy</h1>
    			<p>Bienvenue sur votre application de gestion des stocks</p>
    			<p>Accés rapide</p>
    			<nav role="navigation">
					<ul >
						<li class="sidebarLi">
							<a style="background-color: #dc7831; color: #fff;" class="btn" href="{{ url('stock') }}">
								<i class="fa fa-archive"></i>Stock
							</a>
						</li>
						<li class="sidebarLi">
							<a style="background-color: #2eabd1; color: #fff;" class="btn" href="{{ url('course') }}">
								<i class="fa fa-cog"></i>Course
							</a>
						</li>
						<!--Si Admin utilisateur -->
						@if (Auth::user()->id == 1)
							<li class="sidebarLi">
								<a style="background-color: #00ffa1; color: #fff;" class="btn" href="{{ url('gestion') }}">
									<i class="fa fa-address-book"></i>Gestion
								</a>
							</li>
							<li class="sidebarLi">
								<a style="background-color: #00ffa1; color: #fff;" class="btn" href="{{ url('register') }}">
									<i class="fa fa-address-book"></i>Utilisateur
								</a>
							</li>
						@endif
					  
					</ul>
				</nav>
    		</div>
		</section>
    @stop