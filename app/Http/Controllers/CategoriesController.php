<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Entres;

class CategoriesController extends Controller
{

    /*Afficher - Categories*/
    public function showCategories()
    {   
        $entres = Entres::get();
        $categories = Categories::get();
        return view('categories', compact('categories','entres'));
    }
    
    /*Enregistrer - Categories*/
    public function storeCategories(Request $request)
    {
        $this->validate($request, ['option' => 'required|string|max:30']);

        $categories = Categories::create([
            'option' => request('option'), 
        ]);


       return redirect('gestion');
    }

    /*Modifier - Categories*/
    public function editCategories($id)
    {
        $categories = Categories::findOrFail($id);

        return view('editCategories', compact('categories'));
    }

    /*Enregistrer les modifications - Categories*/
    public function updateCategories(Request $request, $id)
    {
        $this->validate($request, ['option' => 'required|string|max:30']);

        $categories = Categories::findOrFail($id);

        $categories->option = $request->option;
       
        $categories->save();

        return redirect('gestion');
    }

    /*Détruire - Categories*/
    public function destroyCategories(Categories $categories)
    {
         Categories::destroy($categories->id);

        return redirect('gestion');
    }
}