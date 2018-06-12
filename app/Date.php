<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
   
    /*autorisation des enregistrements*/
    protected $fillable = [
        'date'
    ];
}
