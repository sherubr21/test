@extends('Admin.master')
@section('content')

<div class="content-wrapper"> 
@if ($message = Session::get('mess'))
                                           <div class="alert alert-danger alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $message }}</strong>
                                           </div>
                                           @endif
                                        
                                           @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                             <ul>
                                             @foreach($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                             @endforeach
                                             </ul>
                                            </div>
                        @endif

   <div class="col-lg-12 grid-margin stretch-card">
   
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Faculty</h3>
                    <p class="card-description"> Modules <code></code> </p>
                 
                    <table class="table" width="70%">
                      <thead>
                        <tr>
                          <th>Program</th>
                          <th>Subject</th>
                          <th>Section</th>
                          <th>Weight</th>
                          <th>Students</th>
                          <th>Final?</th>
                          <th>Schedule*</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php foreach($getclass as $cl) { 
                              
                         ?>
                        <tr>
                          <td>{{$cl->Program}}</td>
                          <td>{{$cl->SubjectName}}</td>
                          <td>{{$cl->ClassSection}}</td>
                          <td>
                               {{$cl->SumWeights}}
                          </td>
                          <td>{{$cl->NumStudents}}</td>
                          <td>
                           <?php if($cl->Finalized==0)
                               {                          
                           ?>      
                          <input type="checkbox" name="bal[]" value=""
					                  	  disabled="disabled" >
                              <?php }elseif($cl->Finalized==1){?>
                                  <input type="checkbox" name="bal[]" value=""
                                  disabled="disabled" checked="checked">
                             <?php }?>
                              
                          </td>
                          <td>{{$cl->Sked}}</td>
                        
                                
                          <td>  <form action='{{url("finalized")}}' method='Post'> 
                          @csrf <input type='hidden' name='cl' value='{{$cl->ClassNum}}'> <button type="Submit" class="btn btn-success btn-fw">Finalized</button>   </form></td>
                           
                        </tr>
                        <?php 
                        }
                        
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
</div>
@endsection