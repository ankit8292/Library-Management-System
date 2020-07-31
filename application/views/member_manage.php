<?php include('Common/header.php') ?>
   <div class="container banner">
        <div class="inner">
            <div class="login">
                <h2>Add Member</h2>
                <!-- <div class="col-sm-1"></div> -->
                <div class="col-sm-12">
                    <div class="container ">
                        <?php include('Common/left_menu.php')?>
                        <div class="col-sm-7">
                            <?=form_open('members/add_member')?>
                            <p><a href="<?=base_url('members/member_list');?>" class="pull-right" style="color:white">Member List</a> </p>
                            
                            <table class="table">
                            <tr>
                                    <td colspan="2"><b><font color="white">Student ID</font> </b> </td>
                                    <td colspan="1"><input type="text" name="id" placeholder="Student ID" class="form-control"> </td>
                                </tr> 

                                <tr>
                                    <td colspan="2"><b><font color="white">Name</font> </b> </td>
                                    <td colspan="1"><input type="text" name="name" placeholder="Name" class="form-control"> </td>
                                </tr> 
                                
                                <tr>
                                    <td colspan="2"><b><font color="white">E-Mail</font> </b> </td>
                                    <td colspan="1"><input type="text" name="email" placeholder="Email" class="form-control"> </td>
                                </tr> 

                                <tr>
                                    <td colspan="2"><b><font color="white">Address</font> </b> </td>
                                    <td colspan="1"><input type="text" name="address" placeholder="Address" class="form-control"> </td>
                                </tr>

                                <tr>
                                    <td colspan="2"><b><font color="white">Mobile No.</font> </b> </td>
                                    <td colspan="1"><input type="text" name="phone_number"  placeholder="Mobile Number" class="form-control"> </td>
                                    
                                </tr> 
                                <tr>
                                    <td colspan="4"><input type="submit" value="Add" class="btn btn-primary"> </td>
                                </tr>               
                            </table> 
                            <?=form_close(); ?>
                           

                           
                        </div>
                    </div>
                   

                   
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>

    <!-- <img src="<?=base_url('tool/img/std_banner.png');?>" alt="Image"> -->

<?php include('Common/footer.php') ?>