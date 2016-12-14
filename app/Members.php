<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Members extends Model
{
    use SoftDeletes;
    protected $table = 'member_tbl';
    protected $dates = ['deleted_at'];

    public static function membersValidator($request,$type='create') {
        $validation['first_name']    = 'required|max:255';
        $validation['last_name']     = 'required|max:255';
        $validation['contact_num']   = 'required|numeric|digits_between:7,11';
        if($type == 'update') {
            $validation['mail_address']  = 'required|email|max:255';
        } else {
            $validation['mail_address']  = 'required|email|unique:member_tbl|max:255';
        }

        $validation['ranking']       = 'required|numeric';
        if($request->hasFile('image_file')) {
            $validation['image_file'] = 'mimes:jpeg,bmp,png|max:1000';
        }

        return \Validator::make($request->all(),$validation);
    }
}
