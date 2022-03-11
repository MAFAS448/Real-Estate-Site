<?php include ("../connection/db.php");?>



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
      <div class="panel-heading" style='background:#000000; color:#fff;'>Create New Admin</div>
      <div class="panel-body">

        <?php

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$username = $_POST['username'];
$pass1 = $_POST['password'];
$pass2 = $_POST['pass2'];
$sec1 = $_POST['q1'];
$sec2 = $_POST['q2'];

if($pass1==$pass2)
      {
        $link = mysqli_connect("localhost", "root", "", "gyr");
    
        
        // Attempt update query execution
        $sql = "INSERT into admin (user_name,user_password,sec1,sec2) values('$username','$pass1','$sec1','$sec2')";
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

		<form action="" method="post">
         
          <div class="form-group">
            <label for="inputName">Username</label>
            <input type="text" class="form-control" id="inputName" placeholder="Username" name="username" value="">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" value="" class="form-control" id="password" placeholder="Password">
          </div>
          <div class="form-group">
          <label for="Password">Enter Password again</label>
          <input type="password" class="form-control" id="Password" placeholder="Password" name="pass2" value="">
         </div>
          <div class="form-group">
          <label for="inputqu1">What was your childhood nickname?</label>
          <input type="text" class="form-control" id="Password" placeholder="secq1" name="q1" value="">
         </div>
        <div class="form-group">
          <label for="inputqu2">What is your favorite movie?</label>
          <input type="text" class="form-control" id="Password" placeholder="secq2" name="q2" value="">
         </div>
        
      
         
          <input class="btn btn-default pull-right" type="submit" name="submit" value="submit"></input>
       
        </form>

	
	   </div>
    </div>
	</div>
    </section>
  </div><!-- row -->   
</div><!-- content container -->
              
        
    
			</div>
		</div>
	</div>
			
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/bootstrapValidator.min.js"></script>

    
</body>
</html>