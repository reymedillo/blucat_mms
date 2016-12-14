<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredient_mst';
    protected $primaryKey = 'ingredient_id';
    public function unit(){
        return $this->belongsTo('App\Unit');
    }
    public function createIngredient($ing){
        $newIng = new self();
        $newIng->ingredient_name = $ing['ingredient_name'];
        $newIng->ingredient_price = $ing['ingredient_price'];
        $newIng->unit_id = $ing['unit_id'];
        $newIng->save();
        return ['new_ingredient'=>$newIng->with(['unit'])->find($newIng->ingredient_id)];
    }
    public function updateIngredient($ing){
        try{
            $fIng = self::find((int) $ing['ingredient_id']);
            $fIng->ingredient_name = $ing['ingredient_name'];
            $fIng->ingredient_price =  (double) $ing['ingredient_price'];
            $fIng->unit_id = (int) $ing['unit']['unit_id'];
            $fIng->save();
            return ['ingredient'=>$fIng->toArray()];
        }catch(\Exception $e){
            return false;
        }
    }
    public function deleteIngredient($id){
        try{
            $ing = self::find($id);
            $ing->delete();
            return true;
        }catch(\Exception $e){
            return false;
        }
    }
}
