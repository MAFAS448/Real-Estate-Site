<?php include("../connection/db.php");?>
<?php 
        session_start();
        if (!isset($_SESSION['admn_user'])) {
            header("location: index.php");
        }
    ?>
<?php


$select_ad_table = mysql_query("select * from admin");
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
   
     <div class="container">
    <div class="row">
      <section class="col-xs-12 col-md-offset-2 col-md-7">
	  <div class="cat1">
      <div class="panel panel-default">
      <div class="panel-heading" style='background:#000000; color:#fff;'>Update Admin Password</div>
      <div class="panel-body">




	<form action="" method ="POST" enctype="multipart/form-data">
	
	
		
		
	    <div class="form-group">
	        <label for="title">Name</label>
	        <input type="text" class="form-control" id="title" placeholder="house tilte" name="title" value="<?php echo  $cat_row['user_name']; ?>"></input>
	    </div>
		<div class="form-group">
	        <label for="Password">Password</label>
	        <input type="password" class="form-control" id="Password" placeholder="Password" name="pass1" value="">
	    </div>
		<div class="form-group">
	        <label for="Password">Enter Password again</label>
	        <input type="password" class="form-control" id="Password" placeholder="Password" name="pass2" value="">
	    </div>
		
		<a class="btn btn-default" role="button" >Back</a>
	    <input class="btn btn-success pull-right" type="submit" name="submit" value="submit">	    
	
		
		</form>

		<?php
		if(isset($_POST['submit']))
		{
			/*if($con=mysqli_connect("vteccreationscom.ipagemysql.com","gyr1","Gyr@1","gyr"))*
			if($con=mysqli_connect('localhost','root','','gyr'))
			{*/
				$title = $_POST['title'];
				$pass1 = $_POST['pass1'];
				$pass2 = $_POST['pass2'];
			if($pass1==$pass2)
			{
				$link = mysqli_connect("localhost", "root", "", "gyr");
			 
				
				// Attempt update query execution
				$sql = "UPDATE admin SET user_name='$title',user_password='$pass1' WHERE user_id = '1'";
				if(mysqli_query($link, $sql)){
					echo "<h3 style='color:green;'>Records were updated successfully.</h3>";
				} else {
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
			}
			else
			{
				echo '<h3 style="color:red;">password not match</h3>';
			}
			
			
			 
		}
		
		
		
		?>
	   </div>
    </div>
	</div>
    </section>
  </div><!-- row -->   
</div><!-- content container -->
              
        
    
			</div>
			
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/bootstrapValidator.min.js"></script>

    
</body>
</html>