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

$select_ad_table = mysql_query("select * from publish_land ");
$cat_row = mysql_fetch_array($select_ad_table);


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
	<!--header-->
    <div class="container-fluid" style="min-height:100%;">
    	<div class="row">
        	<?php /*include 'index2.php';*/?>
 
 <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12"> 
  <div class='row'> 
		<div class='col-lg-3 col-md-2 col-sm-2 col-xs-12'></div>	
		<!--<div class='col-lg-2 col-md-2 col-sm-2 col-xs-12'>	
			<h4>&nbsp;</h4>
                <a href="cus_land.php"><h5 style="background:#661515; padding:9px; width:80%; color:#fff; text-align:center; border:solid 1px #CCC; border-radius:5px; margin-left:2%;"><i class=""></i>Add</h5></a>
		</div>-->

		
		<div class='col-lg-2 col-md-2 col-sm-2 col-xs-12'>		
				 <h4>&nbsp;</h4>
                <a href="cus_land_delet.php"><h5 style="background:#661515; padding:9px; width:80%; color:#fff; text-align:center; border:solid 1px #CCC; border-radius:5px; margin-left:2%;"><i class=""></i>Delete</h5></a>
              
			
		</div>
	
	</div>
      
        <div class='row'>
			<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
				<div style='border:sloid 1px black'>
					<img style='height:100px;width:100%;'src="images/customer/land/pics/<?php echo  $cat_row['image_name'];?>" width="100%" />
				</div>
			</div>
			<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
				<div style='border:sloid 1px black'>
				 <p class="gr">Contect No <br><b ><?php echo $cat_row['land_contact'];?></b></p>
				</div>
			</div>
			<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
				<div style='border:sloid 1px black'>
					Customer ID<p><?php echo $cat_row['land_id'];?></p>
					Date and time<p><?php echo $cat_row['date'];?></p>
					
				</div>
			</div>
			<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
				<div style='border:sloid 1px black'>
					<a href="customer_land.php?page=customer_land&id=<?php echo $cat_row['land_id']; ?>">Publish</a>
				</div>
			</div>
		
		
		
		</div>
		
		<?php while($row = mysql_fetch_assoc($select_ad_table)) { ?>
        <div class='row'>
			<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
				<div style='border:sloid 1px black'>
					<img style='height:100px;width:100%;'src="images/customer/land/pics/<?php echo  $row['image_name'];?>" width="100%" />
				</div>
			</div>
			<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
				<div style='border:sloid 1px black'>
				 <p class="gr">Contect No <br><b ><?php echo $row['land_contact'];?></b></p>
				</div>
			</div>
			<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
				<div style='border:sloid 1px black'>
					Customer ID<p><?php echo $row['land_id'];?></p>
					Date and time<p><?php echo $row['date'];?></p>
				</div>
			</div>
			<div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
				<div style='border:sloid 1px black'>
					<a href="customer_land.php?page=customer_land&id=<?php echo $row['land_id']; ?>"> Publish</a>
				</div>
			</div>
		
		
		
		</div>
		<?php } ?>
			</div>
			
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/bootstrapValidator.min.js"></script>

    
</body>
</html>