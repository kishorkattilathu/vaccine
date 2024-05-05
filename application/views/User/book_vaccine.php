	<?php $this->load->view('User/layout/header'); ?>
	<div class="about">
	<div class="abt-layer">
		<div class="container">
			<div class="about-main">
				<div class="about-right">
					<h3 class="subheading-w3-agile">Book an Appointment</h3>

					<?php
						foreach ($profile as $pro)
						foreach ($vaccine as $vac)
					?>
					<!-- stats -->
					<div class="stats">
						<div class="stats_inner">
							<form action="<?=base_url('User_controller/book_appointment')?>" method="post">
								<label>Vaccine Name</label>
								<input class="form-control mb-3" readonly="" type="text" value="<?=$vac->vac_name?>"  name="vaccine_name">

								<label>Timing</label>
								<input class="form-control mb-3" type="text" readonly="" value="<?=$vac->vac_time?>" name="timing">


								<label>Vaccine Available</label>
								 <input class="form-control mb-3" readonly="" type="text" value="<?=$vac->vac_quantity?>"  name="quantity" >

								<label>Your Gender</label>
								<select class="form-control mb-3" name="gender">
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Other">Other</option>
								</select>

								<label>Contact No:</label>
								<input class="form-control mb-3" type="text" name="phone" required="">

								<label>Email id</label>
								<input class="form-control mb-3" type="text" readonly="" name="user_email" value="<?=$pro->user_email?>">

								<label>Select Date</label>
								<input class="form-control date mb-3" id="datepicker" name="date" placeholder="Select Date"  type="date" required="">

								<label>Vaccine Price</label>
								<input class="form-control mb-3" type="text" readonly="" name="vaccine_price" value="<?=$vac->vac_price?>">

								<input type="hidden" name="hospital_id" value="<?=$vac->hos_id?>">
								<input type="hidden" name="hospital_email" value="<?=$vac->hos_email?>">
								<input type="hidden" name="vaccine_id" value="<?=$vac->vac_id?>">
								<input type="hidden" name="user_id" value="<?=$pro->user_id?>">

								<button type="submit" class="btn btn-agile btn-block w-100">Make An Appointment</button>
							</form>
						</div>
					</div>
					<!-- //stats -->

				</div>
			</div>
			
		</div>
		</div>
	</div>
	<?php $this->load->view('User/layout/footer'); ?>
