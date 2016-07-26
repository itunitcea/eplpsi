<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'usertype';
    protected $primaryKey = 'userid';

    public function userType($fields = '*'){
        return $this->select($fields)->get();
    }
}
