<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetailsModel;
use App\Models\StaffUserRightsModel;
use App\Models\UserRolesModel;
use DB;
//use Illuminate\Support\Facades\Schema;

//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Schema;
class AdminController extends Controller
{
    public function userDetails() //fetch the user list
    {
        $Users = UserRolesModel::all();
	return view('Admin/UserDetails',['Users'=>$Users]);	
    }

    public function userRoles() //fetch the role list
    {
      
      $UserRoles = UserRolesModel::all();
      /// $columns = Schema::getColumnListing('tblStaff');
       // $columns=DB::getSchemaBuilder()->getColumnListing('tblStaff');

       //echo "<pre>";
       //print_r($columns);
      // exit();
	return view('Admin/UserRoles',['Roles'=>$UserRoles]);	
    }
    public function addRole() //fetch the user list
    {
                //  $Users = UserDetailsModel::all();
	// return view('UserDetails',['Users'=>$Users]);	
    return view ('Admin/AddRole');
    }
}
