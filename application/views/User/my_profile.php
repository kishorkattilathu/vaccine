	<?php $this->load->view('User/layout/header'); ?>
	<div class="about">
	<div class="abt-layer">
		<div class="container">
			<div class="about-main">
				<div class="about-right">
					<h3 class="subheading-w3-agile">My Profile</h3>
					<!-- stats -->

					<?php
						foreach ($profile as $pro)
					?>
					<div class="stats">
						<div class="stats_inner">
							<form action="<?=base_url('User_controller/profile_update')?>" method="post">
								<label>Your Name</label>
								<input class="form-control mb-3" type="text" value="<?=$pro->user_name?>"  name="name">

								<label>Email id</label>
								<input class="form-control mb-3" type="email" readonly="" value="<?=$pro->user_email?>" name="email" required="">
								
								<label>Contact No:</label>
								<input class="form-control mb-3" type="text" value="<?=$pro->phone?>" name="phone" required="">

								<label>Password</label>
								<input class="form-control mb-3" type="text" value="<?=$pro->password?>" name="password" required="">

								

								
								<button type="submit" name="button" class="btn btn-agile btn-block w-100">Update Changes</button>
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
