<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wifi extends Authenticatable
{
    use SoftDeletes;
    protected $table = 'wifi_tbl';
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'WIFI_PWD', 'EXP_DATE'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public static function getLastModifyDate(){
	    $wifi = parent::first(['updated_at'])->updated_at;
        return \Carbon\Carbon::parse($wifi);
	}

    public static function getPrintedDate() {
        $dt = \Carbon\Carbon::parse(date("Y-m-d H:i:s"));
        $printed_date = $dt->subHours(config('define.print_sub_hours'));

        return $printed_date;
    }

    public static function getPassword() {
        $wifi = @parent::first(['wifi_pwd']);
        return \Crypt::decrypt($wifi->wifi_pwd);
    }
}
