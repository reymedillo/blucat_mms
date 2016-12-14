<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category_mst";
    protected $primaryKey = 'category_id';

    public function newCategory($cat_name){
        $cat = new self();
        $cat->category_name = $cat_name;
        $cat->save();
        return $cat->toArray();
    }
    public function updateCategory($params){
        $cat = self::find($params['category_id']);
        $cat->category_name = $params['category_name'];
        $result = $cat->save();
        return $result;
    }
    public function deleteCategory($id){
        $cat = self::find($id);
        $result = $cat->delete();
        return $result;
    }
    public static function getAllCategories(){
        $categories = self::with('menus', 'menusCount')->orderBy('category_id', 'desc')->get()->toArray();
        return $categories;
    }
    public function menus(){
        return $this->hasMany('App\Menu');
    }
    public function menusCount(){
        return $this->menus()
            ->selectRaw('category_id, count(*) as aggregate')
            ->groupBy('category_id');
    }
}
