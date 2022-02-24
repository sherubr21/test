<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetailsModel extends Model
{
    // use HasFactory;

    protected $table = 'vwWEBUserRoleDetails';
    protected $primaryKey = 'RoleUserNum';
    const CREATED_AT = 'TimeStamps';
}
