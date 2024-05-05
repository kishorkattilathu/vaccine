<?php $this->load->view('User/layout/header'); ?>
 <!-- main image slider container -->
        <div class="inner-banner">
         </div> 
    <!-- end of main image slider container -->
	<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=base_url('User_controller/home')?>">Home</a>
            </li>
           <?php
           	foreach ($details as $det)
           ?>

            <li class="breadcrumb-item active" aria-current="page"><?=$det->hospital_name?></li>
        </ol>
    </nav>
	 <!-- services -->
    <div class="agileits-about py-lg-5">
			<div class="container py-4">
			 <div class="text-center wthree-title pb-sm-5 pb-3">
				<h3 class="w3l-sub"><?=$det->hospital_name?></h3>
				<h4 class="sub-title py-3">Vaccines Available here....</h4>
			</div>
               
            <div class="agileits-about-row row  text-center pt-lg-5">
                 <?php
                    foreach ($vaccines as $det) 
                    {
                ?>
                <div class="col-lg-4 col-sm-6 agileits-about-grids">
                    <div class="p-md-5 p-sm-3">
                      <a href="<?=base_url('User_controller/book_vaccine/'.$det->vac_id.'/'.$det->hos_id)?>"> <img style="height: 209px;width: 194px" src="<?=base_url('Assets/Hospital/vaccines/'.$det->vac_image)?>"></a>
                        <h4 class="mt-2 mb-3"><?=$det->vac_name?></h4>
                    </div>
                </div>
                

                <?php
                    
                    }
                ?>
            </div>


        </div>
    </div>
    <!-- //services -->
<!-- case studies -->
	<section class="case_w3ls  py-lg-5">
		<div class="container py-5">
			<div class="text-center wthree-title pb-sm-5 pb-3">
				<h3 class="w3l-sub">Medical Services</h4>
				<h4 class="sub-title py-3">Donec consequat sapien ut leo cursus rhoncus.</h5>
			</div>
			<!-- case studies row -->
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="img1 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls">
							<h4>Emergency Help</h4>
							<span> </span>
							<p>Sed porttitor lectus nibh ras ultricies ligula sed magna dictum porta. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 my-md-0 mt-4">
					<div class="img1 img2 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls">
							<h4>Heart Surgery</h4>
							<span> </span>
							<p>Sed porttitor lectus nibh ras ultricies ligula sed magna dictum porta. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 my-lg-0 mt-4">
					<div class="img1 img3 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls">
							<h4>Emergency Care</h4>
							<span> </span>
							<p>Sed porttitor lectus nibh ras ultricies ligula sed magna dictum porta. </p>
						</div>
					</div>
				</div>
			</div>
			<!-- //case studies row -->
		</div>
	</section>
	<!-- //case studies -->
    <?php $this->load->view('User/layout/footer'); ?>
