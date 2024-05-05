<?php  $this->load->view('Admin/layout/header'); ?>

					
					<h3>Add Category</h3>
					<br>
	<form method="post" action="<?=base_url('Admin_controller/add_category')?>" enctype="multipart/form-data">
							<label>Category Name</label>
						<div class="form-group">
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input id="name" class="form-control1" name="name" value="" type="text" placeholder="Category Name">
								</div>
							</div>
						</div>
						<br>
						<br>

						<label>Category Image</label>
						<div class="form-group">
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
										
									<input id="image" class="form-control1" name="cat_image" value="" type="file">
								</div>
							</div>
						</div>

						
     					<br>
				     
				      <div class="">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<button name="button" class="btn-success btn">Add</button>
							</div>
						</div>
					 </div>
    </form>

    <?php $this->load->view('Admin/layout/footer.php')  ?>