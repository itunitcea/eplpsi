<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InspectionGroup extends Model
{
    protected $table = 'inspectiongroup';
    protected $primaryKey = 'insgroupID';

    public function groupName($fields = '*'){
        return $this->select($fields)->get();
    }
}
