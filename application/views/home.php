<?php include('Common/header.php') ?>
    <div class="container banner">
        <div class="inner">
            <div class="login">
                <h2 class="text-center ">Admin Login</h2>
                <div class="container ">
                <div class="col-sm-1"></div>
                <div class="col-sm-9">
                    <form action="<?=base_url('home/login');?>" method="post">
                    <table class="table">
                        <tr>
                            <td colspan=""><b> <font color="white" size="3">Enter Username</font> </b></td>
                            <td colspan=""> <input type="text" name="un" id="un" placeholder="Enter Username" class="form-control"> </td>
                        </tr>
                        <tr>
                            <td><b><font color="white" size="3"> Enter Password</font></b></td>
                            <td> <input type="password" name="ps" id="ps" placeholder="Enter Password" class="form-control"> </td>
                        </tr>
                        <tr> 
                            <td colspan="2"> <input type="checkbox" name="c1"  value="yes"> <b><font color="white" size="3">Remenber Me</font></b> </td>
                        </tr>
                        <tr> 
                            <td colspan="2"> <input type="submit"  name="btn" class="btn btn-primary" value="Login"> </td>
                        </tr>
    
                    </table></form>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <img src="<?=base_url('tool/img/std_banner.png');?>" alt="Image"> -->

<?php include('Common/footer.php') ?>