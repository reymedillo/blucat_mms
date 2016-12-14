<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembersTrn extends Model
{
    protected $table = 'member_trn';
    protected $fillable = ['mid','type','message'];

    public static function createLog($mid,$type,$message) {
        \DB::beginTransaction();
        $log = new MembersTrn;
        $log->mid        = $mid;
        $log->type       = $type;
        $log->message    = $message;

        if($log->save()) {
            \DB::commit();
        } else {
            \DB::rollBack();
        }
    }
}
