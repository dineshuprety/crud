@extends('admin.layouts.base') 
@section('title', 'Manage Product') 
@section('data-page-id', 'adminManageProduct') 
@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-xl-12">
      <div class="card m-b-30">
         <div class="card-body">
            <div class="table-responsive-sm">
               <h4 class="mt-0 header-title">Category Tables</h4>
               @if(count($products))
               <table id="studentTable" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                     <tr class="titles">
                        <th>Title</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Created</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($products as $product)
                     <tr>
                        <td>{{ucwords($product->title)}}</td>
                        <td>{{$product->category->category_name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>
                           <!-- Edit demand button -->
                           <span style="display: inline-block;" title="Edit product">
                           <a href="{{route('product.edit',['id' => $product->id])}}"> <button class="btn-sm btn-success" ><i class="fa fa-edit"></i></button></a>
                           </span>

                           <span style="display: inline-block;" title="Delete product" >
                              <form method="POST" action="{{route('product.delete')}}" class="delete-item">
                                 @csrf
                                 <input type="hidden" name="product_id" value="{{$product->id}}">
                                 <button type="submit" onClick="return confirm('Are you sure want to delete product?')" class="btn-sm btn-danger" >
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
               <p> You have not created any Category </p>
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
