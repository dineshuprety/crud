@extends('admin.layouts.base')
@section('title', 'Edit Product') 
@section('data-page-id', 'EditAdminProduct') 
@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-xl-12">
      <div class="card m-b-30">
         <div class="card-body">
            <h4 class="mt-0 header-title">Edit Product</h4>
            <form action="{{route('product.update')}}" method="post">
              
               <div class="form-group">
                  <label for="exampleFormControlInput1">Title:</label>
                  <input type="text" name="title" value="{{$product->title}}" class="@error('title') is-invalid @enderror form-control"  placeholder="Title:" />
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               </div>
               
               <label for="exampleFormControlInput1">Category:</label>
               <div class="input-group">
                  <select class="@error('cat_id') is-invalid @enderror custom-select" name="cat_id" >
                     @foreach($categories as $category)
                     @if($category->id == $product->cat_id)
                     <option value="{{ $category->id }}" selected>{{ucfirst($category->category_name)}}</option>
                     @else
                     <option value="{{ $category->id }}">{{ucfirst($category->category_name)}}</option>
                     @endif
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
                  <textarea type="text" name="description"  class="@error('description') is-invalid @enderror form-control"  placeholder="Product description:" rows="4" cols="50" maxlength="200" >{{$product->description}}</textarea>
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
                   <input type="hidden" name="product_id" value="{{$product->id}}">
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
