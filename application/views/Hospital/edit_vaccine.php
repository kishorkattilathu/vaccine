<?php $this->load->view('Hospital/layout/header');?>

        <div class="about">
    <div class="abt-layer">
        <div class="container offset mb-4">
            <div class="about-main">
                <div class="about-right">
                    <h3 class="subheading-w3-agile text-center">Edit Vaccine</h3>
                    <!-- stats -->
                    <div class="stats">
                        <div class="stats_inner">
                           
                           <?php
                                    foreach ($data as $dat)
                                ?>
                            <form action="<?=base_url('Hospital_controller/edit_new_vaccine')?>" method="post" enctype="multipart/form-data" >
                                
                                <label><strong>Category Name</strong></label>
                                <input type="hidden" name="vac_id" value="<?=$dat->vac_id?>">
                                <select class="form-control mb-3" name="cat_id">
                                    <option value="<?=$dat->cat_id?>"><?=$dat->cat_name?></option>
                                     <?php
                                        foreach ($categories as $cat) {
                                        
                                     ?>
                                    <option value="<?=$cat->cat_id?>"><?=$cat->cat_name?></option>
                                            <?php
                                                }
                                            ?>
                                </select>
                                <!-- <input type="hidden" value="<?=$det->hospital_id?>" name="hos_id">
                                <input type="hidden" value="<?=$det->hospital_email?>" name="hos_email">
 -->
                                
                                <label><strong>Vaccine Name</strong></label>
                                <input class="form-control mb-3" type="text" value="<?=$dat->vac_name?>" name="name" required="">

                                <label><strong>Vaccine Timing</strong></label>
                                <select class="form-control mb-3" type="text" name="time" required="">
                                    <option value="<?=$dat->vac_time?>"><?=$dat->vac_time?></option>
                                    <option value="09:00am-12:00pm">09:00am-12:00pm</option>
                                    <option value="12:00pm-03:00pm">12:00pm-03:00pm</option>
                                    <option value="03:00pm-06:00pm">03:00pm-06:00pm</option>
                                </select>
                               
                            
                                <label><strong>Vaccine Qty.</strong></label>
                                <input class="form-control mb-3" type="text" name="quantity" value="<?=$dat->vac_quantity?>" required="">

                                <label><strong>Vaccine Price</strong></label>
                                <input class="form-control mb-3" type="text" name="price" value="<?=$dat->vac_price?>" required="">

                                <label><strong>Vaccine Old Image</strong></label>
                                <br>
                                <br>
                                <img style="height: 150px;width: 150px" src="<?=base_url('Assets/Hospital/vaccines/'.$dat->vac_image)?>">
                                <br>
                                <br>

                                <label><strong>Vaccine New Image</strong></label>
                                <input class="form-control mb-3" type="file" name="vaccine_image">

                                <button type="submit" name="button" class="btn btn-agile btn-block w-100">Update</button><br>
                                 
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