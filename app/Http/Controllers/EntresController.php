<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Entres;
use App\Categories;

class EntresController extends Controller
{

    /*Afficher - Entres*/
    public function showEntres()
    {
        $entres = Entres::orderBy('updated_at', 'desc')->paginate(5);
        $categories = Categories::get();
        return view('entres', compact('categories','entres'));
       
    }
    /*Enregistrer les modifications - Entres*/
    public function updateEntres(Request $request, $id)
    {
        $this->validate($request, ['quantite' => 'required|string|max:30']);

        $entres = Entres::findOrFail($id);

        $entres->quantite = $request->quantite + $entres->quantite;
       
        $entres->save();

        return redirect('stock');
    }
}