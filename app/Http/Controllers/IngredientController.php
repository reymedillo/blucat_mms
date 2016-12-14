<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ingredient;
class IngredientController extends Controller
{
    private $ingredient = NULL;
    public function __construct(){
        $this->ingredient = new Ingredient();
    }
    protected function get(){
        return response()->json(['ingredients'=>Ingredient::with(['unit'])->get()->toArray()], 200);
    }
    protected function create(Request $request){
        $result = $this->ingredient->createIngredient([
            'ingredient_name'=>$request->input('ingredient_name'),
            'ingredient_price'=>number_format($request->input('ingredient_price'), 2, '.', ','),
            'unit_id'=>(int) $request->input('unit_id')
        ]);
        return response()->json($result, 200);
    }
    protected function update($id, Request $request){
        $result = $this->ingredient->updateIngredient($request->toArray());
        return response()->json($result, 200);
    }
    protected function delete($id){
        $this->ingredient->deleteIngredient($id);
    }
}
