<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta content="Admin Dashboard" name="description" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>Admin Panel - login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!-- compress css -->
      <!-- compress css -->
      <link  rel="stylesheet"  type="text/css" href="/css/plugins/bootstrap.min.css" />
        <link  rel="stylesheet"  type="text/css" href="/css/plugins/icons.css" />
        <link  rel="stylesheet"  type="text/css" href="/css/style.css" />
      <!-- end compress css -->
   </head>
   <body data-page-id='adminLogin' class="fixed-left">
      <div class="accountbg"></div>
      <div class="wrapper-page">
         <div class="card">
            <div class="card-body">
               <h3 class="text-center mt-0 m-b-15">
                  <a href="/admin/login" class="logo logo-admin"><img src="/images/adminLTELogo.png" height="30" alt="logo"></a>
               </h3>
               <h4 class="text-muted text-center font-18"><b>Sign In</b></h4>
               <div class="p-3">
                  <form id="adminlogin" method="POST" class="form-horizontal m-t-20" action="{{route('admin.login')}}">
                     <div class="form-group row">
                        <div class="col-12">
                           <input class="form-control" type="email" id="email" name="email"  placeholder="Username">
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-12">
                           <input class="form-control" type="password" id="password" name="password"  placeholder="Password">
                        </div>
                     </div>
                     <div class="error alert alert-success" style="display: none;"></div>
                     <div class="form-group text-center row m-t-20">
                         @csrf
                        <div class="col-12">
                           <button class="btn btn-info btn-block waves-effect waves-light" type="submit">Log In</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery  -->
      <!-- END wrapper -->
        <!-- jQuery  -->
        <script src="/js/plugins/jquery.min.js"></script>
        <script src="/js/plugins/bootstrap.min.js"></script>
        <!-- datatable js -->
       
        <!-- end datatable js -->
        <script src="/js/plugins/jquery.scrollTo.min.js"></script>
        <!-- end plugins -->
        <!-- admin js -->
        <!-- end admin js -->
        <!-- init js -->
        <script src="/js/student.js"></script>
        <script src="/js/init.js"></script>
        <!-- end init js -->
        <!-- all pages js -->
        <script src="/js/pages/allPages.js"></script>
        <script src="/js/adminlte.js"></script>
        <!-- end all pages js -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
        <!-- custom js -->
   </body>
</html>
