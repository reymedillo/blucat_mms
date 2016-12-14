<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Menu;
use Validator;

class MenuController extends Controller {
    private $menu = NULL;
    private $rules = array(
        'menu_name'=>['required', 'regex:/^\S*$/'],
        'menu_price'=>['required', 'regex:/^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/'],
        'category'=>['required']
    );
    
    public function __construct(){
        $this->menu = new Menu();
    }
    protected function get($id=NULL){
        if(is_null($id)){
            return response()->json($this->menu->getAllMenus());
        } else {
            return response()->json($this->menu->getMenu($id));
        }
    }
    protected function delete($id){
        $result = $this->menu->deleteMenu($id);
        return response()->json($result, 200);
    }
    protected function create(Request $request){
        $validator = Validator::make($request->toArray(), $this->rules);
        if($validator->fails()){
            $result = [
                'status_code'=>400,
                'messages'=>$validator->messages()
            ];
        }else{
            $new_menu = $this->menu->createMenu($request->toArray());
            $result = [
                'status_code'=>200,
                'messages'=>[trans('messages.menus.create')],
                'menu'=>$new_menu
            ];
        }
        return response()->json($result, $result['status_code']);
    }
    protected function update($id, Request $request){
//        $result = $this->menu->updateMenu($id, $request->toArray());
//        return response()->json($result, 200);
//        
        $validator = Validator::make($request->toArray(), $this->rules);
        if($validator->fails()){
            $result = [
                'status_code'=>400,
                'messages'=>$validator->messages()
            ];
        }else{
            $updated_menu = $this->menu->updateMenu($id, $request->toArray());
            $result = [
                'status_code'=>200,
                'messages'=>[trans('messages.menus.update')],
                'menu'=>$updated_menu
            ];
        }
        return response()->json($result, $result['status_code']);
    }
}
