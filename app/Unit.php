<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'unit_mst';
    protected $primaryKey = 'unit_id';
    
    public function deleteUnit($id){
        try{
            $unit = self::find($id);
            $unit->ingredients()->delete();
            $unit->delete();
            return true;
        }catch(\Exception $e){
            return false;
        }
    }
    public function updateUnit($unit){
        try{
            $up_unit = self::find($unit['unit_id']);
            $up_unit->unit_name = $unit['unit_name'];
            $up_unit->save();
            $up_unit->toArray();
        }catch(\Exception $e){
            return false;
        }
    }
    public function createUnit($newUnit){
        try{
            $unit = new self();
            $unit->unit_name = $newUnit['unit_name'];
            $unit->save();
            return $unit->toArray();
        }catch(\Exception $e){
            return false;
        }
    }
    public function ingredients(){
        return $this->hasMany('App\Ingredient');
    }

    public function ingredientsCount(){
        return $this->ingredients()
                ->selectRaw('unit_id, count(*) as aggregate')
                ->groupBy('unit_id');
    }
    public function getAllUnits(){
       return $this->orderBy('unit_id', 'desc')->get();
    }
}
