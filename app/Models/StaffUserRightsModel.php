<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffUserRightsModel extends Model
{
    protected $table = 'vwWEBStaffUserRights';
    protected $primaryKey = 'Staff';
    const CREATED_AT = 'TimeStamp';
}
