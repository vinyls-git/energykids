<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entres;

class CourseController extends Controller
{
   public function showCourse()
	{	
		/*Afficher - Course*/
        $entres = Entres::orderBy('designation')->get();

        return view('course', compact('entres','total'));
	}
	public function printCourse()
	{	
		/*Afficher - Course*/
        $entres = Entres::orderBy('designation')->get();

        return view('printCourse', compact('entres','total'));
	}
}
