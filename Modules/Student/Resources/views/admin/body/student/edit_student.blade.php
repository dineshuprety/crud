@extends('admin.layouts.base')
@section('title', 'Edit Student') 
@section('data-page-id', 'adminStudentEdit') 
@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-xl-12">
      <div class="card m-b-30">
         <div class="card-body">
            <h4 class="mt-0 header-title">Edit {{ucwords($student->fullname)}}</h4>
            <form action="{{route('student.update')}}" method="post" enctype="multipart/form-data">
              
               <div class="form-group">
                  <label for="exampleFormControlInput1">Full Name:</label>
                  <input type="text" name="fullname" class=" @error('fullname') is-invalid @enderror form-control" value="{{$student->fullname}}" placeholder="Enter Your Full Name" required/>
                  @error('fullname')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <div class="form-group">
                  <label for="exampleFormControlInput1">Address:</label>
                  <input type="text" name="address" class=" @error('address') is-invalid @enderror form-control" value="{{$student->address}}" placeholder="Enter Your Address" required/>
                  @error('address')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <!-- form row 4 end -->
               <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="exampleFormControlInput1">Email:</label>
                     <input type="email" name="email" class=" @error('email') is-invalid @enderror form-control" value="{{$student->email}}" placeholder="Enter Your Email" required/>
                     @error('email')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="exampleFormControlInput1">Phone Number:</label>
                     <input type="number" name="phone_number" class=" @error('phone_number') is-invalid @enderror form-control" value="{{$student->phone_number}}" placeholder="Enter Your Phone Number" required/>
                     @error('phone_number')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  </div>
               </div>
               </div>
               <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="exampleFormControlInput1">Pincode:</label>
                     <input type="number" name="pincode" class=" @error('pincode') is-invalid @enderror form-control" value="{{$student->pincode}}" placeholder="Enter Your Pin/Zipcode" required/>
                     @error('pincode')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  </div>
               </div>
               <div class="col-md-6">
               <label for="exampleFormControlInput1">Class:</label>
               <div class="input-group">
                  <select class="@error('classes') is-invalid @enderror custom-select" name="classes">
                     <option value="{{$student->classes}}" selected>Class-{{$student->classes}}</option>
                     @for($i = 1; $i <= 12; $i++)
                     <option value="{{ $i }}">Class-{{ $i }}</option>
                     @endfor
                  </select>
                  @error('classes')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  </div>                 
               </div>
               </div>
               
               <div class="form-group">
                  <label for="exampleFormControlFile1">Student Image</label>
                  <input type="file" name="student_image" class="form-control-file" onChange="mainThamUrl(this)" /><br>
                  <img src="{{$student->student_image}}" height="100" width="100" id="mainThmb">
               </div>
               @error('student_image')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               <!-- button row -->
               <div class="form-row">
                  <div class="col">
                     <!-- <button type="reset" class="btn btn-danger">Reset</button> -->
                  </div>
                  <div class="float-right">
                   @csrf
                     <input type="hidden" name="id" value="{{$student->id}}"> 
                     <button class="btn btn-primary" type="submit">Upload</button>
                  </div>
               </div>
               <!-- button row end -->
            </form>
         </div>
      </div>
   </div>
</div>
<script>
   function mainThamUrl(input){
       if (input.files && input.files[0]) {
           var reader = new FileReader();
           reader.onload = function(e){
               $('#mainThmb').attr('src',e.target.result).width(100).height(100);
           };
           reader.readAsDataURL(input.files[0]);
       }
   }
</script>
@endsection
