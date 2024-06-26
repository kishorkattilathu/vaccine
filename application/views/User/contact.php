<?php  $this->load->view('User/layout/header.php'); ?>
 <!-- main image slider container -->
        <div class="inner-banner">
         </div> 
    <!-- end of main image slider container -->
	 <!-- breadcrumbs -->
   <!--  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav> -->
    <!-- //breadcrumbs -->
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
                       <!--  <div class="row py-3 wthree-cicon">
                            <span class="fas fa-map-marker mr-3"></span>
                            <h6>+456 123 7890</h6>
                        </div> -->
                    </div>
                </div>
                <!-- //contact left grid -->
                <!-- contact right grid -->

                <?php
                    foreach ($details as $det)
                ?>
                <div class="col-lg-6 wthree-form-left mt-lg-0 mt-3">
                    <!-- contact form grid -->
                    <div class="contact-top1">
                        <h5 class="my-3">send us a message</h5>
                        <form action="<?=base_url('User_controller/complaint')?>" method="post"  class="f-color pt-3">
                            <div class="form-group">
                                <label for="contactusername">Name</label>
                                <input type="text" class="form-control" name="name" value="<?=$det->user_name?>" id="contactusername" readonly >
                            </div>

                            <input type="hidden" name="id" value="<?=$det->user_id?>">

                            <div class="form-group my-4">
                                <label for="contactemail">Email</label>
                                <input type="email" class="form-control" value="<?=$det->user_email?>" name="email" id="contactemail" readonly>
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

<!-- footer -->
	<?php $this->load->view('User/layout/footer.php'); ?>