<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Alleviating Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="<?=base_url('Assets/User/css/bootstrap.css')?>" type="text/css" rel="stylesheet" media="all">
    <link href="<?=base_url('Assets/User/css/style.css')?>" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="<?=base_url('Assets/User/css/fontawesome-all.min.css')?>" rel="stylesheet">
    <!-- //Custom Theme files -->
	 <!-- online-fonts -->
	<link href="<?=base_url('Assets/User///fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet')?>">
    <link href="<?=base_url('Assets/User///fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900')?>" rel="stylesheet"><!-- //online-fonts -->
</head>
<body>
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                <h1>
                    <a class="navbar-brand text-white" href="">
                       Vaccine
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <!-- <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="<?=base_url('User_controller/home')?>">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li> -->
                       
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="<?=base_url('User_controller/home')?>">Hospitals</a>
                        </li>
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="<?=base_url('User_controller/my_profile')?>">My Profile</a>
                        </li>
                       <!--  <li class="nav-item dropdown mr-3 mt-lg-0 mt-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="about.html">About</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="typo.html">Typography</a>
                            </div>
                        </li> -->
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="<?=base_url('User_controller/receipts')?>">Receipts</a>
                        </li> 

                         <li class="nav-item dropdown mr-3 mt-lg-0 mt-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Bookings
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?=base_url('User_controller/bookings')?>">Approved Bookings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=base_url('User_controller/pending_bookings')?>">Pending Bookings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=base_url('User_controller/all_bookings')?>">All Booked</a>
                            </div>
                        </li>

                         <li class="nav-item dropdown mr-3 mt-lg-0 mt-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Complaints
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?=base_url('User_controller/contact')?>">New Complaints</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=base_url('User_controller/all_complaint')?>">All Complaints</a>
                            </div>
                        </li>


                       <!--  <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('User_controller/contact')?>">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('User_controller/all_complaint')?>">Complaints</a>
                        </li> -->
                        <li>
                            <a href="<?=base_url('Admin_controller/logout')?>"><button type="button" class="btn  ml-lg-2 w3ls-btn">
                                Log Out
                            </button></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>