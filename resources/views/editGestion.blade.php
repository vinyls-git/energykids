@extends('layouts.mainLayout')

@section('content')
<div class="container">
   
    <div class="box">
    <h2>Modifier un produit</h2>
        <form class="addProduit" action="{{ url('gestion/' . $entres->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <h3 style="font-size: 1rem; margin: 30px 0;">Désignation :</h3>
            <div class="row form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                <div class="col-md-3">
                    <label for="code">Etagère :</label>
                    <input class="form-control" value="{{$entres->code}}" type="text" id="code" name="code">
                    <small class="text-danger">{{ $errors->first('code') }}</small>
                </div>
                <div class="col-md-3">
                    <label for="designation">Produit :</label>
                    <input class="form-control" value="{{$entres->designation}}" type="text" id="designation" name="designation">
                    <small class="text-danger">{{ $errors->first('designation') }}</small>
                </div>
                <div class="col-md-3">
                    <label for="description">Description :</label>
                    <input class="form-control" value="{{$entres->description}}" type="text" id="description" name="description">
                    <small class="text-danger">{{ $errors->first('description') }}</small>
                </div>
                <div class="col-md-3">
                    <label for="prix">Prix Unit :</label>
                    <input class="form-control" value="{{$entres->prix}}" type="text" id="prix" name="prix">
                    <small class="text-danger">{{ $errors->first('prix') }}</small>
                </div>
            </div>
            <h3 style="font-size: 1rem;margin: 30px 0;">Consomation/s par période :</h3>
            <div class="row">
                <div class="col-md-4">
                    <label for="conso1">Eds:</label>
                    <input class="form-control" value="{{$entres->conso1}}" type="text" id="conso1" name="conso1">
                    <small class="text-danger">{{ $errors->first('conso1') }}</small>
                </div>
                <div class="col-md-4">
                    <label for="conso2">Toussaint:</label>
                    <input class="form-control" value="{{$entres->conso2}}" type="text" id="conso2" name="conso2">
                    <small class="text-danger">{{ $errors->first('conso2') }}</small>
                </div>
                <div class="col-md-4">
                    <label for="conso3">Noel:</label>
                    <input class="form-control" value="{{$entres->conso3}}" type="text" id="conso3" name="conso3">
                    <small class="text-danger">{{ $errors->first('conso3') }}</small>
                </div>
                <div class="col-md-4">
                    <label for="conso4">Hiver:</label>
                    <input class="form-control" value="{{$entres->conso4}}" type="text" id="conso4" name="conso4">
                    <small class="text-danger">{{ $errors->first('conso4') }}</small>
                </div>
                <div class="col-md-4">
                    <label for="conso5">Printemps:</label>
                    <input class="form-control" value="{{$entres->conso5}}" type="text" id="conso5" name="conso5">
                    <small class="text-danger">{{ $errors->first('conso5') }}</small>
                </div>
                <div class="col-md-4">
                    <label for="conso5">Eté :</label>
                    <input class="form-control" value="{{$entres->conso6}}" type="text" id="conso6" name="conso6">
                    <small class="text-danger">{{ $errors->first('conso6') }}</small>
                </div>
            </div>
            
            <div class="col-md-12" style="text-align: center;" >
                <a href="#"><button style="margin-top: 20px;" class="btn btn-primary">Envoyer</button></a>
            </div>
        </form>
    </div>
</div>
@stop