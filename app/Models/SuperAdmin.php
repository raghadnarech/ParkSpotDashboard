<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class SuperAdmin extends Authenticatable
{
    public $timestamps = false;
    protected $guarded = [];
    protected $guard = 'super_admin';
    protected $table = 'super_admins';


}
