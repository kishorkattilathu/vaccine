<?php $this->load->view('Hospital/layout/header');?>

        <div class="about">
    <div class="abt-layer">
        <div class="container offset mb-4">
            <div class="about-main">
                <div class="about-right">
                    <h3 class="subheading-w3-agile text-center">Your Profile</h3>
                    <!-- stats -->
                    <div class="stats">
                        <div class="stats_inner">
                            <?php
                                foreach ($details as $det) 
                            ?>
                            <form action="<?=base_url('Hospital_controller/profile_update')?>" method="POST" enctype="multipart/form-data" meth >

                                <label><strong>Hospital Name</strong></label>
                                <input class="form-control mb-3" type="text" value="<?=$det->hospital_name?>" placeholder="E-mail" name="name" required="">
                               
                               <label><strong>Email</strong></label>
                                <input class="form-control mb-3" type="email" value="<?=$det->hospital_email?>" placeholder="E-mail" name="email" readonly="">

                                <label><strong>Hospital Phone No:</strong></label>
                                <input class="form-control mb-3" type="text" placeholder="Phone No:" value="<?=$det->hospital_phone?>" name="phone" required="">

                                <label><strong>Address</strong></label>
                                <input class="form-control mb-3" type="text" value="<?=$det->hospital_address?>" placeholder="address" name="address" required="">

                                <label><strong>Hospital Current Image</strong></label>
                                <img style="height: 120px;width: 120px" src=<?=base_url('Assets/Admin/hospitals/'.$det->hospital_image)?>>

                                <br>
                                <br>
                                <br>


                                <label><strong>New Image</strong></label>
                                <input class="form-control mb-3" type="file" name="hospital_image">

                                 <label><strong>License Current Image</strong></label>
                                   <img style="height: 120px;width: 120px" src=<?=base_url('Assets/Admin/license/'.$det->hospital_license)?>>
                                     <br>
                                     <br>
                                     <br>


                                 <label><strong>New License Image</strong></label>
                                <input class="form-control mb-3" type="file" name="hospital_license">

                                <label><strong>Password</strong></label>
                                <input class="form-control mb-3" id="password" name="password" value="<?=$det->hospital_password?>"  type="text" required="">

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