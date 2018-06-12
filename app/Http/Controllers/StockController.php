<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entres;
use App\Categories;
use App\Date;


class StockController extends Controller
{
	/*Afficher - Stock*/
    public function showStock()
    {
		$entres = Entres::get();
        $categories = Categories::get();
        $dates = Date::all();

		 return view('stock', compact ('entres','categories','dates'));
    }

    public function storeDate(Request $request)
    {
        $this->validate($request, ['date' => 'required|string|max:20']);

        $dates = Date::create([
            'date' => request('date'),
        ]);

       return redirect('stock');
    }

    public function updateDate(Request $request, $id)
    {
        $this->validate($request, ['date' => 'required|string|max:30']);

        $dates = Date::findOrFail($id);

        $dates->date = $request->date;
       
        $dates->save();

        return redirect('stock');
    }

   
}