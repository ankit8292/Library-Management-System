<?php include('Common/header.php') ?>
   <div class="container banner">
        <div class="inner">
            <div class="login">
                <h2 class="text-center">Member List</h2>
                <!-- <div class="col-sm-1"></div> -->
                <div class="col-sm-12">
                    <div class="container">
                        <?php include('Common/left_menu.php')?>
                        <div class="col-sm-5">
                            <table class="table">
                                <tr>
                                    <td><center> <b><font  size="2">ID</font> </b></center></td>
                                    <td><center> <b><font  size="2">Name</font> </b></center></td>
                                    <td><center> <b><font  size="2">E-Mail</font> </b></center></td>
                                    <td><center> <b><font  size="2">Mobile No</font> </b></center></td>
                                    <td><center> <b><font  size="2">Address</font> </b></center></td>  
                                </tr>
                                <?php
                                $i=1;
                                foreach($members as $member) { ?>
                                <tr>
                                <td><center> <b><font color="white" size="2"><?=$member['id'];?></font></b></center></td>
                                    <td><center> <b><font color="white" size="2"><?=$member['name']?></font> </b></center></td>
                                    <td><center> <b><font color="white" size="2"><?=$member['email']?></font> </b></center></td>
                                    <td><center> <b><font color="white" size="2"><?=$member['phone_number']?></font> </b></center></td>
                                    <td><center> <b><font color="white" size="2"><?=$member['address']?></font> </b></center></td>
                                </tr> 
                                <?php } ?>             
                            </table> 
                            
                            
                            

                           
                        </div>
                    </div>
                   

                   
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>

    <!-- <img src="<?=base_url('tool/img/std_banner.png');?>" alt="Image"> -->

<?php include('Common/footer.php') ?>