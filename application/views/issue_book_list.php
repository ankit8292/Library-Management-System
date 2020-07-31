<?php include('Common/header.php') ?>
   <div class="container banner">
        <div class="inner">
            <div class="login">
                <h2 class="text-center">Issue Book List</h2>
                <!-- <div class="col-sm-1"></div> -->
                <div class="col-sm-12">
                    <div class="container">
                        <?php include('Common/left_menu.php')?>
                        <div class="col-sm-7">
                            <table class="table">
                                <tr>
                                    <td><center> <b><font  size="2">ID</font> </b></center></td>
                                    <td><center> <b><font  size="2">Name</font> </b></center></td>
                                    <td><center> <b><font  size="2">Book  Name</font> </b></center></td>
                                    <td><center> <b><font  size="2">Address</font> </b></center></td>
                                    <td><center> <b><font  size="2">E-Mail</font> </b></center></td>
                                    <!-- <td><center> <b><font  size="2">Operation</font> </b></center></td> -->
                                </tr>
                                <?php 
                                foreach($issue_book_list as $list) 
                                { ?>
                                    <tr>
                                        <td><center> <b><font color="white" style="font-size:12px"><?=$list['user_id']?></font></b></center></td>
                                        <td><center> <b><font color="white" style="font-size:12px"><?=$list['name']?></font> </b></center></td>
                                        <td><center> <b><font color="white" style="font-size:10px"><?=$list['book_name']?></font> </b></center></td>
                                        <td><center> <b><font color="white" style="font-size:10px"><?=$list['address']?></font> </b></center></td>
                                        <td><center> <b><font color="white" style="font-size:12px"><?=$list['email']?></font> </b></center></td>
                                        <!-- <td><center> <b><font color="white" size="2">a</font> </b></center></td> -->
                                        <!-- <td><center> <b><a href="<?=base_url('book_issue_submit/sub_book');?>" class="btn btn-primary">Submit Now</a></b></center> </td> -->
                                    </tr> 
                                    <?php 
                                }?>               
                            </table> 
                            
                            
                            

                           
                        </div>
                    </div>
                   

                   
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>



<?php include('Common/footer.php') ?>