<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
<<<<<<< HEAD
    protected $primaryKey = 'user_id';


=======
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
<<<<<<< HEAD
    protected $fillable = [
        'user_name',
        'email',
        'password',
        'userType' ,
        'groupName',
        'scope',
        'officeID',
        'userAdd1',
        'userAdd2',
        'userCity',
        'userTel',
        'userMob',
        'eplauthority'
    ];
=======
    protected $fillable = ['user_name', 'userEmail', 'password'];
>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
<<<<<<< HEAD
    
=======

    public function setPasswordAttribute($password)
{
    $this->attributes['password'] = \Hash::make($password);
}



>>>>>>> eed154157274eb25cb1e2e1ae906d719332ddf83
}
