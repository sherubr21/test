<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StaffController extends Controller
{
    public function index()
    {

	return view('Staff/StaffDashboard');	
 
    }

    public function changePassword()
    {
        
	return view('Public/ChangePassword');	
    }
    
}
