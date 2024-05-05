<?php $this->load->view('User/layout/header'); ?>
<br>
<br>
<br>

	   <div class="about">
		    <div class="abt-layer">
		        <div class="container">
		            <div class="about-main">
		                <div class="about-right">
		                    <h3 class="subheading-w3-agile">Make Payment</h3>

		                    <?php 
		                    	foreach ($details as $det)
		                    ?>
		                    <!-- stats -->
		                    <div class="stats">
		                        <div class="stats_inner">
		                            <form action="<?=base_url('User_controller/payment/'.$det->booking_id)?>" method="post">
		                            	<input type="hidden" name="booking_id" value="<?=$det->booking_id?>">
		                            	<input type="hidden" name="quantity" value="<?=$det->quantity?>">
		                            	<input type="hidden" name="user_id" value="<?=$det->user_id?>">
		                            	<input type="hidden" name="user_email" value="<?=$det->user_email?>">
		                            	<input type="hidden" name="hosp_id" value="<?=$det->hosp_id?>">
		                            	<input type="hidden" name="vacc_id" value="<?=$det->vacc_id?>">

		                                <label>Your Name On Card</label>
		                                 <input class="form-control mb-3" type="text" name="name" required="">

		                               	<label>Card No:</label>
		                                <input class="form-control mb-3" type="text" name="card_no" required="">	

		                                <label>CVV No: </label>
		                                <input class="form-control mb-3" type="text"  name="cvv" required="">

		                                <label>Amount</label>
		                                <input class="form-control mb-3" type="price" value="<?=$det->vaccine_price?>"  name="amount" readonly>

		                                

		                                <label>Expiration Month</label>
		                                <select name="expiry_month" required="">
		                                	<option>Jan</option>
		                                	<option>Feb</option>
		                                	<option>Mar</option>
		                                	<option>Apr</option>
		                                	<option>May</option>
		                                	<option>June</option>
		                                	<option>July</option>
		                                	<option>Aug</option>
		                                	<option>Sept</option>
		                                	<option>Oct</option>
		                                	<option>Nov</option>
		                                	<option>Dec</option>
		                                </select>
		                                <br>
		                                <br>
		                                <label>Expiration Year</label>
		                                <input class="form-control date mb-3"  name="expiry_year" placeholder="Expiry Year"  type="text" required="">
		                                <br>
		                                
		                                <button type="submit" class="btn btn-agile btn-block w-100">Pay</button>
		                            </form>
		                        </div>
		                    </div>
		                    <!-- //stats -->

		                </div>
		            </div>
		            
		        </div>
		        </div>
    </div>

<?php $this->load->view('User/layout/footer'); ?>