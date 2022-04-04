@extends('admin.layouts.base') 
@section('title', 'Manage Student') 
@section('data-page-id', 'adminManageStudent') 
@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-xl-12">
      <div class="card m-b-30">
         <div class="card-body">
            <div class="table-responsive-sm">
               <h4 class="mt-0 header-title">Student Tables</h4>
               @if(count($students))
               <table id="studentTable" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                     <tr class="titles">
                        <th>Name</th>
                        <th>Image</th>
                        <th>phone Number</th>
                        <th>Address</th>
                        <th>Created</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($students as $student)
                     <tr>
                        <td>{{ucwords($student->fullname)}}</td>
                        <td><img src="{{$student->student_image}}" alt="{{$student->fullname}}" width="50px" height="50px"></td>
                        <td>{{$student->phone_number}}</td>
                        <td>{{ucfirst($student->address)}}</td>
                        <td>{{$student->created_at}}</td>
                        <td>
                           <!-- status change demand -->
                           <span  title="View Details">
                           <a href="{{route('student.view',['id' => $student->id])}}"><button class="btn-sm btn-secondary" ><i class="fal fa-eye"></i></button></a>
                           </span>

                           <!-- Edit demand button -->
                           <span style="display: inline-block;" title="Edit students">
                           <a href="{{route('student.edit',['id' => $student->id])}}"> <button class="btn-sm btn-success" ><i class="fa fa-edit"></i></button></a>
                           </span>

                           <span style="display: inline-block;" title="Delete student" >
                              <form method="POST" action="{{route('student.delete')}}" class="delete-item">
                                 @csrf
                                 <input type="hidden" name="id" value="{{$student->id}}">
                                 <button type="submit" onClick="return confirm('Are you sure want to delete student date?')" class="btn-sm btn-danger" >
                                 <i class="fa fa-trash"></i>
                                 </button>
                              </form>
                           </span>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
               @else
               <p> You have not created any students </p>
               @endif
               <hr />
            </div>
         </div>
      </div>
   </div>
   <!-- Page content Wrapper -->
</div>
<!-- container -->
@endsection
