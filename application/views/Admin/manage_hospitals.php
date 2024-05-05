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

<h2>Manage Hospitals</h2>

<table>
		  <tr>
		    <th>Sr. No.</th>
		    <th>Name</th>
		    <th>Email</th>
		    <th>Phone</th>
		    <th>Address</th>
		    <th>Hospital Image</th>
		    <th>Hospital License</th>
		    <th>Status</th>
		    <th>Approve</th>
		    <th>Reject</th>
		  </tr>
  				<?php
  					$i=1;
  					foreach ($details as $det) 
  					{
  					

  				?>
						  <tr>
						    <td><?=$i;?></td>
						    <td><?=$det->hospital_name?></td>
						    <td><?=$det->hospital_email?></td>
						    <td><?=$det->hospital_phone?></td>
						    <td><?=$det->hospital_address?></td>
						    <td><img style="height: 70px;width:70px " src="<?=base_url('Assets/Admin/hospitals/'.$det->hospital_image)?>"></td>
						    <td><img style="height: 70px;width:70px " src="<?=base_url('Assets/Admin/license/'.$det->hospital_license)?>"></td>
						    <td><?=$det->hospital_status?></td>
						    <td><a href="<?=base_url('Admin_controller/approve_hospital/'.$det->hospital_id)?>" class="btn btn-primary">Approve</a></td>
						    <td><a href="<?=base_url('Admin_controller/reject_hospital/'.$det->hospital_id)?>" class="btn btn-danger">Reject</a></td>
						    
						  </tr>
		  			<?php
		  			$i++;
			  		}
		  			?>
  
</table>

</body>
</html>

<?php $this->load->view('Admin/layout/footer'); ?>