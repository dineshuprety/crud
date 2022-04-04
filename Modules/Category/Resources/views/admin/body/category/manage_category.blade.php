@extends('admin.layouts.base') 
@section('title', 'Manage Category') 
@section('data-page-id', 'adminManageCategory') 
@section('content')
<div class="container-fluid">
<div class="row">
   <div class="col-xl-12">
      <div class="card m-b-30">
         <div class="card-body">
            <div class="table-responsive-sm">
               <h4 class="mt-0 header-title">Category Tables</h4>
               @if(count($categories))
               <table id="studentTable" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                     <tr class="titles">
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Created</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($categories as $category)
                     <tr>
                        <td>{{ucwords($category->category_name)}}</td>
                        <td>{{$category->category_slug}}</td>
                        <td>{{$category->created_at}}</td>
                        <td>
                           <!-- Edit demand button -->
                           <span style="display: inline-block;" title="Edit Category">
                           <a href="{{route('category.edit',['id' => $category->id])}}"> <button class="btn-sm btn-success" ><i class="fa fa-edit"></i></button></a>
                           </span>

                           <span style="display: inline-block;" title="Delete category" >
                              <form method="POST" action="{{route('category.delete')}}" class="delete-item">
                                 @csrf
                                 <input type="hidden" name="category_id" value="{{$category->id}}">
                                 <button type="submit" onClick="return confirm('Are you sure want to delete category date?')" class="btn-sm btn-danger" >
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
