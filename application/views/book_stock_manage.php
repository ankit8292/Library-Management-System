<?php include('Common/header.php') ?>
   <div class="container banner">
        <div class="inner">
            <div class="login">
                <h2 class="text-center">Book Stock Manage </h2>
                <div>
                <!-- <div class="col-sm-1"></div> -->
                <div class="col-sm-12">
                    <div class="container">
                        <?php include('Common/left_menu.php')?>
                        <div class="col-sm-9">
                            
                            <div class="col-sm-1"></div>
                            <div class="col-sm-4 center ">
                                <p><a href="<?=base_url('authors')?>">Add Author</a> </p>
                                <p><a href="<?=base_url('publishers')?>">Add Publisher</a> </p>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-4">
                                <p><a href="<?=base_url('books')?>">Add Book</a> </p>
                                <p><a href="<?=base_url('books/book_list')?>">Book List</a> </p>
                            </div>
                           
                        </div>
                        
                    </div>
                    </div>  

                   
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>

    <!-- <img src="<?=base_url('tool/img/std_banner.png');?>" alt="Image"> -->

<?php include('Common/footer.php') ?>