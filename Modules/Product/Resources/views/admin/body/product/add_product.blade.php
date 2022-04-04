@extends('admin.layouts.base')
@section('title', 'Add Product') 
@section('data-page-id', 'addAdminProduct') 
@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-xl-12">
      <div class="card m-b-30">
         <div class="card-body">
            <h4 class="mt-0 header-title">Add Product</h4>
            <form action="{{route('product.store')}}" method="post">
              
               <div class="form-group">
                  <label for="exampleFormControlInput1">Title:</label>
                  <input type="text" name="title" value="{{(old('title'))? old('title') : '' }}" class="@error('title') is-invalid @enderror form-control"  placeholder="Title:" />
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               </div>
               
               <label for="exampleFormControlInput1">Category:</label>
               <div class="input-group">
                  <select class="@error('cat_id') is-invalid @enderror custom-select" name="cat_id" >
                     <option value="" selected>Choose Category...</option>
                     @foreach($categories as $category)
                     <option value="{{ $category->id }}">{{ucfirst($category->category_name)}}</option>
                     @endforeach
                  </select>
                  @error('cat_id')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror                
               </div>
               <div class="form-group">
                  <label for="exampleFormControlInput1">Product Description:</label>
                  <textarea type="text" name="description"  value="{{(old('description'))? old('description') : '' }}" class="@error('description') is-invalid @enderror form-control"  placeholder="Product description:" rows="4" cols="50" maxlength="200" ></textarea>
                    @error('description')
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
                     <button class="btn btn-primary" type="submit">Add</button>
                  </div>
               </div>
               <!-- button row end -->
            </form>
         </div>
      </div>
   </div>
</div>

@endsection
