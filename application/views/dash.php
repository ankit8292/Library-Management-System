<?php include('Common/header.php') ?>
   <div class="container banner">
        <div class="inner">
            <div class="login">
                <h2 class="text-center">Admin Home</h2>
                <div class="container">
                <!-- <div class="col-sm-1"></div> -->
                <div class="col-sm-12 pt-2">
                    <?php include('Common/left_menu.php')?>
                    <div class="col-sm-6"></div>
                    <div><a style="text-decoration: none; color:white" type="btn btn-primary"  href="<?php echo base_url(); ?>home/logout">Logout</a></div>  
                </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>

    <!-- <img src="<?=base_url('tool/img/std_banner.png');?>" alt="Image"> -->

<?php include('Common/footer.php') ?>