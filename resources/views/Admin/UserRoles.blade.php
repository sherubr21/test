@extends('Admin/master')
@section('content')
<h1 align="center">User Details </h1> 


<div class="content-wrapper">  
  <div class="row">
    <a href="{{URL('/AddRole')}}">Add Role</a> 
      <table class="table table-hover">
        <thead>
            <tr>
              <th>ID</th>
              <th>Role</th>
              <th>Created On</th>
              </tr>
             </thead>
              
            <tbody>
              @foreach($Roles as $Role)
              <tr>
              <td>{{$Role['RoleNum']}}</td>
              <td>{{$Role['RoleName']}}</td>
              <td>{{$Role['EntryDate']}}</td>
            </tr>
            @endforeach
          </tbody>
    </table>

  </div> 
 </div>
@endsection