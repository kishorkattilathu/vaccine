<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?=base_url('Assets/Admin/css/bootstrap.min.css')?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?=base_url('Assets/Admin/css/style.css')?>" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?=base_url('Assets/Admin/css/lines.css')?>" rel='stylesheet' type='text/css' />
<link href="<?=base_url('Assets/Admin/css/font-awesome.css')?>" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?=base_url('Assets/Admin/js/jquery.min.js')?>"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="<?=base_url('Assets/Admin/css/custom.css')?>" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="<?=base_url('Assets/Admin/js/metisMenu.min.js')?>"></script>
<script src="<?=base_url('Assets/Admin/js/custom.js')?>"></script>
<!-- Graph JavaScript -->
<script src="<?=base_url('Assets/Admin/js/d3.v3.js')?>"></script>
<script src="<?=base_url('Assets/Admin/js/rickshaw.js')?>"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Hospital Vaccine</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
               
                <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png"><span class="badge">9</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-header text-center">
                            <strong>Account</strong>
                        </li>
                        <li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
                        <li class="dropdown-menu-header text-center">
                            <strong>Settings</strong>
                        </li>
                        <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
                        <li class="divider"></li>
                        <li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>  
                    </ul>
                </li> -->
            </ul>
           <!--  <form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form> -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       <!--  <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li> -->
                       <!--  <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Layouts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="grids.html">Grid System</a>
                                </li>
                            </ul> -->
                            <!-- /.nav-second-level -->
                       <!--  </li> -->
                       <!--  <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>Menu Levels<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="graphs.html">Graphs</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                            </ul> -->
                            <!-- /.nav-second-level -->
                       <!--  </li> -->
                        <li>
                            <a href="<?=base_url('Admin_controller/profile')?>"><i class="fa fa-user"></i>My Profile<span class="fa arrow"></span></a>
                        </li>


                        <li>
                            <a href=""><i class="fa fa-indent nav_icon"></i>Categories<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url('Admin_controller/categories')?>">Add Categories</a>
                                </li>
                                <li>
                                    <a href="<?=base_url('Admin_controller/manage_categories')?>">Manage Categories</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href=""><i class="fa fa-indent nav_icon"></i>Hospitals<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url('Admin_controller/add_hospitals')?>">Add Hospitals</a>
                                </li>
                                <li>
                                    <a href="<?=base_url('Admin_controller/manage_hospitals')?>">Verify Hospitals</a>
                                </li>
                                <!--  -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                             <li>
                            <a href=""><i class="fa fa-indent nav_icon"></i>Complaints<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url('Admin_controller/pending_complaints')?>">Pending Complaints</a>
                                </li>
                                <li>
                                    <a href="<?=base_url('Admin_controller/all_complaints')?>">Replied Complaints</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href=""><i class="fa fa-indent nav_icon"></i>Bookings<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url('Admin_controller/all_bookings')?>">All Bookings</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                       <!--  <li>
                            <a href="widgets.html"><i class="fa fa-flask nav_icon"></i>Widgets</a>
                        </li> -->
                        <!--  <li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Forms<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="forms.html">Basic Forms</a>
                                </li>
                                <li>
                                    <a href="validation.html">Validation</a>
                                </li>
                            </ul> -->
                            <!-- /.nav-second-level -->
                       <!--  </li> -->
                       <!--  <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Tables<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="basic_tables.html">Basic Tables</a>
                                </li>
                            </ul> -->
                            <!-- /.nav-second-level -->
                       <!--  </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Css<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="media.html">Media</a>
                                </li>
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                            </ul> -->
                            <!-- /.nav-second-level -->
                      <!--   </li>
 -->
                          <li>
                            <a href=""><i class="fa fa-sitemap fa-fw nav_icon"></i>Settings<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url('Admin_controller/logout')?>">Log Out</a>
                                </li>
                               <!--  <li>
                                    <a href="login.html">Login</a>
                                </li> -->
                            </ul>
                            <!-- /.nav-second-level -->
                         </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
        
     
      <div class="span_11">
        <div class="col-md-6 col_4">
          <!----Calender -------->
            <link rel="stylesheet" href="<?=base_url('Assets/Admin/css/clndr.css')?>" type="text/css" />
            <script src="<?=base_url('Assets/Admin/js/underscore-min.js" type="text/javascript')?>"></script>
            <script src= "<?=base_url('Assets/Admin/js/moment-2.2.1.js" type="text/javascript')?>"></script>
            <script src="<?=base_url('Assets/Admin/js/clndr.js" type="text/javascript')?>"></script>
            <script src="<?=base_url('Assets/Admin/js/site.js" type="text/javascript')?>"></script>
            <!----End Calender -------->
        </div>
        