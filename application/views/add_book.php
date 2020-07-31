<?php  ?>
<?php include('Common/header.php') ?>
   <div class="container banner">
        <div class="inner">
            <div class="login">
                <h2>Add Book</h2>
                <!-- <div class="col-sm-1"></div> -->
                <div class="col-sm-12">
                    <div class="container">
                        <?php include('Common/left_menu.php')?>
                        <div class="col-sm-7">
                            <?=form_open('books/add_book')?>
                            <table class="table">
                                <tr>
                                    <td><b><font color="white">Author Name</font></b></td>
                                    <td>
                                        <select name="aname" class="form-control" >
                                            <?php foreach($authors as $author) { ?>
                                            <option><?=$author['name']?> </option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td><b><font color="white" >Publisher Name</font> </b> </td>
                                    <td>
                                        <select name="pname" class="form-control" >
                                            <?php foreach($publishers as $publisher) { ?>
                                            <option><?=$publisher['name']?> </option>
                                            <?php }?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><b><font color="white">Book Name</font> </b> </td>
                                    <td colspan="2"><input type="text" name="book_name" placeholder="Enter Book Name" title="Enter Price Name" class="form-control"> </td>
                                </tr> 
                                <tr>
                                    <td colspan="2"><b><font color="white">Price</font> </b> </td>
                                    <td colspan="2"><input type="text" name="price" placeholder="Enter Price Name" title="Enter Price Name" class="form-control"> </td>
                                </tr>   
                                <tr>
                                    <td colspan="4"><input type="submit"  value="Add" class="btn btn-primary"> </td>
                                </tr>               
                            </table> 
                            
                            <?=form_close()?>

                           
                        </div>
                    </div>
                   

                   
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>

 <?php include('Common/footer.php') ?> 