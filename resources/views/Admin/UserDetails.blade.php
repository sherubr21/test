@extends('Admin/master')
@section('content')
<h1 align ="center">User Details 
</h1> 
 <h2  class=" leading-tight">
 <b style="float:Right;">Total Users 
<span class="badge badge-dnager">{{count($Users)}}</span>
</b>
</h2>

<div class="content-wrapper">  
    <div class="table-responsive">
        <table class="table table-bordered table-condensed table-striped" id="UserDetailsTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Role ID</th>
                    <th>User ID</th>
                    <th>Created On</th>
                    <th>Edit</th>
                </tr>
            </thead>
        
            <tbody>
                @foreach($Users as $User)
                <tr>
                    <td>{{$User['RoleUserNum']}}</td>
                    <td>{{$User['RoleName']}}</td>
                    <td>{{$User['StaffFullName']}}</td>
                    <td>{{$User['TimeStamps']}}</td>
                    <th>Edit</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 </div> 
@endsection