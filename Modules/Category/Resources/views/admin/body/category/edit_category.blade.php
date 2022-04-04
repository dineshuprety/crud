@extends('admin.layouts.base')
@section('title', 'Add Edit') 
@section('data-page-id', 'adminEditCategory') 
@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-xl-12">
      <div class="card m-b-30">
         <div class="card-body">
            <h4 class="mt-0 header-title">Edit Categoty</h4>
            <form action="{{route('category.update')}}" method="post">
              
               <div class="form-group">
                  <label for="exampleFormControlInput1">Full Name:</label>
                  <input type="text" name="category_name" value="{{$category->category_name}}" class="@error('category_name') is-invalid @enderror form-control"  placeholder="Category Name:" required/>
                  <input type="hidden" name="category_id" value="{{$category->id}}" />
                    @error('category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               </div>
               <!-- button row -->
               <div class="form-row">
                  <div class="col">
                     <!-- <button type="reset" class="btn btn-danger">Reset</button> -->
                  </div>
                  <div class="float-right">
                   @csrf 
                     <button class="btn btn-primary" type="submit">Update</button>
                  </div>
               </div>
               <!-- button row end -->
            </form>
         </div>
      </div>
   </div>
</div>

@endsection
