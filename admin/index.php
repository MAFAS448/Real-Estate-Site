<?php include("../connection/db.php");
	session_start();

?>


<?php

$login_msg = "";

if(isset($_POST['admin_log'])){
	$username = $_POST['u_name'];
	$password = $_POST['pass'];
	
	if(empty($username) || empty($password)){
		$login_msg = '<p style="color:#F63;">* All Fields Are Require</p>';
		}
	$select_user = mysql_query("select * from admin where user_name='$username' and user_password = '$password'");
	if(mysql_num_rows($select_user)==0){
		$login_msg = '<p style="color:#F63;">* Bad Username Or Password</p>';
		}else{
			
			$user_row = mysql_fetch_array($select_user);
			
			$_SESSION['admn_id'] = $user_row['user_id'];
			$_SESSION['admn_user'] = $user_row['user_name'];
			
			/*header("Location: ".$_GET['page'].".php?page=".$_GET['page']);*/
				header("Location: main.php");
	}	
}

	?>

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/data.css">
		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
  <div class="container">
    <div class="row">
      <section class="col-xs-12 col-md-offset-4 col-md-4">
	  <div class="cat2">
      <div class="panel panel-default"style='    box-shadow: 3px 9px 19px -8px rgba(0,0,0,0.75);'>
      <div class="panel-heading" style='background:black;'><h4 style='color:#fff'><img src="../images/0.png" style="width:40%;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Admin Login</b></h4></div>
      <div class="panel-body">
	  <p><?php echo $login_msg; ?></p>
        <form action="index.php" method="post" id="login">
         
						<div class="form-group">
                        	<div class="col-lg-12"style='margin-top:20px;margin-bottom:15px;'>
                            	<label class="control-label">User Name</label>
                            	<input class="form-control" type="text" name="u_name" placeholder="Enter Your User Name">
                            </div>
                        </div>
                        
                        <div class="form-group">
                        	<div class="col-lg-12"style='margin-bottom:15px;'>
                                <label class="control-label">Password</label>
                                <input class="form-control" type="password" name="pass" placeholder="Enter Your Password">
                            </div>
                            &nbsp&nbsp&nbsp<button type="reset" class="btn btn-default">Clear</button>
                        </div>

						<div  class="form-group" >
							
							<input type="submit" name="admin_log" style='background:black;border:1px black solid;' class="btn btn-success btn-block" value="Log-in"/><br>

							<a href="add_admin.php">
								<input style='background:black;border:1px black solid;' class="btn btn-success btn-block" value=" Forgotten password?"/>
							</a>							
						</div>
        </form>
        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="plugins/jQuery/jquery.validate.min.js"></script>
<script src="plugins/jQuery/validation.js"></script>
      </div>
    </div>
       </div> 
    </section>
  </div><!-- row -->   
</div><!-- content container -->
