<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;

class CategoryController extends Controller
{
    private $category = NULL;
    public function __construct(){
        $this->category = new Category();
    }
    protected function get(){
        return response()->json($this->category->getAllCategories());
    }
    protected function create(Request $request){
        return response()->json(['new_category'=>$this->category->newCategory($request->input('category_name'))]);
    }
    protected function update($id, Request $request){
        return response()->json(['updated_category'=>$this->category->updateCategory(['category_id'=>$id, 'category_name'=>$request->input('category_name')])]);
    }
    protected function delete($id){  
        return response()->json(['delete_category'=>$this->category->deleteCategory($id)]);
    }
}
