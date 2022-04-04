<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="Admin Dashboard" name="description" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Admin Panel - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- compress css -->
        <link  rel="stylesheet"  type="text/css" href="/css/plugins/bootstrap.min.css" />
        <link  rel="stylesheet"  type="text/css" href="/css/plugins/icons.css" />
        <link  rel="stylesheet"  type="text/css" href="/css/style.css" />
        <!-- end compress css -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
        
    </head>
    <body data-page-id="@yield('data-page-id')" class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            @include('admin.layouts.sidebar')
            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    @include('admin.layouts.header')
                    <div class="page-content-wrapper">
                        <!-- page content lives here -->
                        @yield('content')
                    </div>
                    <!-- Page content Wrapper -->
                </div>
                <!-- content -->
                @include('admin.layouts.footer')
            </div>
            <!-- End Right content here -->
        </div>
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
        <script>
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type','info') }}"
            switch(type){
                case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;
                case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;
                case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;
                case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break; 
            }
            @endif 
        </script>

      
    </body>
</html>
