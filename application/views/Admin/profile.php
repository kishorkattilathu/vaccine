<?php $this->load->view('Admin/layout/header');?>

   <!--  <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
				<div class="panel-body no-padding">
					<table class="table table-striped">
						<thead>
							<tr class="warning">
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>
				</div>
	</div> -->

<h3>YOUR PROFILE</h3>
			<?php
				foreach ($profile as $pro) 
				
			?>
			<br>
			<br>

		<form method="post" action="<?=base_url('Admin_controller/profile_update/'.$pro->admin_id)?>">
			
			<div class="form-group">
							<div class="col-md-8">
									<label>Your Name</label>

								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input id="name" class="form-control1" name="name" value="<?=$pro->admin_name?>" type="text" placeholder="Your Name">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8">
									<label>Your Email</label>

								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input id="email" class="form-control1" value="<?=$pro->admin_email?>" name="email" type="text" readonly="" placeholder="Email Address">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8">
									<label>Your Phone No:</label>
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input id="phone" class="form-control1" name="phone" type="text" value="<?=$pro->admin_phone?>" placeholder="Phone No:">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8">
									<label>Your Password</label>

								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="text" class="form-control1" name="password" value="<?=$pro->admin_password?>" placeholder="Password">
								</div>
							</div>
						</div>

     
     
      <div class="">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button name="button" class="btn-success btn">Update</button>
				<button class="btn-default btn">Cancel</button>
			</div>
		</div>
	 </div>
    </form>
<?php $this->load->view('Admin/layout/footer');?>