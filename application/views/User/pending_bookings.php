<?php $this->load->view('User/layout/header'); ?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 50px;
  margin-top: 30px;
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
<br>
<br>
<br>


<center>
  <h2>Your Pending Bookings</h2>

    <div class="container">
      <div class="row">
          <div class="col-md-12">
            <table>
                <tr>
                  <th>Sr No</th>
                  <th>Vaccine Name</th>
                  <th>Your Email</th>
                  <th>Your Phone No:</th>
                  <th>Booking Date</th>
                  <th>Vaccine Price</th>
                  <th>Booking Status</th>
                  <th>Payment Status</th>
                  <th>Cancel</th>
                </tr>
                <?php
                  $i=1;
                  foreach ($details as $det) 
                  {
                  
                ?>
                <tr>
                  <td><?=$i;?></td>
                  <td><?=$det->vacc_name;?></td>
                  <td><?=$det->user_email;?></td>
                  <td><?=$det->phone;?></td>
                  <td><?=$det->date;?></td>
                  <td><?=$det->vaccine_price;?></td>
                  <td><?=$det->status;?></td>
                  <td><?=$det->payment_status;?></td>
                  <td><a class="btn btn-danger" href="<?=base_url('User_controller/delete_bookings/'.$det->booking_id)?>">Cancel</a></td>
                  
                  
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
</center>

<?php $this->load->view('User/layout/footer'); ?>