<?php $this->load->view('Hospital/layout/header');?>

        <div class="about">
    <div class="abt-layer">
        <div class="container offset mb-4">
            <div class="about-main">
                <div class="about-right">
                    <h3 class="subheading-w3-agile text-center">Add Vaccine</h3>
                    <!-- stats -->
                    <div class="stats">
                        <div class="stats_inner">
                            <?php 
                                foreach ($details as $det) 
                             ?>
                           
                            <form action="<?=base_url('Hospital_controller/new_vaccine')?>" method="post" enctype="multipart/form-data" >
                                <label><strong>Vaccine Categories</strong></label>
                                <select class="form-control mb-3" name="cat_id">
                                     <?php 
                                        foreach ($categories as $cat) 
                                        {
                                     ?>
                                    <option value="<?=$cat->cat_id?>"><?=$cat->cat_name?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                <input type="hidden" value="<?=$det->hospital_id?>" name="hos_id">
                                <input type="hidden" value="<?=$det->hospital_email?>" name="hos_email">

                                
                                <label><strong>Vaccine Name</strong></label>
                                <input class="form-control mb-3" type="text" name="name" required="">

                                <label><strong>Vaccine Timing</strong></label>
                                <select class="form-control mb-3" type="text" name="time" required="">
                                    <option value="09:00am-12:00pm">09:00am-12:00pm</option>
                                    <option value="12:00pm-03:00pm">12:00pm-03:00pm</option>
                                    <option value="03:00pm-06:00pm">03:00pm-06:00pm</option>
                                </select>
                               
                            
                                <label><strong>Vaccine Qty.</strong></label>
                                <input class="form-control mb-3" type="text" name="quantity" required="">

                                <label><strong>Vaccine Price</strong></label>
                                <input class="form-control mb-3" type="text" name="price" required="">
                            
                            
                                <label><strong>Vaccine Image</strong></label>
                                <input class="form-control mb-3" type="file" name="vaccine_image" required="">

                                <button type="submit" name="button" class="btn btn-agile btn-block w-100">Add</button><br>
                                 
                            </form>
                        </div>
                    </div>
                    <!-- //stats -->

                </div>
            </div>
            
        </div>
        </div>
    </div>




<?php $this->load->view('Hospital/layout/footer');?>