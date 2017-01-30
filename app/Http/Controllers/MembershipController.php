<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Image;

class MembershipController extends Controller
{
    public function __construct() {
        $this->middleware('auth', []);
    }
    public function index(Request $request) {
        $members = \App\Members::all();
        $mid = $firstname = $lastname = null;

        if( $request->has('mid') || $request->has('firstname') || $request->has('lastname')) {
            $mid = $request->input('mid');
            $firstname = $request->input('firstname');
            $lastname = $request->input('lastname');

            $members = \App\Members::select();
            if($request->has('mid')) {
                $members->where('id', $mid);
            }
            if($request->has('firstname')) {
                $members->where('first_name', 'LIKE' ,"%{$firstname}%");
            }
            if($request->has('lastname')) {
                $members->where('last_name', 'LIKE'  ,"%{$lastname}%");
            }
            $members = $members->get();
        }
        return view('members.index', compact('members','mid','firstname','lastname'));
    }
    public function postCreate(Request $request) {
        $name = null;
        $validator = \App\Members::membersValidator($request);
        if($validator->fails()) {
            return response()->json([
                'message' => 'Validation Error.',
                'errors'  => $validator->errors()
            ], 200);
        }

        $file_name = $this->saveImgFile($request);
        $this->saveRecord($request,'create',$file_name);
    }

    public function viewEdit($member_id) {
        $member = \App\Members::find($member_id);
        if($member->count() > 0) {
            return $member;
        }
        return response()->json([
            'message' => 'Database Error.',
            'errors'  => 'Error'
        ], 200);
    }

    public function postUpdate($member_id, Request $request) {
        $validator = \App\Members::membersValidator($request,'update');
        if($validator->fails()) {
            return response()->json([
                'message' => 'Validation Error.',
                'errors'  => $validator->errors()
            ], 200);
        }
        $file_name = $this->saveImgFile($request);
        $this->saveRecord($request,'update',$file_name,$member_id);
    }

    public function remove($member_id) {
        $member = \App\Members::find($member_id);
        if($member->count() == 0) {
            return response()->json([
                'message' => 'Database Error.',
                'errors'  => 'Error'
            ], 200);
        }
        $member->del_flag = 1;
        $member->deleted_at = \Carbon\Carbon::now();
        if($member->save()) {
            return response()->json([
                'message' => 'Success.'
            ], 200);
        }
    }

    private function saveRecord($request,$type='create',$filename=null,$id=null) {
        if($type != 'update') {
            $member = new \App\Members;
        } else {
            $member = \App\Members::find($id);
        }

        if($type != 'update') {
            $member->id                 = $request->input('id');
        }
        $member->first_name         = $request->input('first_name');
        $member->last_name          = $request->input('last_name');
        $member->contact_number     = $request->input('contact_num');
        $member->mail_address       = $request->input('mail_address');
        $member->ranking            = $request->input('ranking');
        if(!is_null($filename)) {
            $member->pic = $filename;
        }
        if($type != 'update') {
            $member->del_flag           = 0;
            $member->points             = 0;
            $member->wifi_exp_date      = \Carbon\Carbon::now();
        }

        if($member->save()) {
            return response()->json([
                'message' => 'Success.'
            ], 200);
        }
    }

    private function saveImgFile($request) {
        if($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            //resize
            $img  = Image::make($file);
            $img->resize(200,150);
            
            $path = public_path().config('define.member_image_path');
            $extension = $request->file('image_file')->getClientOriginalExtension();
            $name = 'mms-'.time().'.'.$extension;
            $img->save($path.$name);

            $request->merge(array('file' => config('define.member_image_path').$name));

            return $name;
        }
    }

}
