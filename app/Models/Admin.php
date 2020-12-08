<?php


namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{

    public function getKeyType()
    {
        return 'string';
    }

    public function getFullNameAttribute()
    {
        return $this->first_name. ' '. $this->last_name;
    }
}
