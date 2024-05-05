<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Hospital Register</title>
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
    <link href="<?=base_url('Assets/User/css/minimal-slider.css')?>" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?=base_url('Assets/User/css/flexslider.css')?>" type="text/css" media="screen" property="" />
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet"><!-- //online-fonts -->
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
                        <li class="nav-item active  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="<?=base_url('User_controller/index')?>">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                       <!--  <li class="nav-item  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="services.html">services</a>
                        </li> -->
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
                        <!-- <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="gallery.html">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li> -->
                      
                    </ul>
                </div>
            </nav>
        </header>
 <!-- main image slider container -->

    <!--about-->
    <div class="about">
    <div class="abt-layer">
        <div class="container offset mb-4">
            <div class="about-main">
                <div class="about-right">
                    <h3 class="subheading-w3-agile text-center">Hospital Register</h3>
                    <!-- stats -->
                    <div class="stats">
                        <div class="stats_inner">
            
        <form method="post" action="<?=base_url('Hospital_controller/register')?>" enctype="multipart/form-data">
            
                        <div class="form-group">
                            <div class="col-md-9">
                            <label><h6>Hospital Name</h6></label>

                                <div class="input-group input-icon right">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                    <input id="hospital_name" required="" class="form-control1" name="hospital_name" type="text" >
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-md-8">
                            <label><h6>Hospital Email</h6></label>
                                <div class="input-group input-icon right">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                    <input id="hospital_email" required="" class="form-control1" name="hospital_email" type="text" >
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                            <label><h6>Phone No:</h6></label>
                                <div class="input-group input-icon right">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                    <input id="hospital_phone" required="" class="form-control1" name="hospital_phone" type="text">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8">
                            <label><h6>Hospital Address</h6></label>
                                <div class="input-group input-icon right">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                    <input id="hospital_address" required="" class="form-control1" name="hospital_address" type="text">
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-md-8">
                            <label><h6>Hospital Image</h6></label>
                                <div class="input-group input-icon right">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                    <input id="hospital_image" required="" class="form-control1" name="hospital_image" type="file">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                            <label><h6>License Image</h6></label>
                                <div class="input-group input-icon right">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                    <input id="hospital_license" required="" class="form-control1" name="hospital_license" type="file">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                            <label><h6>Password</h6></label>
                                <div class="input-group input-icon right">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                    <input id="password" class="form-control1" required="" name="hospital_password"  type="password">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                            <label><h6>Confirm Password</h6></label>
                                <div class="input-group input-icon right">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                    <input id="confirm_pass" class="form-control1" required="" name="confirm_pass"  type="password">
                                </div>
                            </div>
                        </div>

      <div class="panel-footer">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <button name="button" class="btn btn-success">Register</button>
                <button class="btn-default btn">Cancel</button><br><br>
                 <p class="text-center dont-do" style="color: white">Already have an account?
                            <a href="<?=base_url('Hospital_controller/hospital_login')?>" class="text-dark font-weight-bold" style="color: white">
                                Login</a></p>
            </div>
        </div>
     </div>
    </form>
                        </div>
                    </div>
                    <!-- //stats -->

                </div>
            </div>
            
        </div>
        </div>
    </div>

    <footer class="py-sm-5">
        <div class="container">
            <div class="row py-5">
                <!-- footer grid1 -->
                <div class="col-lg-3 col-sm-6 fv5-contact">
                    <h2 class="mb-4">Contact Us</h2>
                    <div class="fv3-contact mt-3">
                    
                        <span class="fas fa-home mr-2"></span>
                        <p>455,Thrissur Round,Thissur,Kerala.</p>
                    </div>
                    <div class="fv3-contact mt-3">
                        <span class="fas fa-phone-volume mr-2"></span>
                        <p>+987 787 8877</p>
                    </div>
                    <div class="fv3-contact mt-3">
                        <span class="fas fa-envelope-open mr-2"></span>
                        <a href="" class="text-secondary">vaccine@gmail.com</a>
                    </div>
                </div>
                <!-- //footer grid1 -->
                <!-- footer grid2 -->
                <div class="col-lg-3  col-sm-6 footv3-left text-lg-center my-sm-0 mt-5">
                    <h3 class="mb-4">Opening Hours</h3>
                    <ul class="list-agileits">
                        <li>
                            Mon – Fri ------- 09:00-17:00
                        </li>
                        <li class="my-3">
                            Saturday -------- 09:30-17:00</a>
                        </li>
                        <li class="mb-3">
                            Sunday ---------- 10:30-18:00
                        </li>
                        
                    </ul>
                </div>
                <!-- //footer grid2 -->
                <!-- footer grid3 -->
                <div class="col-lg-3  col-sm-6 footv3-left text-lg-center my-lg-0 mt-sm-5 mt-5">
                    <h3 class="mb-4">Navigation</h3>
                    <ul class="list-agileits">
                        <li>
                            <a href="">
                                Home
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="">
                                About Us
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //footer grid3 -->
                <!-- footer grid4  -->
               
                <!-- //footer grid4 -->
            </div>
            <div class="cpy-right text-center  pt-3">
                
                <div class="copyrightbottom">
                    <p class="text-secondary">© 2023 All Vaccine
                    </p>
                </div>
                <div class="copyrighttop">
                    <ul>
                        <li>
                            <h4>Follow us on:</h4>
                        </li>
                        <li>
                            <a class="facebook" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a class="facebook" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="facebook" href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a class="facebook" href="#">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //footer container -->
    </footer>
    <!-- //footer -->

    <!-- login  -->
    
    <!-- //login -->
     <!--/Register-->
    

    <!-- //footer -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <script src="js/minimal-slider.js"></script>
<!-- flexSlider (for testimonials) -->
        <!-- Calendar -->
                <link rel="stylesheet" href="<?=base_url('Assets/User/css/jquery-ui.css')?>" />
                <script src="js/jquery-ui.js"></script>
                  <script>
                          $(function() {
                            $( "#datepicker" ).datepicker();
                          });
                  </script>
                <!-- //Calendar -->

    <script defer src="js/jquery.flexslider.js"></script>
    <script>
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //flexSlider (for testimonials) -->

    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>