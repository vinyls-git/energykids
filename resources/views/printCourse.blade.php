<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
<head>
    <meta property="og:title" content="Energy Kids Academy" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.opendesignschool.net/" />
    <meta property="og:image" content="img/logo.png" />
    <meta property="og:description" content="Bienvenue chez Energy Kids Academy." />
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!--Reset Meyer-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css" />
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
    <!--Style-->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <!--fontAwesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <title>Energy Kids Academy</title>
</head>
<body>
	<main role="main">
        <div style="background-color: #fff;" id="content">
        	
   <section id="course">
	    <div class="box">
	    	<h2>Gestion des courses</h2>

	    	<!--Periode-->
	    	<div class="choixCategorie">
				<ul class="row">
					<li id="periodeOption1" class="col-md-1 periodeOption active">Eds</li>
					<li id="periodeOption2" class="col-md-2 periodeOption">Toussaint</li>
					<li id="periodeOption3" class="col-md-1 periodeOption">Noel</li>
					<li id="periodeOption4" class="col-md-1 periodeOption">Hiver</li>
					<li id="periodeOption5" class="col-md-2 periodeOption">Printemps</li>
					<li id="periodeOption6" class="col-md-1 periodeOption">Eté</li>
				</ul>
			</div>
			
	    	<!--Tableau-->
	    	<div style="padding-top: 20px;border-top: 2px solid #ccc;" class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
						    <th>Produits</th>
						    <th>Quantités</th>
					        <th>Consomation par semaine</th>
				            <th>A acheter</th>
				            <th>Prix Unit.</th>
				            <th>Prix Total</th>
				            <th></th>
					    </tr>
					</thead>

					<!--Tableau Periode 1-->
					<tbody id="tableau1" class="tableau active">
					@foreach($entres as $entre)
						<!--Affiche si Periode 1-->
						@if( ($entre->conso1 - $entre->quantite) > 0 )
							<tr class="displayCoche">
								<td>
									<!--Produit-->
									<p>{{$entre->designation}}</p>
								</td>
								<td>
									<!--Quantité-->
									@if($entre->quantite < 0)
										<p style="color: red" >{{$entre->quantite}}</p>
									@else
										<p>{{$entre->quantite}}</p>
									@endif
								</td>
								<td>
									<!--Conso/semaine-->
									<p>{{$entre->conso1}}</p>
								</td>
								<td>
									<!--A acheter-->
									@if($entre->quantite <= $entre->conso1)
										<p>{{$entre->conso1 - $entre->quantite}}</p>
									@else
										<p>0</p>
									@endif
								</td>
								<td>
									<!--Prix-->
									<p>{{$entre->prix}}€</p>
								</td>
								<td>
									<!--Prix Total-->
									@if($entre->quantite >= $entre->conso1)
										<p style="color: red;">0€</p>
									@else						
										<p>{{ ($entre->conso1 - $entre->quantite) * $entre->prix }}€</p>
									@endif
								</td>
								<td class="coche" style="display: flex; justify-content: center;">
									<div >
										<i style="font-size: 25px;" class="fa fa-times-circle"></i>
									</div>
								</td>
							</tr>
						@endif	
					@endforeach
					</tbody>

					<!--Tableau Periode 2-->
					<tbody id="tableau2" class="tableau">
					@foreach($entres as $entre)
						<!--Affiche si Periode 2-->
						@if( ($entre->conso2 - $entre->quantite) > 0 )
							<tr class="displayCoche">
								<td>
									<!--Produit-->
									<p>{{$entre->designation}}</p>
								</td>
								<td>
									<!--Quantité-->
									@if($entre->quantite < 0)
										<p style="color: red" >{{$entre->quantite}}</p>
									@else
										<p>{{$entre->quantite}}</p>
									@endif
								</td>
								<td>
									<!--Conso/semaine-->
									<p>{{$entre->conso2}}</p>
								</td>
								<td>
									<!--A acheter-->
									@if($entre->quantite <= $entre->conso2)
										<p>{{$entre->conso2 - $entre->quantite}}</p>
									@else
										<p>0</p>
									@endif
								</td>
								<td>
									<!--Prix-->
									<p>{{$entre->prix}}€</p>
								</td>
								<td>
									<!--Prix Total-->
									@if($entre->quantite >= $entre->conso2)
										<p style="color: red;">0€</p>
									@else						
										<p>{{ ($entre->conso2 - $entre->quantite) * $entre->prix }}€</p>
									@endif
								</td>
								<td class="coche" style="display: flex; justify-content: center;">
									<div >
										<i style="font-size: 25px;" class="fa fa-times-circle"></i>
									</div>
								</td>
							</tr>
						@endif	
					@endforeach
					</tbody>

					<!--Tableau Periode 3-->
					<tbody id="tableau3" class="tableau">
					@foreach($entres as $entre)
						<!--Affiche si Periode 3-->
						@if( ($entre->conso3 - $entre->quantite) > 0 )
							<tr class="displayCoche">
								<td>
									<!--Produit-->
									<p>{{$entre->designation}}</p>
								</td>
								<td>
									<!--Quantité-->
									@if($entre->quantite < 0)
										<p style="color: red" >{{$entre->quantite}}</p>
									@else
										<p>{{$entre->quantite}}</p>
									@endif
								</td>
								<td>
									<!--Conso/semaine-->
									<p>{{$entre->conso3}}</p>
								</td>
								<td>
									<!--A acheter-->
									@if($entre->quantite <= $entre->conso3)
										<p>{{$entre->conso3 - $entre->quantite}}</p>
									@else
										<p>0</p>
									@endif
								</td>
								<td>
									<!--Prix-->
									<p>{{$entre->prix}}€</p>
								</td>
								<td>
									<!--Prix Total-->
									@if($entre->quantite >= $entre->conso3)
										<p style="color: red;">0€</p>
									@else						
										<p>{{ ($entre->conso3 - $entre->quantite) * $entre->prix }}€</p>
									@endif
								</td>
								<td class="coche" style="display: flex; justify-content: center;">
									<div >
										<i style="font-size: 25px;" class="fa fa-times-circle"></i>
									</div>
								</td>
							</tr>
						@endif	
					@endforeach
					</tbody>

					<!--Tableau Periode 4-->
					<tbody id="tableau4" class="tableau">
					@foreach($entres as $entre)
						<!--Affiche si Periode 4-->
						@if( ($entre->conso4 - $entre->quantite) > 0 )
							<tr class="displayCoche">
								<td>
									<!--Produit-->
									<p>{{$entre->designation}}</p>
								</td>
								<td>
									<!--Quantité-->
									@if($entre->quantite < 0)
										<p style="color: red" >{{$entre->quantite}}</p>
									@else
										<p>{{$entre->quantite}}</p>
									@endif
								</td>
								<td>
									<!--Conso/semaine-->
									<p>{{$entre->conso4}}</p>
								</td>
								<td>
									<!--A acheter-->
									@if($entre->quantite <= $entre->conso4)
										<p>{{$entre->conso4 - $entre->quantite}}</p>
									@else
										<p>0</p>
									@endif
								</td>
								<td>
									<!--Prix-->
									<p>{{$entre->prix}}€</p>
								</td>
								<td>
									<!--Prix Total-->
									@if($entre->quantite >= $entre->conso4)
										<p style="color: red;">0€</p>
									@else						
										<p>{{ ($entre->conso4 - $entre->quantite) * $entre->prix }}€</p>
									@endif
								</td>
								<td class="coche" style="display: flex; justify-content: center;">
									<div >
										<i style="font-size: 25px;" class="fa fa-times-circle"></i>
									</div>
								</td>
							</tr>
						@endif	
					@endforeach
					</tbody>

					<!--Tableau Periode 5-->
					<tbody id="tableau5" class="tableau">
					@foreach($entres as $entre)
						<!--Affiche si Periode 5-->
						@if( ($entre->conso5 - $entre->quantite) > 0 )
							<tr class="displayCoche">
								<td>
									<!--Produit-->
									<p>{{$entre->designation}}</p>
								</td>
								<td>
									<!--Quantité-->
									@if($entre->quantite < 0)
										<p style="color: red" >{{$entre->quantite}}</p>
									@else
										<p>{{$entre->quantite}}</p>
									@endif
								</td>
								<td>
									<!--Conso/semaine-->
									<p>{{$entre->conso5}}</p>
								</td>
								<td>
									<!--A acheter-->
									@if($entre->quantite <= $entre->conso5)
										<p>{{$entre->conso5 - $entre->quantite}}</p>
									@else
										<p>0</p>
									@endif
								</td>
								<td>
									<!--Prix-->
									<p>{{$entre->prix}}€</p>
								</td>
								<td>
									<!--Prix Total-->
									@if($entre->quantite >= $entre->conso5)
										<p style="color: red;">0€</p>
									@else						
										<p>{{ ($entre->conso5 - $entre->quantite) * $entre->prix }}€</p>
									@endif
								</td>
								<td class="coche" style="display: flex; justify-content: center;">
									<div >
										<i style="font-size: 25px;" class="fa fa-times-circle"></i>
									</div>
								</td>
							</tr>
						@endif	
					@endforeach
					</tbody>

					<!--Tableau Periode 6-->
					<tbody id="tableau6" class="tableau">
					@foreach($entres as $entre)
						<!--Affiche si Periode 6-->
						@if( ($entre->conso6 - $entre->quantite) > 0 )
							<tr class="displayCoche">
								<td>
									<!--Produit-->
									<p>{{$entre->designation}}</p>
								</td>
								<td>
									<!--Quantité-->
									@if($entre->quantite < 0)
										<p style="color: red" >{{$entre->quantite}}</p>
									@else
										<p>{{$entre->quantite}}</p>
									@endif
								</td>
								<td>
									<!--Conso/semaine-->
									<p>{{$entre->conso6}}</p>
								</td>
								<td>
									<!--A acheter-->
									@if($entre->quantite <= $entre->conso6)
										<p>{{$entre->conso6 - $entre->quantite}}</p>
									@else
										<p>0</p>
									@endif
								</td>
								<td>
									<!--Prix-->
									<p>{{$entre->prix}}€</p>
								</td>
								<td>
									<!--Prix Total-->
									@if($entre->quantite >= $entre->conso6)
										<p style="color: red;">0€</p>
									@else						
										<p>{{ ($entre->conso6 - $entre->quantite) * $entre->prix }}€</p>
									@endif
								</td>
								<td class="coche" style="display: flex; justify-content: center;">
									<div >
										<i style="font-size: 25px;" class="fa fa-times-circle"></i>
									</div>
								</td>
							</tr>
						@endif	
					@endforeach
					</tbody>
				</table>
			</div>
			<!--Quantité total de la colone Prix total-->
			<div class="row" style="justify-content: flex-end; align-items:center;">

				<!--Periode 1-->
				<div class="periode active periode1">
					<?php
					$priceTotal = 0;

					foreach($entres as $entre){
						if ($entre->conso1 >= $entre->quantite) {
							$price = ($entre->conso1 - $entre->quantite) * $entre->prix ;
							$priceTotal = $priceTotal + $price;
						}
					}

					echo '<p style="float: left;margin-top: 7px;">Le montant total des achats est de <span style="color:red;">' . $priceTotal . '€</span></p>';
					?>
					<a href="#" onclick="window.print()" class="btn btn-primary" style="margin: 0 0 0 20px">Imprimer</a>
					<a href="{{ url('course')}}" class="btn btn-primary" style="margin: 0 20px">Retour</a>
				</div>

				<!--Periode 2-->
				<div class="periode periode2">
					<?php
					$priceTotal = 0;

					foreach($entres as $entre){
						if ($entre->conso2 >= $entre->quantite) {
							$price = ($entre->conso2 - $entre->quantite) * $entre->prix ;
							$priceTotal = $priceTotal + $price;
						}
					}

					echo '<p style="float: left;margin-top: 7px;">Le montant total des achats est de <span style="color:red;">' . $priceTotal . '€</span></p>';
					?>
					<a href="#" onclick="window.print()" class="btn btn-primary" style="margin: 0 0 0 20px">Imprimer</a>
					<a href="{{ url('course')}}" class="btn btn-primary" style="margin: 0 20px">Retour</a>
				</div>

				<!--Periode 3-->
				<div class="periode periode3">
					<?php
					$priceTotal = 0;

					foreach($entres as $entre){
						if ($entre->conso3 >= $entre->quantite) {
							$price = ($entre->conso3 - $entre->quantite) * $entre->prix ;
							$priceTotal = $priceTotal + $price;
						}
					}

					echo '<p style="float: left;margin-top: 7px;">Le montant total des achats est de <span style="color:red;">' . $priceTotal . '€</span></p>';
					?>
					<a href="#" onclick="window.print()" class="btn btn-primary" style="margin: 0 0 0 20px">Imprimer</a>
					<a href="{{ url('course')}}" class="btn btn-primary" style="margin: 0 20px">Retour</a>
				</div>

				<!--Periode 4-->
				<div class="periode periode4">
					<?php
					$priceTotal = 0;

					foreach($entres as $entre){
						if ($entre->conso4 >= $entre->quantite) {
							$price = ($entre->conso4 - $entre->quantite) * $entre->prix ;
							$priceTotal = $priceTotal + $price;
						}
					}

					echo '<p style="float: left;margin-top: 7px;">Le montant total des achats est de <span style="color:red;">' . $priceTotal . '€</span></p>';
					?>
					<a href="#" onclick="window.print()" class="btn btn-primary" style="margin: 0 0 0 20px">Imprimer</a>
					<a href="{{ url('course')}}" class="btn btn-primary" style="margin: 0 20px">Retour</a>
				</div>

				<!--Periode 5-->
				<div class="periode periode5">
					<?php
					$priceTotal = 0;

					foreach($entres as $entre){
						if ($entre->conso5 >= $entre->quantite) {
							$price = ($entre->conso5 - $entre->quantite) * $entre->prix ;
							$priceTotal = $priceTotal + $price;
						}
					}

					echo '<p style="float: left;margin-top: 7px;">Le montant total des achats est de <span style="color:red;">' . $priceTotal . '€</span></p>';
					?>
					<a href="#" onclick="window.print()" class="btn btn-primary" style="margin: 0 0 0 20px">Imprimer</a>
					<a href="{{ url('course')}}" class="btn btn-primary" style="margin: 0 20px">Retour</a>
				</div>

				<!--Periode 6-->
				<div class="periode periode6">
					<?php
					$priceTotal = 0;

					foreach($entres as $entre){
						if ($entre->conso6 >= $entre->quantite) {
							$price = ($entre->conso6 - $entre->quantite) * $entre->prix ;
							$priceTotal = $priceTotal + $price;
						}
					}

					echo '<p style="float: left;margin-top: 7px;">Le montant total des achats est de <span style="color:red;">' . $priceTotal . '€</span></p>';
					?>
					<a href="#" onclick="window.print()" class="btn btn-primary" style="margin: 0 0 0 20px">Imprimer</a>
					<a href="{{ url('course')}}" class="btn btn-primary" style="margin: 0 20px">Retour</a>
				</div>
			</div>

		</div>
	</section>
    	</div>    
	</main>

	<footer role="contentinfo">
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{ URL::asset('js/custom.js') }} "></script>
</body>
    