<?php include ("../connection/db.php");

 session_start();

?>
<?php
/*
$login_msg = "";

if(isset($_POST['admin_log'])){
  $sol1 = $_POST['q1'];
  $sol2 = $_POST['q2'];
  
  if(empty($sol1) || empty($sol2)){
    $login_msg = '<p style="color:#F63;">* All Fields Are Require</p>';
    }
  else{
    $select_user = mysql_query("select * from admin where sec1='$sol1' and sec2 = '$sol2'");

  $res = mysql_fetch_array($select_user);

  $ans1 = $res['sec1'];
  $ans2 = $res['sec2'];

  if ($ans1 == $sol1 && $ans2 == $sol2) {
    header('update_admin.php');
  }
  else{
    echo "Your answers are wrong";
  }
  }

  
}
*/
$con=new mysqli("localhost","root","","gyr");
	//Server name,User Name,Password,Database Name
if($con->connect_error)
{
	echo $con->connect_error;
	die("Sorry Database Connection Faild");
}

					if(isset($_POST["admin_log"]))
									{
										$sol1=$_POST["q1"];
										$sol2=$_POST["q2"];
										
										if($sol1!="" && $sol2!="")
										{
											$sql="select * from admin where sec1='$sol1' AND sec2 = '$sol2'";
												$resulta=$con->query($sql);
												if($rowa=$resulta->fetch_array())
													{
														
														$_SESSION['admn_user'] = $sql['sec1'];
														header("location:update_admin.php");

													}	
										
													else
													{
														echo"<p> Invalid Question and Answer Please select correct Question......</p>";
													}
										}
									}
										else
										{
											echo"<p>Please Enter All The Details</p>";
										}
									
									

  ?>


<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/data.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  <div class="container">
    <div class="row">
      <section class="col-xs-10 col-md-offset-3 col-md-5">
    <div class="cat2">
     
      <div class="panel-heading" style='background:black;'><h4 style='color:#fff'><img src="../images/logo1.png" style="width:50%;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Submit Your Answer</b></h4></div>
      <div class="panel-body">

        <form action="add_admin.php" method="post" id="login">
         
            <div class="form-group">

            <div class="form-group">
          <label for="inputqu1">What was your childhood nickname?</label>
          <input type="text" class="form-control" id="Password" placeholder="secq1" name="q1" value="">
         </div>
        <div class="form-group">
          <label for="inputqu2">What is your favorite movie?</label>
          <input type="text" class="form-control" id="Password" placeholder="secq2" name="q2" value="">
         </div>

            <div  class="form-group" >
              
              <input type="submit" name="admin_log" style='background:black;border:1px black solid;' class="btn btn-success btn-block" value="Submit"/><br>

              <a href="add_admin.php">
                <input style='background:black;border:1px black solid;' class="btn btn-success btn-block" type="reset" value=" Clear"/>
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




