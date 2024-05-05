<?php $this->load->view('Hospital/layout/header.php'); ?>
<br>
<br>
<br>
<br>
<br>
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

<center><h2>Manage Vaccine</h2></center>
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<table>
		  <tr>
		    <th>Sr. No.</th>
		    <th>Categories</th>
		    <th>Vaccine Name</th>
		    <th>Vaccine Timing</th>
		    <th>Vaccine Quantity</th>
		    <th>Vaccine Price</th>
		    <th>Vaccine Image</th>
		    <th>Edit</th>
		    <th>Delete</th>
		   
		  </tr>
		 	<?php
		 	   $i=1;
		 			foreach ($details as $det) 
		 			 
		 		{
		 	?>
  				
			  <tr class="text-center">
				 <td><?=$i;?></td>
				 <td><?=$det->cat_name?></td>
				 <td><?=$det->vac_name?></td>
				 <td><?=$det->vac_time?></td>
				 <td><?=$det->vac_quantity?></td>
				 <td><?=$det->vac_price?></td>
				 <td><img style="height: 100px;width: 100px" src="<?=base_url('Assets/Hospital/vaccines/'.$det->vac_image)?>"></td>
				 <td>
				  <a class="btn btn-success" href="<?=base_url('Hospital_controller/edit_vaccine/'.$det->vac_id)?>">Edit</a></td>
				 <td>
				  <a class="btn btn-danger" href="<?=base_url('Hospital_controller/delete_vaccine/'.$det->vac_id)?>">Delete</a></td>
						    
			  </tr>
			  <?php
			  	$i++;
				}
			  ?>
	
  
</table>
		</div>
		
	</div>
	
</div>


</body>
</html>

<?php $this->load->view('Hospital/layout/footer.php'); ?>
