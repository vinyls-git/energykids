@extends('layouts.mainLayout')

    @section('content')	
    <section id="stock">	
    	<div class="container">

    		<!--box 1 - Stock -->
    		<div class="box">
    			<div class="stockHead row">
    				<h2>Stock</h2>	
    				<div>
    					@foreach($dates as $date)
    					<p>Date de pointage du stock : </p>
    					<form action="{{ url('stock/' . $date->id) }}" method="POST" role="form"> 
				    		{{ csrf_field() }}
				    		{{ method_field('PUT') }}
								
				    			<input class="input" placeholder="{{$date->date}}" type="text" name="date">
				    			<span class="input-group-btn">
				    				<button type="submit" class="btn btn-default">
				    					<i class="fa fa-check"></i>
				    				</button>
				    			</span>
						</form>
						@endforeach
    				</div>
    			</div>
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
	        	<div id="menu-accordeon">
					<ul>
						
						@foreach($categories as $categorie)
						<li>
						    <h3>{{$categorie->option}} <img class="fleche_bas" src="img/fleche_bas.png" alt=""></h3>
							<div class="slideUp">
						       <div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
											    <th>Etagère</th>
											    <th>Produits</th>
											    <th>Description</th>
										        <th>Quantités</th>
									            <th>Consomation par semaine</th>
									            <th>Entrer/sortie</th>
										    </tr>
										</thead>
										<tbody>
										<!--Classement par catégorie-->
										@foreach($entres as $entre)


											@if ($entre->categorie == $categorie->option)
												<tr>
													<td>
														<p>{{$entre->code}}</p>
													</td>
													<td>
														<p>{{$entre->designation}}</p>
													</td>
													<td>
														<p>{{$entre->description}}</p>
													</td>
													<td >
														<div style="display: flex; align-items: center;justify-content: center;">

							
														@if($entre->quantite == $entre->conso1)
															<p class="periode periode1 active qte" style="color: #21e827">{{$entre->quantite}}</p>
														@elseif($entre->quantite < 0)
															<p class="periode periode1 active qte" style="color: red" >{{$entre->quantite}}</p>
														@else
															<p class="periode periode1 active qte">{{$entre->quantite}}</p>
														@endif
														@if($entre->quantite == $entre->conso2)
															<p class="periode periode2" style="color: #21e827">{{$entre->quantite}}</p>
														@elseif($entre->quantite < 0)
															<p class="periode periode2" style="color: red" >{{$entre->quantite}}</p>
														@else
															<p class="periode periode2">{{$entre->quantite}}</p>
														@endif
														@if($entre->quantite == $entre->conso3)
															<p class="periode periode3" style="color: #21e827">{{$entre->quantite}}</p>
														@elseif($entre->quantite < 0)
															<p class="periode periode3" style="color: red" >{{$entre->quantite}}</p>
														@else
															<p class="periode periode3">{{$entre->quantite}}</p>
														@endif
														@if($entre->quantite == $entre->conso4)
															<p class="periode periode4" style="color: #21e827">{{$entre->quantite}}</p>
														@elseif($entre->quantite < 0)
															<p class="periode periode4" style="color: red" >{{$entre->quantite}}</p>
														@else
															<p class="periode periode4">{{$entre->quantite}}</p>
														@endif
														@if($entre->quantite == $entre->conso5)
															<p class="periode periode5" style="color: #21e827">{{$entre->quantite}}</p>
														@elseif($entre->quantite < 0)
															<p class="periode periode5" style="color: red" >{{$entre->quantite}}</p>
														@else
															<p class="periode periode5">{{$entre->quantite}}</p>
														@endif
														@if($entre->quantite == $entre->conso6)
															<p class="periode periode6" style="color: #21e827">{{$entre->quantite}}</p>
														@elseif($entre->quantite < 0)
															<p class="periode periode6" style="color: red" >{{$entre->quantite}}</p>
														@else
															<p class="periode periode6">{{$entre->quantite}}</p>
														@endif

													</div>

													</td>
													<td class="periode active periode1">
														<p>{{$entre->conso1}}</p>
													</td>
													<td class="periode periode2">
														<p>{{$entre->conso2}}</p>
													</td>
													<td class="periode periode3">
														<p>{{$entre->conso3}}</p>
													</td>
													<td class="periode periode4">
														<p>{{$entre->conso4}}</p>
													</td>
													<td class="periode periode5">
														<p>{{$entre->conso5}}</p>
													</td>
													<td class="periode periode6">
														<p>{{$entre->conso6}}</p>
													</td>
													<td>
													
													   	<!--<input class="quantiteMoin"  placeholder="Quantités" name="quantite">	-->
										    			<div>
										    				<button class="btn btn-primary displayBtn">
										    					<i class="fa fa-external-link"></i>
										    				</button>
										    			</div>
										    		
									    				<div style="background: #ddd;" class="popupTableau">
									    					<div class="">
									    						<div class="row" style="justify-content: center;margin-bottom: 20px;">
									    							<form  class="formulaire"  action="{{ url('entres/' . $entre->id) }}" method="POST" role="form"> 
															    		{{ csrf_field() }}
															    		{{ method_field('PUT') }}
													    				<input type="hidden" name="quantite" value="1">
													    				<button style="margin-left: 10px;" type="submit" class="">
														    				1
														    			</button>	
															    	</form>
															    	<form  class="formulaire"  action="{{ url('entres/' . $entre->id) }}" method="POST" role="form"> 
															    		{{ csrf_field() }}
															    		{{ method_field('PUT') }}
															    		<input type="hidden" name="quantite" value="2">
														    			<button style="margin-left: 10px;" type="submit" class="">
															    			2
															    		</button>
															    	</form>
															    	<form  class="formulaire"  action="{{ url('entres/' . $entre->id) }}" method="POST" role="form"> 
															    		{{ csrf_field() }}
															    		{{ method_field('PUT') }}
															    		<input type="hidden" name="quantite" value="3">
														    			<button style="margin-left: 10px;" type="submit" class="">
															    			3
															    		</button>
															    	</form>
															    	<form  class="formulaire"  action="{{ url('entres/' . $entre->id) }}" method="POST" role="form"> 
															    		{{ csrf_field() }}
															    		{{ method_field('PUT') }}
															    		<input type="hidden" name="quantite" value="4">
														    			<button style="margin-left: 10px;" type="submit" class="">
															    			4
															    		</button>
															    	</form>
															    	<form  class="formulaire"  action="{{ url('entres/' . $entre->id) }}" method="POST" role="form"> 
															    		{{ csrf_field() }}
															    		{{ method_field('PUT') }}
															    		<input type="hidden" name="quantite" value="5">
														    			<button style="margin-left: 10px;" type="submit" class="">
															    			5
															    		</button>
															    	</form>
									    						</div>
										    					<div class="row" style="justify-content: center;margin-bottom: 20px">
										    						<form  class="formulaire"  action="{{ url('entres/' . $entre->id) }}" method="POST" role="form"> 
															    		{{ csrf_field() }}
															    		{{ method_field('PUT') }}
													    				<input type="hidden" name="quantite" value="-1">
													    				<button style="margin-left: 10px;" type="submit" class="">
														    				-1
														    			</button>	
														    		</form>
														    		<form  class="formulaire"  action="{{ url('entres/' . $entre->id) }}" method="POST" role="form"> 
															    		{{ csrf_field() }}
															    		{{ method_field('PUT') }}
														    			<input type="hidden" name="quantite" value="-2">
													    				<button style="margin-left: 10px;" type="submit" class="">
														    				-2
														    			</button>
														    		</form>
														    		<form  class="formulaire"  action="{{ url('entres/' . $entre->id) }}" method="POST" role="form"> 
															    		{{ csrf_field() }}
															    		{{ method_field('PUT') }}
														    			<input type="hidden" name="quantite" value="-3">
													    				<button style="margin-left: 10px;" type="submit" class="">
														    				-3
														    			</button>
															    	</form>
															    	<form  class="formulaire"  action="{{ url('entres/' . $entre->id) }}" method="POST" role="form"> 
															    		{{ csrf_field() }}
															    		{{ method_field('PUT') }}
															    		<input type="hidden" name="quantite" value="-4">
														    			<button style="margin-left: 10px;" type="submit" class="">
															    			-4
															    		</button>
															    	</form>
															    	<form  class="formulaire"  action="{{ url('entres/' . $entre->id) }}" method="POST" role="form"> 
															    		{{ csrf_field() }}
															    		{{ method_field('PUT') }}
															    		<input type="hidden" name="quantite" value="-5">
														    			<button style="margin-left: 10px;" type="submit" class="">
															    			-5
															    		</button>
															    	</form>
										    					</div>
												    		</div>
												    		<form  class="formulaire"  action="{{ url('entres/' . $entre->id) }}" method="POST" role="form"> 
												    		{{ csrf_field() }}
												    		{{ method_field('PUT') }}
												    			<input type="text" name="quantite" placeholder="Entrer une quantite">
											    				<button style="margin-left: 10px;" type="submit" class="btn-xs btn-success">
												    				<i class="fa fa-check"></i>
												    			</button>
												    		</form>
									    				</div>
													</td>
												</tr>
											@endif
										@endforeach
									
										</tbody>
									</table>
								</div>
							</div> 
					    </li>
					     <div class="barreAdmin"></div>
					     @endforeach
					  
					</ul>
				</div>
			</div>
			
		</div>
	</section>
    @stop