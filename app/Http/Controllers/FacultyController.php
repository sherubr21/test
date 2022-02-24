<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FacultyController extends Controller
{
    public function index()
    {
  //  session_start();
	return view('Faculty/FacultyDashboard');	
    }

    public function changePassword()
    {
        
	return view('Public/ChangePassword');	
    }
    public function finalized(Request $request){
       // echo $id;
       echo $request->input('cl');
        //session_start();
      try{
          $chackfinalized=DB::table('tblClasses')->where('ClassNum', $request->input('cl'))->first();
        //  echo $chackfinalized->Finalized;
          if($chackfinalized->Finalized==0){
                        $update=DB::table('tblClasses')->where('ClassNum', $request->input('cl'))
                         ->update(['Finalized'=>'True']);
                         if($update==true){
                           
                            return back()->with('mess', 'Finalized');
                           }
             
          }elseif($chackfinalized->Finalized==1){
            return back()->with('mess', 'Already Finalized');
          
          }
          
      } catch(\Illuminate\Database\QueryException $ex){ 
              dd($ex);
          return back()->with('mess', 'Sorry Something is Worrog');
          
        }

    }
}
