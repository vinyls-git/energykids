<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Entres;
use App\Categories;

class GestionController extends Controller
{

    /*Afficher - Gestion*/
   public function showGestion()
	{	
        $entres = Entres::orderBy('updated_at', 'desc')->paginate(5);
        $categories = Categories::get();
        return view('gestion', compact('entres','categories'));
	}
	 /*Enregistrer - Gestion*/
    public function storeGestion(Request $request)
    {
        $this->validate($request, ['code' => 'required|string|max:20']);
        $this->validate($request, ['designation' => 'required|string|max:170']);
        $this->validate($request, ['categorie' => 'required|string|max:20']);
        $this->validate($request, ['quantite' => 'required|string|max:170']);
        $this->validate($request, ['description' => 'required|string|max:100']);
        $this->validate($request, ['conso1' => 'required|string|max:20']);
        $this->validate($request, ['conso2' => 'required|string|max:20']);
        $this->validate($request, ['conso3' => 'required|string|max:20']);
        $this->validate($request, ['conso4' => 'required|string|max:20']);
        $this->validate($request, ['conso5' => 'required|string|max:20']);
        $this->validate($request, ['conso6' => 'required|string|max:20']);
        $this->validate($request, ['prix' => 'required|string|max:20']);


        $entres = Entres::create([
            'code' => request('code'),
            'designation' => request('designation'),
            'categorie' => request('categorie'),
            'quantite' => request('quantite'),
            'description' => request('description'),
            'conso1' => request('conso1'),
            'conso2' => request('conso2'),
            'conso3' => request('conso3'),
            'conso4' => request('conso4'),
            'conso5' => request('conso5'),
            'conso6' => request('conso6'),
            'prix' => request('prix'),
        ]);

       return redirect('gestion');
    }
     /*Modifier - Gestion*/
    public function editGestion($id)
    {
        $entres = Entres::findOrFail($id);

        return view('editGestion', compact('entres'));
    }

    /*Enregistrer les modifications - Gestion*/
    public function updateGestion(Request $request, $id)
    {
        $this->validate($request, ['code' => 'required|string|max:20']);
        $this->validate($request, ['designation' => 'required|string|max:170']);
        $this->validate($request, ['description' => 'required|string|max:100']);
        $this->validate($request, ['conso1' => 'required|string|max:20']);
        $this->validate($request, ['conso2' => 'required|string|max:20']);
        $this->validate($request, ['conso3' => 'required|string|max:20']);
        $this->validate($request, ['conso4' => 'required|string|max:20']);
        $this->validate($request, ['conso5' => 'required|string|max:20']);
        $this->validate($request, ['conso6' => 'required|string|max:20']);
        $this->validate($request, ['prix' => 'required|string|max:20']);

        $entres = Entres::findOrFail($id);

        $entres->code = $request->code;
        $entres->designation = $request->designation;
        $entres->description = $request->description;
        $entres->conso1 = $request->conso1;
        $entres->conso2 = $request->conso2;
        $entres->conso3 = $request->conso3;
        $entres->conso4 = $request->conso4;
        $entres->conso5 = $request->conso5;
        $entres->conso6 = $request->conso6;
        $entres->prix = $request->prix;

        $entres->save();
       
        return redirect('gestion');
    }

    /*Détruire - Gestion*/
    public function destroyGestion(entres $entres)
    {
         Entres::destroy($entres->id);

        return redirect('gestion');
    }

    /*Rechercher - Gestion*/
    public function searchGestion()
    {
        $categories = Categories::get();
        $q = Input::get('q');
        $entres = Entres::where('code', 'LIKE', '%'.$q.'%' )
                ->orWhere('designation', 'LIKE', '%'.$q.'%' )
                ->orWhere('categorie', 'LIKE', '%'.$q.'%' )
                ->paginate(5);
        $entres->appends(array(
            $q = Input::get('q'),
        ));
        return view('gestion', compact('entres','categories'));
    }
}


