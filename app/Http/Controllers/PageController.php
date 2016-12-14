<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Unit;
use App\Ingredient;
use App\Category;
class PageController extends Controller
{
    protected function index(){
        $categories = Category::getAllCategories();
        $ingredients = Ingredient::with(['unit'])->get()->toArray();
        $units = Unit::all()->toArray();
        return response()->json([
            'categories'=>$categories,
            'ingredients'=>$ingredients,
            'units'=>$units,
            'currency'=>"₱"
        ], 200);
    }
}
