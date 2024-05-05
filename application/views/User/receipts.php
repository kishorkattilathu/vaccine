<?php $this->load->view('User/layout/header.php'); ?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php

	if (!empty($details)) 
	{
		foreach ($details as $det)
	
	
	
	 
?>

<div class="container">
<div class="reciept">
	<div class="row" style="margin-top:10px;">
		<div class="col-md-8">
			
		   <div class="col-md-9 text-right">
			<h4 class="heading"><?=$det->hospital_name?></h4>
			<h5 class="heading"><?=$det->hospital_address?></h5>
			<h6 class="heading"><?=$det->hospital_phone?></h6>
			</div>
		</div>
		<div class="col-md-4">
			
			<div class="form-group">
              <label class="col-md-4 control" >Date :</label>
              <div class="col-md-8">
                <input id="" name="name" type="text" placeholder="<?=$det->date?>" class="form-control">
              </div>
            </div>
		                
		    <div class="form-group">
              <label class="col-md-4 control" >Reciept No. :</label>
              <div class="col-md-8">
                <input id="" name="name" type="text" placeholder="<?=$det->booking_id?>" class="form-control">
              </div>
            </div>
		                
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-md-12">
            <div class="form-group">
              <label class="col-md-3 control" for="">Patient Name :</label>
              <div class="col-md-9">
                <input id="" name="name" type="text" value="<?=$det->user_name?>" class="form-control">
              </div>
            </div>
            <br>

			       <div class="form-group">
              <label class="col-md-3 control" for="">Gender :</label>
              <div class="col-md-9">
                <input id="" name="name" type="text" value="<?=$det->gender?>"  class="form-control">
              </div>
            </div>
            <br>
         </div>
     </div>
	 <div class="row">
		<div class="col-md-6">
			<div class="form-group">
              <label class="col-md-6 control" for="">Vaccine Name :</label>
              <div class="col-md-6" style="padding-left:20px;">
                <input id="" name="name" type="text" value="<?=$det->vacc_name?>" class="form-control" >
              </div>
            </div>
            </div>
			<div class="col-md-6">
			<div class="form-group">
              <label class="col-md-3 control" for="">Timing :</label>
              <div class="col-md-9">
                <input id="" name="name" type="text" value="<?=$det->timing?>" class="form-control">
              </div>
            </div>
            </div>
            </div><br>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
              <label class="col-md-3 control" for="name">Paid Amount :</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" value="<?=$det->vaccine_price?>" class="form-control">
              </div>
            </div>
            </div>
            </div>
			<br/>
			<div class="row">
		
	
            </div>
			<br/>
			<div class="row">
		<div class="col-md-12">
			<div class="form-group">
              <label class="col-md-3 control" for="name">Recieved By :</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" value="<?=$det->hospital_name?>" class="form-control">
              </div>
            </div>
		</div>
		</div>
		<div class="row" style="margin-top:80px;">
		<div class="col-md-9">
		</div>
		<div class="col-md-3">
			<div class="form-group">
              <label class="control" for="name"><u>Authorised Signatury</u></label>
            </div>
		</div>
		</div>
		</div>
	</div>

	<?php
		}
	else
	{
		echo "<center><h2>No Receipts Yet....<h2/></center>";
		}
	?>
</div>
</div>

<script type="text/javascript">
	
	input[type="text"]{
		border-top: none !important;
		border-right: none !important;
		border-left: none !important;
		border-bottom: 1px dotted #2196f3 !important;
		box-shadow: none !important;
		-webkit-box-shadow: none !important;
		-moz-box-shadow: none !important;
		-moz-transition: none !important;
		-webkit-transition: none !important;
	}
	
	.heading{
    color: #2196f3;
}

.control{
padding-top:7px;
}

.reciept{
    border-top: 5px solid #2196f3;
    -webkit-box-shadow: 0px 5px 21px -2px rgba(0,0,0,0.47);
    -moz-box-shadow: 0px 5px 21px -2px rgba(0,0,0,0.47);
    box-shadow: 0px 5px 21px -2px rgba(0,0,0,0.47);
    margin-top: 10px;
	margin-bottom: 10px;
}
</script>


<?php $this->load->view('User/layout/footer.php'); ?>