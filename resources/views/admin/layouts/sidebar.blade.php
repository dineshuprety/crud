<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="ion-close"></i>
            </button>

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="/" class="logo" >Admin</a>
                    <!-- <a href="/admin" class="logo"><img src="../images/logo/logo-4.jpg" height="33" alt="logo"></a> -->
                </div>
            </div>

            <div class="sidebar-inner slimscrollleft">

                <div class="user-details">
                    <div class="text-center">
                        <img src="/images/user1-128x128.jpg" alt="" class="rounded-circle">
                    </div>
                    <div class="user-info">
                    
                            <h4 class="font-16 text-white"></h4>
                            <span class="text-white"><i class="fa fa-dot-circle-o text-success"></i> Online</span>
                    </div>
                </div>

            <div id="sidebar-menu">
                <ul>
                        <li class="menu-title text-white">Menus</li>

                        <li>
                            <a href="/" class="waves-effect">
                                <i class="fal fa-home fa-sm"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="fal fa-cat"></i> <span> Category </span> <span class="pull-right"><i class="fal fa-angle-down fa-sm" aria-hidden="true"></i></span></a>
                            <ul class="list-unstyled">
                                <li></i><a href="{{route('category.add')}}"><i class="fa fa-plus fa-sm"></i>Add Category</a></li>
                                <li><a href="{{route('category.index')}}"><i class="fa fa-pencil fa-sm"></i>Manage Category</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="fal fa-shopping-cart"></i> <span> Product </span> <span class="pull-right"><i class="fal fa-angle-down fa-sm" aria-hidden="true"></i></span></a>
                            <ul class="list-unstyled">
                                <li></i><a href="{{route('product.add')}}"><i class="fa fa-plus fa-sm"></i>Add Product</a></li>
                                <li><a href="{{route('product.manage')}}"><i class="fa fa-pencil fa-sm"></i>Manage Product</a></li>
                            </ul>
                        </li>
                     
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="fal fa-users fa-sm"></i> <span> Student </span> <span class="pull-right"><i class="fal fa-angle-down fa-sm" aria-hidden="true"></i></span></a>
                            <ul class="list-unstyled">
                                <li></i><a href="{{route('student.add')}}"><i class="fa fa-plus fa-sm"></i>Add Student</a></li>
                                <li><a href="{{route('student.manage')}}"><i class="fa fa-pencil fa-sm"></i>Manage Student</a></li>
                            </ul>
                        </li>

                        
                        <li>
                            <a href="/logout" class="waves-effect">
                                <i class="mdi mdi-logout"></i>
                                <span> logout </span>
                            </a>
                        </li>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->