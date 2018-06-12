<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entres extends Model
{
   
    /*autorisation des enregistrements*/
    protected $fillable = [
        'code', 'designation', 'categorie', 'quantite','description', 'conso1', 'conso2', 'conso3', 'conso4', 'conso5','conso6', 'prix', 'date'
    ];

}
