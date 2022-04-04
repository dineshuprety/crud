@extends('admin.layouts.base')
@section('title', 'Student Details')
@section('data-page-id','viewStudentDetails')
@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-md-6 col-12">
      <div class="card m-b-30">
         <div class="card-body">
            <h4 class="mt-0 header-title">Student Details</h4>
            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
               <thead>
               <tr>
                     <th>  Name : </th>
                     <th> {{ ucwords($student->fullname) }} </th>
                  </tr>
                  <tr>
                     <th>  Phone : </th>
                     <th> {{ ucwords($student->phone_number) }} </th>
                  </tr>
                  <tr>
                     <th> Address : </th>
                     <th> {{ ucwords($student->address) }} </th>
                  </tr>
                  <tr>
                     <th> Email  : </th>
                     <th class="text-danger"> {{ $student->email }} </th>
                  </tr>
                  <tr>
                     <th> Pin/Zipcode : </th>
                     <th>{{$student->pincode}} </th>
                  </tr>
                  <tr>
                     <th> Class : </th>
                     <th>   
                        <span>Class-{{ $student->classes }}</span> 
                     </th>
                  </tr>
                  <tr>
                     <th>  </th>
                     <th> 
                        <a href="{{route('student.edit', ['id' => $student->id])}}" class="confirm"><button class="btn btn-block btn-success">Edit</button></a>
                     </th>
                  </tr>
               </thead>
            </table>
         </div>
      </div>
   </div>

   <div class="col-md-6 col-12">
      <div class="card m-b-30">
         <div class="card-body">
            <h4 class="mt-0 header-title">Image</h4>
            <img src="{{$student->student_image}}" alt="{{$student->fullname}}" width="100%" height="100%">
         </div>
      </div>
   </div>
  
</div>
<!-- container -->
<!-- container -->
@endsection