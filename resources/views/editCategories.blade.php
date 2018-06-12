@extends('layouts.mainLayout')

@section('content')
<div class="container">
    <div class="box">
        <h2>Modifier une categorie</h2>
        <form style="margin-top: 50px;" action="{{ url('categories/' . $categories->id) }}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
         
            <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                <input name="option"  value='{{ $categories->option }}' id="categories" class="form-control" maxlength="20">
                <small class="text-danger">{{ $errors->first('categories') }}</small>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>
@stop