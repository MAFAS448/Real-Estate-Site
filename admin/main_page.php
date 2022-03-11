<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />


<?php include "admin_header.php" ?>

<div style="padding-top:7px; padding-bottom:7px; border-bottom: 5px solid #661515; background:black;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navbar-inverse">
    
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-5 col-md-5 col-sm-3"></div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <a style="color:#fff;" class="btn btn-link  btn-lg" href="update_admin.php">
            <i style="color:#FFF; padding-right:5px;" class="fa fa-user" ></i>Admin</a>
            <span  class="admin_logout"><a href="logout.php"  class="btn btn-link  btn-lg"  style="color:#FFF; "><i style="color:#FFF; padding-right:5px;" class="fa fa-logout" ></i>Logout</a></span>
        </div>	
        
</div>
<style>


</style>

<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12" style="padding:0px; margin:0px;background:#fe8f8f;">
   <div style="padding-bottom:20px; height:100%; background:black;" class="col-lg-12 col-md-9 col-sm-9 col-xs-12 navbar-inverse text-center">
        
    <span style="font-size:100px; display:block; text-align:center; color:#fff; padding:15px 0px; "></span>
    
    <div style="margin:10px 0px; padding-bottom:10px; " class="colorgraph col-lg-12"></div>
    
    <div class="btn-group-vertical col-lg-12 col-md-12 col-sm-12 col-xs-12" style=' margin-bottom:100%;'>
   
    
    <!--	Advertiesmnets	-->
    <p style="color: white">ADMIN</p>

   <!-- <a href="create_admin.php"><h5 style="background:#661515; padding:9px; width:130px; color:#fff; text-align:center; border:solid 1px #CCC; border-radius:5px; margin-left:2%;"><i class=""></i>CREATE NEW ADMIN</h5></a>-->

    <a href="update_admin.php"><h5 style="background:#661515; padding:9px; width:130px; color:#fff; text-align:center; border:solid 1px #CCC; border-radius:5px; margin-left:2%;"><i class=""></i>PASSWORD CHANGE</h5></a>
    <br>
    <!--	Today Expire  Advertiesmnets	-->

    <p style="color: white">ADD PROPERTIES</p>
    
    <a href="land.php"><h5 style="background:#661515; padding:9px; width:130px; color:#fff; text-align:center; border:solid 1px #CCC; border-radius:5px; margin-left:2%;"><i class=""></i>LAND</h5></a>
    <a href="house.php?page=adsList&&adState=4&&offset=0"><h5 style="background:#661515; padding:9px; width:130px; color:#fff; text-align:center; border:solid 1px #CCC; border-radius:5px; margin-left:2%;">HOUSE</h5></a>
    
    <br>

    <!--	Today Expire  Advertiesmnets	-->
    <p style="color: white">CUSTOMER ADDED</p>
    
    <!-- <a class="<?php if($_GET['page'] == 'categories') ?>" href="main2.php?"><h5 style="background:#661515; padding:9px; width:130px; color:#fff; text-align:center; border:solid 1px #CCC; border-radius:5px; margin-left:2%;">CUSTOMER ADDED</h5></a> -->

    <a href="cus_land.php"><h5 style="background:#661515; padding:9px; width:130px; color:#fff; text-align:center; border:solid 1px #CCC; border-radius:5px; margin-left:2%;"><i class=""></i>LAND</h5></a>
    <a href="cus_house.php"><h5 style="background:#661515; padding:9px; width:130px; color:#fff; text-align:center; border:solid 1px #CCC; border-radius:5px; margin-left:2%;">HOUSE</h5></a>
    

 
    
    </div>
   
    
        
	</div>

</div>




