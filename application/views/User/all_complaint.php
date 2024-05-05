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
  <h2>Your Complaints</h2>

    <div class="container">
      <div class="row">
          <div class="col-md-12">
            <table>
             
                <tr>
                  <th>Sr No</th>
                  <th>Your Name</th>
                  <th>Your Email</th>
                  <th>Your Complaint No:</th>
                  <th>Your Message</th>
                  <th>Reply Received</th>
                 
                </tr>
                   <?php
                    $i=1;
                    foreach ($details as $det) {
                  ?>
                <tr>
                 

                  <td><?=$i;?></td>
                  <td><?=$det->user_name?></td>
                  <td><?=$det->user_email?></td>
                  <td><?=$det->comp_id?></td>
                  <td><?=$det->message?></td>
                  <td><?=$det->reply?></td>

                 
               
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