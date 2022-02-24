<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRolesModel extends Model
{
    protected $table = 'tlkpRoles';
    protected $primaryKey = 'RoleNum';
    const CREATED_AT = 'TimeStamp';
}
