<?php

namespace App;

use App\Role;
use App\UserAuth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * Checks if user is admin
     */
    public function isAdmin(){
        return $this->hasRole(1); //admin
    }

    /**
     * Find out if user has a specific role
     */
    public function hasRole($role){
        //return in_array($role, array_fetch($this->roles->toArray(), 'name'));
        $collection = $this->roles()->wherePivot('role_id', $role)->get();
        return !$collection->isEmpty(); 
    }

    /**
     * Get the roles a user has
     */
    public function roles(){
        return $this->belongsToMany('App\Role', 'user_role');
    }

    /**
    * Get the auths a user has
    */
    public function auths() {
        return $this->hasMany('App\UserAuth');
    }
}
