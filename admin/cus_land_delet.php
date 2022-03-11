<?php include("../connection/db.php");?>

<?php 
        session_start();
        if (!isset($_SESSION['admn_user'])) {
            header("location: index.php");
        }
    ?>
<?php

$result='SELECT * FROM districts';
$page_set1=mysql_query( $result);
$result2='SELECT * FROM districts2';
$page_set2=mysql_query( $result2);


?>


<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>

    <link rel="shortcut icon" href="../images/favicon_new.jpg">
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/data.css">
		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
      

</head>
<?php include "main_page.php" ?>
<body style="background:#f8f8f8;font-family: Calibri;">
	
    <div class="container-fluid" style="min-height:100%;">
    	<div class="row">
        
 
 <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12"> 
   <div class='row'> 
		<div class='col-lg-3 col-md-2 col-sm-2 col-xs-12'></div>	
		<div class='col-lg-2 col-md-2 col-sm-2 col-xs-12'>	
			<h4>&nbsp;</h4>
                <a href="cus_land.php"><h5 style="background:#661515; padding:9px; width:80%; color:#fff; text-align:center; border:solid 1px #CCC; border-radius:5px; margin-left:2%;"><i class=""></i>Add</h5></a>
		</div>

		
		<div class='col-lg-2 col-md-2 col-sm-2 col-xs-12'>		
				 <h4>&nbsp;</h4>
                <a href="cus_land_delet.php"><h5 style="background:#661515; padding:9px; width:80%; color:#fff; text-align:center; border:solid 1px #CCC; border-radius:5px; margin-left:2%;"><i class=""></i>Delete</h5></a>
              
			
		</div>
	
	</div>
                <div class="container">
    <div class="row">
      <section class="col-xs-12 col-md-offset-2 col-md-7">
	  <div class="cat1">
      <div class="panel panel-default">
      <div class="panel-heading" style='background:#661515;color:#fff;'>Delete Land</div>
      <div class="panel-body">
	   
	<form action="" method ="POST" enctype="multipart/form-data">
		
		
		
	    <div class="form-group">
	        <label for="title">Customer ID</label>
	        <input type="text" class="form-control" id="title" placeholder="Land ID" name="land_id" value="">
	    </div>
			    
		
	    <a class="btn btn-default" role="button" >Back</a>
	    <input class="btn btn-success pull-right" type="submit" name="submit" value="Delete">
	   

		</form>
		<?php
		if(isset($_POST['submit']))
		{
			$land_id=$_POST['land_id'];
			/*if($con=mysqli_connect("vteccreationscom.ipagemysql.com","gyr1","Gyr@1","gyr"))*/
			$link = mysqli_connect("localhost", "root", "", "gyr");
		
			// Attempt delete query execution
			$sql = "DELETE FROM publish_land WHERE land_id='$land_id'";
			if(mysqli_query($link, $sql)){
				echo "<h2 style='color:green;'>Land Deleted.... </h2>";
			} else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}
		}
		?>
	   </div>
    </div>
	</div>
    </section>
  </div>
</div>
              
        
    
			</div>
			
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/bootstrapValidator.min.js"></script>

    
</body>
</html>