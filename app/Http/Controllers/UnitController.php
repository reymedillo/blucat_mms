<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Unit;
use Validator;

class UnitController extends Controller {
    private $unit = NULL;
    private $rules = array('unit_name'=>['required', 'regex:/^\S*$/']);

    public function __construct() {
        $this->unit = new Unit();
    }
    protected function get(){
        $result = [
            'units'=>$this->unit->getAllUnits(),
            'status_code'=>200,
        ];
        return response()->json($result, $result['status_code']);
    }
    protected function create(Request $request){
        $validator = Validator::make($request->toArray(), $this->rules);
        if($validator->fails()){
            $result = [
                'status_code'=>400,
                'error'=>['messages'=>$validator->messages()]
            ];
        }else{
            $new_unit = $this->unit->createUnit(['unit_name'=>$request->input('unit_name')]);
            $result = [
                'status_code'=>200,
                'success'=>array('messages'=>[trans('messages.units.create')]),
                'unit'=>$new_unit
            ];
        }
        return response()->json($result, $result['status_code']);
    }
    protected function update(Request $request){
        $validator = Validator::make($request->toArray(), $this->rules);
        if($validator->fails()){
            $result = [
                'status_code'=>400,
                'error'=>['messages'=>$validator->messages()]
            ];
        }else{
            $updated_unit = $this->unit->updateUnit(['unit_id'=>$request->input('unit_id'), 'unit_name'=>$request->input('unit_name')]);
            $result = [
                'status_code'=>200,
                'success'=>array('messages'=>[trans('messages.units.update')]),
                'unit'=>$updated_unit
            ];
        }
        return response()->json($result, $result['status_code']);
    }
    protected function delete($id){
        $success = $this->unit->deleteUnit($id);
    }
}

