<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth', ['except' => []]);
    }
    public function deleteUser($id){
        $result = User::deleteUser($id);
        return response()->json($result, 200);
    }
    public function createUser(Request $request){
        $result = User::createUser($request->toArray());
        return response()->json($result, 200);
    }
    public function update($id, Request $request){
        $result = user::updateUser($id, $request->toArray());
        return response()->json($result, 200);
    }
    public function getUsers(){
     return response()->json(['users'=>User::get()->toArray()], 200);
    }
    public function getCreateInput(){
        return view('user.create-input', []);
    }

    public function postCreateConfirm(Requests\UserRequest $request)
    {
        $user = $request->all(); 
        return view('user.create-confirm', ['user' => $user]);
    }

    public function postCreateComplete(Requests\UserRequest $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'role' => 0,
            'address' => $request['address'],
            'tel' => $request['tel'],
            'agency_authority' => 0,
        ]); 

        return view('user.create-complete', []);
    }
}
