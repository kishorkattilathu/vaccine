<?php $this->load->view('Admin/layout/header');?>

  

<h3>ADD HOSPITALS</h3>
			
		<form method="post" action="<?=base_url('Admin_controller/add_hospital_details')?>" enctype="multipart/form-data">
			
						<div class="form-group">
							<div class="col-md-8">
							<label><h6>Hospital Name</h6></label>

								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input id="hospital_name" class="form-control1" required="" name="hospital_name" type="text" placeholder="Hospital Name">
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
									<input id="hospital_email" class="form-control1" required="" name="hospital_email" type="text" placeholder="Hospital Email">
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
									<input id="hospital_phone" class="form-control1" required="" name="hospital_phone" type="text" placeholder="Phone No:">
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
									<input id="hospital_address" class="form-control1" required="" name="hospital_address" type="text" placeholder="Hospital Address">
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
									<input id="hospital_image" class="form-control1" required="" name="hospital_image" type="file" placeholder="Hospital Image">
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
									<input id="hospital_license" class="form-control1" required="" name="hospital_license" type="file">
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
				<button name="button" class="btn-success btn">ADD</button>
				<button class="btn-default btn">Cancel</button>
			</div>
		</div>
	 </div>
    </form>
<?php $this->load->view('Admin/layout/footer');?>