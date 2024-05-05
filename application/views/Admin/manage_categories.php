<?php $this->load->view('Admin/layout/header'); ?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 50px;
  margin-bottom: 100px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Manage Categories</h2>

<table>
		  <tr>
		    <th>Sr. No.</th>
		    <th>Categories Name</th>
		    <th>Categories Image</th>
		    <th>Edit</th>
		    <th>Delete</th>
		   
		  </tr>
		  <?php
		  	$i=1;
		  	foreach ($details as $det) 
		  	{
		  ?>
  				
			  <tr>
				 <td><?=$i;?></td>
				 <td><?=$det->cat_name?></td>
				 <td><img style="height: 70px;width: 70px" src="<?=base_url('Assets/Admin/category/'.$det->cat_image)?>"></td>
				 <td><a class="btn btn-primary" href="<?=base_url('Admin_controller/edit_category/'.$det->cat_id)?>">Edit</a></td>		    
				 <td><a class="btn btn-danger" href="<?=base_url('Admin_controller/delete_category/'.$det->cat_id)?>">Delete</a></td>		    
				 <td></td>		    
			  </tr>

		 <?php
		 	$i++;
			 }
		 ?>
		  			
  
</table>

</body>
</html>

<?php $this->load->view('Admin/layout/footer'); ?>