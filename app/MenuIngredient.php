<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuIngredient extends Model
{
    protected $table = "menu_ingredient_tbl";
    
    public function ingredient(){
        return $this->belongsTo('App\Ingredient');
    }
}
