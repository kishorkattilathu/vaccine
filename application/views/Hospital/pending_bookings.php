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

<center><h2>Approve Bookings</h2></center>
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<table>
		  <tr>
		    <th>Sr. No.</th>
		    <th>User Name</th>
		    <th>Vaccine Name</th>
		    <th>Vaccine Quantity</th>
		    <th>Gender</th>
		    <th>Phone No:</th>
		    <th>Date</th>
		    <th>Approve</th>
		    <th>Reject</th>
		   
		  </tr>
		 	<?php
		 		$i=1;
		 		foreach ($details as $det) {
		 		
		 	?>
  				
			  <tr class="text-center">
				 <td><?=$i;?></td>
				 <td><?=$det->user_name?></td>
				 <td><?=$det->vacc_name?></td>
				 <td><?=$det->quantity?></td>
				 <td><?=$det->gender?></td>
				 <td><?=$det->phone?></td>
				 <td><?=$det->date?></td>
				 <td><a class="btn btn-success" href="<?=base_url('Hospital_controller/approve_user/'.$det->booking_id)?>">Approve</a></td>
				 <td><a class="btn btn-danger" href="<?=base_url('Hospital_controller/reject_user/'.$det->booking_id)?>">Reject</a></td>
						    
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
