<?php  $this->load->view('Admin/layout/header'); ?>

					<?php
						foreach ($details as $det)
					?>
					<h3>Edit Category</h3>
					<br>
	<form method="post" action="<?=base_url('Admin_controller/update_category/'.$det->cat_id)?>" enctype="multipart/form-data">
							<label>Category Name</label>
						<div class="form-group">
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input id="name" class="form-control1" name="name" value="<?=$det->cat_name?>" type="text" placeholder="Category Name">
								</div>
							</div>
						</div>
						<br>
						<br>

						<label>Category Old Image</label>
						<div class="form-group">
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
									</span>
										<img style="width: 70px;width: 70px" src="<?=base_url('Assets/Admin/category/'.$det->cat_image)?>">
									<!-- <input id="image" class="form-control1" name="cat_image" value="" type="file"> -->
								</div>
							</div>
						</div>

						<br>
						<br>
						<br>
						<br>
						<br>

						<label>Category New Image</label>
						<div class="form-group">
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input id="cat_image" class="form-control1" name="cat_image"  type="file">
								</div>
							</div>
						</div>

						
     					<br>
				     
				      <div class="">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<button name="button" class="btn-success btn">Update</button>
							</div>
						</div>
					 </div>
    </form>

    <?php $this->load->view('Admin/layout/footer.php')  ?>