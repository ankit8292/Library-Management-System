<?php include('Common/header.php') ?>
   <div class="container banner">
        <div class="inner">
            <div class="login">
                <h2>Book List</h2>
                <!-- <div class="col-sm-1"></div> -->
                <div class="col-sm-12">
                    <div class="container">
                        <?php include('Common/left_menu.php')?>
                        <div class="col-sm-6">
                            <p class="pull-right"> <a href="<?=base_url('book_issue_submit/issue_book_list') ?>" style="color:white">Issue Book List</a></p>
                            <?= form_open('book_issue_submit/filter_member'); ?>
                            <table class="table">
                                <tr>
                                    <td><b><font color="white" size="2">Enter Member ID</font> </td>
                                    <td><input type="text" name="id" placeholder="Enter Member ID" title="Enter Member Name" class="form-control"> </td>
                                    <td><input type="submit" name="sub" value="Search" title="Search Now" class="btn btn-primary"> </td>
                                </tr> 
                                               
                            </table> 
                            <?=form_close();?>
                            <?php 
                            if(isset($results['id']))
                            {?>
                            <?=form_open('book_issue_submit/issue_book')?>
                                <table class="table">
                                    <tr>
                                        <td><b><font color="white" size="2">ID</font> </td>
                                        <td><input type="text" name="user_id" value="<?=$results['id']; ?>" class="form-control"> </td>
                                        <td><b><font color="white" size="2">Name</font> </td>
                                        <td><input type="text" name="name" value="<?=$results['name']; ?>"  class="form-control"> </td>
                                    </tr> 

                                    <tr>
                                        <td><b><font color="white" size="2">Address</font> </td>
                                        <td><input type="text" name="address" value="<?=$results['address']; ?>" class="form-control"> </td>
                                        <td><b><font color="white" size="2">E-Mail</font> </td>
                                        <td><input type="text" name="email" value="<?=$results['email']; ?>"  class="form-control"> </td>
                                    </tr> 

                                    <tr>
                                        <td><b><font color="white" size="2">Select Book</font> </td>
                                        <td>
                                            
                                            <select name="book_name" id="" class="form-control">
                                            <?php foreach($book_list as $book)
                                            { ?>
                                                <option><?=$book['book_name']?></option>
                                             <?php 
                                            } ?>  
                                            </select>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td colspan="4"><input type="submit"  value="Book Now" class="btn btn-primary"> </td>
                                    </tr>
                                                
                                </table> 
                                <?=form_close(); ?>
                                <?php  
                            }
                            else 
                            {
                                //echo "User not found";
                            }
                            ?>
                            

                           
                        </div>
                    </div>
                   

                   
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>

    <!-- <img src="<?=base_url('tool/img/std_banner.png');?>" alt="Image"> -->

<?php include('Common/footer.php') ?>