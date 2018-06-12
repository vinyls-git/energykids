@extends('layouts.mainLayout')

    @section('content')
    	<section id="gestion" class="container">

    		<!--box 1 - Ajouter des produits-->
			
			<div class="box">
				<h2>Ajouter un produit</h2>
				<form class="addProduit" action="{{ url('entres') }}" method="post">
					{{ csrf_field() }}
					 <h3 style="font-size: 1rem; margin: 30px 0 20px 0;">Désignation :</h3>
					<div class="row form-group{{ $errors->has('content') ? ' has-error' : '' }}">
						<div class="col-md-4">
							<input class="form-control" placeholder="Etagère" type="text" id="code" name="code">
							<small class="text-danger">{{ $errors->first('code') }}</small>
						</div>	
						<div class="col-md-4">
							<input class="form-control" placeholder="Produit" type="text" id="designation" name="designation">
							<small class="text-danger">{{ $errors->first('designation') }}</small>
						</div>
						<div class="col-md-4">
							<select class="custom-select" name="categorie" id="categorie">
							@foreach($categories as $categorie)
								<option value="{{ $categorie->option }}">{{ $categorie->option }}</option>
							@endforeach
							</select>
							<small class="text-danger">{{ $errors->first('categorie') }}</small>
						</div>
						<div class="col-md-4">
							<input class="form-control" placeholder="Quantité" type="text" id="quantite" name="quantite">
							<small class="text-danger">{{ $errors->first('quantite') }}</small>
						</div>
						<div class="col-md-4">
							<input class="form-control" placeholder="description" type="text" id="description" name="description">
							<small class="text-danger">{{ $errors->first('description') }}</small>
						</div>
						<div class="col-md-4">
							<input  class="form-control" placeholder="Prix Unitaire" type="text" id="prix" name="prix">
							<small class="text-danger">{{ $errors->first('prix') }}</small>
						</div>
					</div>
					 <h3 style="font-size: 1rem;margin: 30px 0 20px 0;">Consomation/s par période :</h3>
					<div class="row form-group{{ $errors->has('content') ? ' has-error' : '' }}">
						<div class="col-md-4">
							<input class="form-control" placeholder="Eds" type="text" id="conso1" name="conso1">
							<small class="text-danger">{{ $errors->first('conso1') }}</small>
						</div>
						<div class="col-md-4">
							<input class="form-control" placeholder="Toussaint" type="text" id="conso2" name="conso2">
							<small class="text-danger">{{ $errors->first('conso2') }}</small>
						</div>
						<div class="col-md-4">
							<input class="form-control" placeholder="Noel" type="text" id="conso3" name="conso3">
							<small class="text-danger">{{ $errors->first('conso3') }}</small>
						</div>
						<div class="col-md-4">
							<input class="form-control" placeholder="Hiver" type="text" id="conso4" name="conso4">
							<small class="text-danger">{{ $errors->first('conso4') }}</small>
						</div>
						<div class="col-md-4">
							<input  class="form-control" placeholder="Printemps" type="text" id="conso5" name="conso5">
							<small class="text-danger">{{ $errors->first('conso5') }}</small>
						</div>
						<div class="col-md-4">
							<input  class="form-control" placeholder="Eté" type="text" id="conso6" name="conso6">
							<small class="text-danger">{{ $errors->first('conso6') }}</small>
						</div>
					</div>
					<div class="col-md-12" style="text-align: center;" >
					    <a href="#"><button class="btn btn-primary">Ajouter</button></a>
					</div>
				</form>
			</div>
			
			<!--box 2 - Gestion des produits-->
			<div class="box">
	    		<div class="head">
	    			<h2>Gestion des produits</h2>
	    			<form  action="{{ url('/searchAdd') }}" method="POST" role="search"> 
			    	{{ csrf_field() }}
			    		<div class="input-group">
			    			<input class="form-control" placeholder="Rechercher des produits" type="text" name="q">
			    			<span class="input-group-btn">
			    				<button style="margin-left: 10px;" type="submit" class="btn btn-default">
			    					<i class="fa fa-search"></i>
			    				</button>
			    			</span>
			    		</div>
					</form>
	    		</div>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
							    <th>Etagère</th>
							    <th>Produits</th>
					            <th>Modifier</th>
					            <th>Supprimer</th>
						    </tr>
						</thead>
						<tbody>
						
						@foreach($entres as $entre)
							<tr>
								<td>
									<p>{{$entre->code}}</p>
								</td>
								<td>
									<p>{{$entre->designation}}</p>
								</td>
								 <td>
				                        <a href="{{ url('gestion/' . $entre->id . '/editGestion') }}" class="btn btn-info">Modifier</a>
					                </td>
					                <td>
				   	                    <form action="{{ url('gestion/' . $entre->id) }}" method="POST" role="form">
						                    {{ csrf_field() }}
					                        {{ method_field('DELETE') }}
					                        <button type="submit" class="btn btn-danger">supprimer</button>
				                    	</form>
				                    </td> 	
							</tr>
						@endforeach
				
						</tbody>
					</table>
				</div> 
				<!--Pagination-->
				{{ $entres->links() }}
			</div>
			<!--box 3 - Gestion des catégories de produit-->
        		<div class="box">
		        	<h2>Gestion des catégories de produit</h2>
					<form class="row" style="align-items: center;justify-content: center;margin-bottom: 50px ;" action="{{ url('categories') }}" method="post">
						{{ csrf_field() }}
						<div style="margin-bottom: 0;" class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
							<label for="option"> Ajouter une catégorie :</label>
							<input  placeholder="Categories" type="text" id="categories" name="option">	
							<small class="text-danger">{{ $errors->first('categories') }}</small>
						</div>
						<div style="margin-left: 10px;">
						    <a href="#"><button class="btn btn-primary">Ajouter</button></a>
						</div>
					</form>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
								    <th>Catégorie</th>
								    <th>Ajouté le</th>
								    <th>Modifier</th>
							        <th>Supprimer</th>
							   </tr>
							</thead>
							<tbody>
							    @foreach($categories as $categories)
								<tr>
									<td>
						               <p>{{ $categories->option }}</p>
							       </td>
							       <td>
							           <p>{{ $categories->created_at }}</p>
							       </td>
							       <td>
				                        <a href="{{ url('categories/' . $categories->id . '/editCategories') }}" class="btn btn-info">Modifier</a>
					                </td>
					                <td>
				   	                    <form action="{{ url('categories/' . $categories->id) }}" method="POST" role="form">
						                    {{ csrf_field() }}
					                        {{ method_field('DELETE') }}
					                        <button type="submit" class="btn btn-danger">supprimer</button>
				                    	</form>
				                    </td> 		
								</tr>	
								@endforeach
							</tbody>
						</table>
					</div>
				</div>

    	</section>
    @stop