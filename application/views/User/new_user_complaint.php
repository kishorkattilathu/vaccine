
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Alleviating A Medical Category Bootstrap responsive Web Template | Home :: w3layouts</title>
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
                      
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link"  href="<?=base_url('Hospital_controller/hospital_login')?>">
                                Hospital
                            </a>
                        </li>
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link"  href="<?=base_url('Admin_controller/admin_login')?>">
                                Admin
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('User_controller/new_user_complaint')?>">Contact</a>
                        </li>
                        <li>
                            <button type="button" class="btn  ml-lg-2 w3ls-btn" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">
                                Login
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

 
    <!-- contact -->
    <section class="wthree-row w3-contact py-lg-5">
			<div class="container py-4">
            <div class="text-center wthree-title pb-sm-5 pb-3">
				<h3 class="w3l-sub">Contact Us</h3>
				<h4 class="sub-title py-3">We Are Here To Help You</h4>
			</div>
            <!-- contact details -->
            <div class="row contact-form py-lg-5">
                <!-- contact left grid -->
                <div class="col-lg-6  px-lg-5 map contact-right">
                    <div class="address">
                        <h5 class="my-3">Contact info</h5>
                        <div class="row py-3 wthree-cicon">
                            <span class="fas fa-envelope-open mr-3"></span>
                            <a href="mailto:info@example.com">vaccine@gmail.com</a>
                        </div>
                        <div class="row py-3  wthree-cicon">
                            <span class="fas fa-phone-volume mr-3"></span>
                            <h6>+91 123456789</h6>
                        </div>
                        <div class="row py-3  wthree-cicon">
                            <span class="fas fa-globe mr-3"></span>
                            <a href="#">www.vaccine.com</a>
                        </div>
                      
                    </div>
                </div>
                <!-- //contact left grid -->
                <!-- contact right grid -->

               
                <div class="col-lg-6 wthree-form-left mt-lg-0 mt-3">
                    <!-- contact form grid -->
                    <div class="contact-top1">
                        <h5 class="my-3">send us a message</h5>
                        <form action="<?=base_url('User_controller/new_complaint')?>" method="post"  class="f-color pt-3">
                            <div class="form-group">
                                <label for="contactusername">Name</label>
                                <input type="text" class="form-control" name="name"  id="contactusername" >
                            </div>

                            <input type="hidden" name="id" >

                            <div class="form-group my-4">
                                <label for="contactemail">Email</label>
                                <input type="email" class="form-control" value="" name="email" id="contactemail">
                            </div>
                            <div class="form-group">
                                <label for="contactcomment">Your Message</label>
                                <textarea class="form-control" rows="5" id="contactcomment" name="msg" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger btn-block" name="button">Submit</button>
                        </form>
                    </div>
                </div>
                <!--  //contact right grid -->
            </div>
            <!-- //contact details  -->
        </div>
    </section>
    <!-- //contact -->
    <!-- map -->
   <!--  <div class="map px-2">
        <iframe src="<?=base_url('Assets/User/https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d50680.917988830966!2d-122.29955924858896!3d37.44755989350272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smedical+hospital+in+canada!5e0!3m2!1sen!2sin!4v1535669904592')?>" allowfullscreen></iframe>
    </div> -->
    <!--// map-->
<footer class="py-sm-5">
        <div class="container">
            <div class="row py-5">
                <!-- footer grid1 -->
                <div class="col-lg-3 col-sm-6 fv5-contact">
                    <a href="<?=base_url('User_controller/new_user_complaint')?>"><h2 class="mb-4">Contact Us</h2></a>
                    <!-- <div class="fv3-contact mt-3">
                    
                        <span class="fas fa-home mr-2"></span>
                        <p>90 Street, City, State 34789.</p>
                    </div> -->
                    <div class="fv3-contact mt-3">
                        <span class="fas fa-phone-volume mr-2"></span>
                        <p>+91 123456789</p>
                    </div>
                    <div class="fv3-contact mt-3">
                        <span class="fas fa-envelope-open mr-2"></span>
                        <a href="" class="text-secondary">vaccine@gmail.com</a>
                    </div>
                </div>
                <!-- //footer grid1 -->
               
                <!-- footer grid3 -->
                <div class="col-lg-3  col-sm-6 footv3-left text-lg-center my-lg-0 mt-sm-5 mt-5">
                    <!-- <h3 class="mb-4">Navigation</h3> -->
                    <ul class="list-agileits">
                        
                    </ul>
                </div>
                <!-- //footer grid3 -->
                <!-- footer grid4  -->
            
                <!-- //footer grid4 -->
            </div>
            <div class="cpy-right text-center  pt-3">
                
                <div class="copyrightbottom">
                    <p class="text-secondary">© 2018 Vaccine. All rights reserved | Design by
                        <a href="http://w3layouts.com" class="text-white"> KKK.</a>
                    </p>
                </div>
                <div class="copyrighttop">
                    <ul>
                        <li>
                            <h4>Follow us on:</h4>
                        </li>
                        <li>
                            <a class="facebook" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a class="facebook" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="facebook" href="">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a class="facebook" href="">
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?=base_url('User_controller/login')?>" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">User Email</label>
                            <input type="text" class="form-control" placeholder=" " name="email" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="password" id="password" required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-agile">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-secondary">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right">
                                <a href="#" class="text-secondary">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center dont-do">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter2" name="button" class="text-dark font-weight-bold">
                                Register Now</a>
                                
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
     <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="modal-title text-center text-dark mb-4">REGISTER NOW</h5>
                        <form action="<?=base_url('User_controller/register')?>" method="post">
                            <div class="form-group">
                                <label class="col-form-label">First name</label>

                                <input type="text" class="form-control" name="name" id="validationDefault01" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="validationDefault02" placeholder="" required="">
                            </div>

                             <div class="form-group">
                                <label class="col-form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" id="validationDefault02" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2 col-form-label">Password</label>
                                <input type="password" class="form-control" id="password1" name="pass" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password2" name="confirm_pass" placeholder="" required="">
                            </div>
							<div class="reg-w3l">
								<button type="submit" class="form-control submit mb-4">Register</button>
                           </div>
						   <p class="text-center pb-4">
                                <a href="#" class="text-secondary">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->

    <!-- //footer -->
    <!-- js -->
    <script src="<?=base_url('Assets/User/js/jquery-2.2.3.min.js')?>"></script>
    <!-- //js -->
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
    <script src="<?=base_url('Assets/User/js/move-top.js')?>"></script>
    <script src="<?=base_url('Assets/User/js/easing.js')?>"></script>
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
    <script src="<?=base_url('Assets/User/js/SmoothScroll.min.js')?>"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url('Assets/User/js/bootstrap.js')?>"></script>
</body>
</html>