<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'address', 'tel', 'agency_authority'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the items for a user.
     */
    public function items()
    {
        return $this->hasMany('App\Items');
    }

    public static function createUser($user){
        $n = new self();
        $n->name = $user['name'];
        $n->login_id = $user['login_id'];
        $n->password = bcrypt($user['password']);
        $n->save();
        return ['user'=>$n->toArray()];
    }
    public static function deleteUser($id){
        $n = self::find($id);
        $n->delete();
        return true;
    }
    public static function updateUser($id, $user){
        $u = self::find($id);
        $u->name = $user['name'];
        $u->login_id = $user['login_id'];
        if(isset($user['password'])){
            $u->password = bcrypt($user['password']);
        }
        $u->save();
        return ['user'=>$u->toArray()];
    }

    public static function refineApiResponse($params){
        $results = array();
        return $results;
    }
}
