<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	
    /*autorisation des enregistrements*/
    protected $fillable = [
        'option'
    ];
}