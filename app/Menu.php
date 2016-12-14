<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MenuIngredient;
class Menu extends Model
{
    protected $table = 'menu_mst';
    protected $primaryKey = 'menu_id';

    public static function getMenu($id){
        $menu = self::with(['category'])->find($id);
        $menu->menu_ingredients = MenuIngredient::with(['ingredient', 'ingredient.unit'])->where('menu_id', '=', $id)->get();
        $menu = $menu->toArray();
        $menu['ingredients'] = [];
        $total_cost = 0;
        foreach($menu['menu_ingredients'] as $mIng){
            $cost = $mIng['amount'] * $mIng['ingredient']['ingredient_price'];
            $mIng['ingredient']['amount'] = $mIng['amount'];
            $menu['ingredients'][] = $mIng['ingredient'];
            $total_cost += $cost;
        }
        $menu['cost'] = round($total_cost, 1);
        $menu['cost_rate'] = round($menu['cost'] / $menu['menu_price'] * 100, 1) . '%';
        return $menu;
    }
    public function getMenuIngredients($id){
        $menu = self::getMenu($id);
        return $menu['menu']['menu_ingredients'];
    }
    public function getAllMenus(){
        $menus = self::with(['category', 'menuIngredients', 'menuIngredients.ingredient.unit'])->orderBy('menu_id', 'desc')->get()->toArray();
        $fMenus = [];
        foreach($menus as $menu){
            $menu['ingredients'] = [];
            $total_cost = 0;
            foreach($menu['menu_ingredients'] as $mIng){
                $cost = $mIng['amount'] * $mIng['ingredient']['ingredient_price'];
                $mIng['ingredient']['amount'] = $mIng['amount'];
                $menu['ingredients'][] = $mIng['ingredient'];
                $total_cost += $cost;
            }
            $menu['cost'] = round($total_cost, 1);
            $menu['cost'] <= 0 ?  $menu['cost_rate'] = 0 : $menu['cost_rate'] = round($menu['cost'] / $menu['menu_price'] * 100, 1) . '%';
            $fMenus[] = $menu;
        }
        return ['menus'=>$fMenus];
    }
    public function deleteMenu($id){
        try{
            $menu = self::find($id);
            $menu->delete();
            return true;
        }catch(\Exception $e){
            return false;
        }
    }
    public function createMenu($nMenu){
        try{
            $menu = new self();
            $menu->menu_name = $nMenu['menu_name'];
            $menu->menu_price = round((double) $nMenu['menu_price']);
            $menu->category_id = (int) $nMenu['category']['category_id'];
            $menu->save();
            if(isset($nMenu['ingredients'])) {
                foreach($nMenu['ingredients'] as $ing){
                    $mIng = new MenuIngredient();
                    $mIng->menu_id = $menu->menu_id;
                    $mIng->ingredient_id = $ing['ingredient_id'];
                    $mIng->amount = $ing['ingredient_price'];
                    $mIng->save();
                }
            }
            return $this->getMenu($menu->menu_id);
        }catch(\Exception $e){}
    }
    public function updateMenu($id, $menu){
        try{
            $umenu = Menu::find($id);
            $umenu->menu_name = $menu['menu_name'];
            $umenu->menu_price = round((double) $menu['menu_price']);
            $umenu->category_id = (int) $menu['category']['category_id'];
            $umenu->save();
            foreach($menu['ingredients'] as $ing){
                $ingredientId = $ing['ingredient_id'];
                $existMIng =  MenuIngredient::where('menu_id', '=', $umenu->menu_id)->where('ingredient_id', '=', $ingredientId)->first();
                if(!empty($existMIng)){
                    $existMIng->amount = $ing['amount'];
                    $existMIng->save();
                    $flagM = $existMIng;
                }else{
                    $newMenuIng = new MenuIngredient();
                    $newMenuIng->ingredient_id = $ing['ingredient_id'];
                    $newMenuIng->amount = $ing['amount'];
                    $newMenuIng->menu_id = $umenu->menu_id;
                    $newMenuIng->save();
                    $flagM = $existMIng;
                }
                if(isset($ing['to_delete'])){
                    $toDelete = MenuIngredient::find($flagM->id);
                    $toDelete->delete();
                }
            }
            return $this->getMenu($id);
        }catch(\Exception $e){

        }
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function menuIngredients(){
        return $this->hasMany('App\MenuIngredient');
    }

}


