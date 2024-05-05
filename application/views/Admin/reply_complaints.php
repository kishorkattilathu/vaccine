<?php  $this->load->view('Admin/layout/header'); ?>
				
				<?php
					foreach ($details as $det) 
				?>
					
					<h3>Reply Complaints</h3>
					<br>
	<form method="post" action="<?=base_url('Admin_controller/update_complaints/'.$det->comp_id)?>" enctype="multipart/form-data">
							<label>Customer Name</label>
						<div class="form-group">
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input  class="form-control1" name="name" value="<?=$det->user_name?>" readonly="" type="text">
								</div>
							</div>
						</div>
						<br>
						<br>

						<label>Customer Email</label>
						<div class="form-group">
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input  class="form-control1" name="email" value="<?=$det->user_email?>" readonly="" type="text">
								</div>
							</div>
						</div>
						<br>
						<br>

						<label>Customer Complaint No</label>
						<div class="form-group">
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input  class="form-control1" name="comp_no" value="<?=$det->comp_id?>" readonly="" type="text">
								</div>
							</div>
						</div>
						<br>
						<br>

						<label>Customer Message</label>
						<div class="form-group">
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input  class="form-control1" name="cust_msg" value="<?=$det->message?>" readonly="" type="text">
								</div>
							</div>
						</div>
						<br>
						<br>

						<label>Your Message</label>
						<div class="form-group">
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input  class="form-control1" name="your_msg" value="" required="" type="text">
								</div>
							</div>
						</div>
						<br>
						<br>

						
     					<br>
				     
				      <div class="">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<button name="button" class="btn-success btn">SEND</button>
							</div>
						</div>
					 </div>
    </form>

    <?php $this->load->view('Admin/layout/footer.php')  ?>