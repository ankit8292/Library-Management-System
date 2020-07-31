<?php include('Common/header.php') ?>
   <div class="container banner">
        <div class="inner">
            <div class="login">
                <h2>Add Author</h2>
                <!-- <div class="col-sm-1"></div> -->
                <div class="col-sm-12">
                    <div class="container">
                        <?php include('Common/left_menu.php')?>
                        <div class="col-sm-7">
                            <?=form_open('authors/add_author')?>
                            <table class="table">
                                <tr>
                                    <td><b><font color="white" size="1">Author Name</font> </b> </td>
                                    <td><input type="text" name="aname" placehoder="Enter Author Name" title="Enter Author Name" class="form-control"> </td>
                                    <td><input type="submit" name="sub" value="Add" title="Add Now" class="btn btn-primary"> </td>
                                </tr>
                                <tr>
                                    <td colspan="3"><?php 
                                        $msg=$this->session->flashdata('msg');
                                        if($msg=='1')
                                        {
                                            echo "Author Added Successfully";
                                        }
                                        else if($msg=='0')
                                        {
                                            echo "Author not added";
                                        }
                                        else if($msg=='author_deleted')
                                        {
                                            echo "Author Deleted Successfully";
                                        }
                                        else
                                        {
                                            echo validation_errors();
                                        } 
                                        ?>
                                    </td>
                                </tr>                  
                            </table> 
                            <?=form_close();?>
                            <table class="table">
                                <tr>
                                    <td><center><b><font color="white" size="1">ID</font> </b></center> </td>
                                    <td><center><b><font color="white" size="1">Name</font> </b></center> </td>
                                    <td><center><b><font color="white" size="1">Operation</font> </b></center> </td>
                                </tr>
                                <?php 
                                $i=1; 
                                foreach($authors as $author)
                                {
                                ?><tr>
                                <td><center><b><?=$i++; ?></b></center> </td>
                                <td><center><b><?=$author['name']; ?></b></center> </td>
                                <td><center><a href="<?= base_url('authors/delete_author/'.$author['id']);?>" class="btn btn-primary">Delete</a> </center> </td>
                                <td><center><a href="<?= base_url('home/edit_author/'.$author['id']);?>" class="btn btn-primary">Update</a> </center> </td>
                                </tr> <?php 
                                }
                                ?>                 
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