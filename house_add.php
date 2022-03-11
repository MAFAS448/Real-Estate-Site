<?php include ("connection/db.php");?>

<?php

$result='SELECT * FROM districts';
$page_set1=mysql_query( $result);
$result2='SELECT * FROM districts2';
$page_set2=mysql_query( $result2);
?>

<!DOCTYPE html>
<?php include 'header3.php'; ?>
<br>
	
<div class="container">
    <div class="row">
      <section class="col-xs-12 col-md-offset-2 col-md-7">
	  <div class="cat1">
      <div class="panel panel-default">
      <div class="panel-heading" style='background:#000000 ;color:#fff;'>Add New house</div>
      <div class="panel-body">
	   
	<form action="house_add.php" method ="POST" enctype="multipart/form-data">
		<div class="col-lg-6">
		
		
	    <div class="form-group">
	        <label for="title">Title</label>
	        <input type="text" class="form-control" id="title" placeholder="house tilte" name="title" value="">
	    </div>
			    <div class="form-group">
	        <label for="size">Size</label>
	        <input type="text" class="form-control" id="size" placeholder="size" name="size" value="">
	    </div>
			    <div class="form-group">
	        <label for="house_size">house size in</label><br>
	       <select name="house_size"  class="form-control">
    <option value="perches">Perches</option>
    <option value="acres">Acres</option>
   
  </select>
	    </div>
			    <div class="form-group">
	        <label for="description">Description</label>
	        <textarea type="text" class="form-control" id="description" placeholder="description" name="description" value=""></textarea>
	    </div>
			    <div class="form-group">
	        <label for="price">Price</label>
	        <input type="text" class="form-control" id="price" placeholder="price" name="price" value="">
			<p style='color:red;'>*Don't Make the Space between the price</p>
	    </div>
			    <div class="form-group">
	        <label for="address">Address</label>
	        <input type="text" class="form-control" id="address" placeholder="address" name="address" value="">
	    </div>
			    <div class="form-group">
	        <label for="location">Location</label>
			
	        <select class="form-control" type="text"  name="location" >
				<?php while($row = mysql_fetch_assoc($page_set2) and $row2 = mysql_fetch_assoc($page_set1)) { ?>
				<option value="<?php echo  $row['disticts'];?>">
						<?php echo  $row['disticts'];?>
					</option>
					<option value="<?php echo  $row2['districts'];?>">
						<?php echo  $row2['districts'];?>
					</option>
				<?php } ?>
				
				
			</select>
			
	    </div>
		
		 <div class="form-group">
	        <label for="city">city</label><br>
	       <input type="text" class="form-control" id="city" placeholder="city" name="city">
					
	    </div>
		</div>
		<div class="col-lg-6">
		 <div class="form-group">
	        <label for="number">Contact number</label>
	        <input type="tel" class="form-control" id="number"  pattern="^\d{3}\d{4}\d{3}$" placeholder="contact number" name="number" value="">
	    </div>
		
		 <div class="form-group">
	        <label for="state">house state</label>
			 <select name="state"  class="form-control">
				<option value="Available">Available</option>
				<option value="Not Available">Not Available</option>
			   
			  </select>
			
	       
	    </div>
		<div class="form-group">
	        <label for="electri">Electricity</label>
	        <select name="electri"  class="form-control">
				<option value="Available">Available</option>
				<option value="Not Available">Not Available</option>		   
			</select>
	    </div>
		 <div class="form-group">
	        <label for="water">Tap Water</label>
	        <select name="water"  class="form-control">
				<option value="Available">Available</option>
				<option value="Not Available">Not Available</option>		   
			</select>
	    </div>
		 <div class="form-group">
	        <label for="road">Near Town</label>
	        <select name="road"  class="form-control">
				<option value="100 m">100 m</option>
				<option value="200 m">200 m</option>		   
			</select>
	    </div>
		<div class="form-group">
	        <label for="road">Image</label>
	        <input type="file" name="img" class="form-control" required>
	    </div>
		<div class="form-group">
	        <label for="road1">Image1</label>
	        <input type="file" name="img1" class="form-control" >
	    </div>
		<div class="form-group">
	        <label for="road2">Image2</label>
	        <input type="file" name="img2" class="form-control" >
	    </div>
		<!-- <div class="form-group">
	        <label for="road3">Add Panaroma Image</label>
	        <input type="file" name="img3" class="form-control" >
	        <p style='color:red;'>*If Available Only</p>
	    </div> -->
		
		</div>
		
	    <a class="btn btn-default" role="button" >Back</a>
	    <button class="btn btn-default" type="reset">Clear</button>

	    <input class="btn btn-success pull-right ch" type="submit" name="submit" value="submit">

	    <style>
	   	.ch:hover{
	   		background: #726E73;
	   	}
	   </style>
	   

		</form>
		
		<?php
		
		if(isset($_POST['submit']))
		{
			/*if($con=mysqli_connect("vteccreationscom.ipagemysql.com","gyr1","Gyr@1","gyr"))*/
			if($con=mysqli_connect('localhost','root','','gyr'))
			{
				$title = $_POST['title'];
				$size = $_POST['size'];
				$house_size = $_POST['house_size'];
				$description= $_POST['description'];
				$price = $_POST['price'];
				$address = $_POST['address'];
				$location = $_POST['location'];
				$city = $_POST['city'];
				$number = $_POST['number'];

				$state = $_POST['state'];
				$electri = $_POST['electri'];
				$water = $_POST['water'];
				$road = $_POST['road'];
				
				$filetemp= $_FILES['img']['tmp_name'];
				$filename= $_FILES['img']['name'];
				$filetype= $_FILES['img']['type'];
				$filepath= "images/customer/pics/".$filename;
				
				$filetemp1= $_FILES['img1']['tmp_name'];
				$filename1= $_FILES['img1']['name'];
				$filetype1= $_FILES['img1']['type'];
				$filepath1= "images/customer/pics1/".$filename1;
				
				$filetemp2= $_FILES['img2']['tmp_name'];
				$filename2= $_FILES['img2']['name'];
				$filetype2= $_FILES['img2']['type'];
				$filepath2= "images/customer/pics2/".$filename2;
				
				// $filetemp3= $_FILES['img3']['tmp_name'];
				// $filename3= $_FILES['img3']['name'];
				// $filetype3= $_FILES['img3']['type'];
				// $filepath3= "images/customer/pics3/".$filename3;
				
				//move_uploaded_file($filetemp,$filepath);
				//move_uploaded_file($filetemp1,$filepath1);
				//move_uploaded_file($filetemp2,$filepath2);
				//move_uploaded_file($filetemp3,$filepath3);
				
				$query = mysqli_query($con,"insert into publish_house(house_title,house_size,house_perches,house_desc,house_price,house_address,house_location,house_city,house_contact,house_state,electricity,tap_water,wide_road,image_name,image_path,image_type,image_name1,image_path1,image_type1,image_name2,image_path2,image_type2,date)values('$title','$size','$house_size','$description','$price','$address','$location','$city','$number','$state','$electri','$water','$road','$filename','$filepath','$filetype','$filename1','$filepath1','$filetype1','$filename2','$filepath2','$filetype2',NOW())");
				if($query)
				{
					echo"<h2 style='color:green;'>Your Add will publish within 24 hours</h2>";
				}
				else
				{
					echo"Sorry,Something went wrong try again";
				}
			}
		}
	
		?>
	   </div>
    </div>
	</div>
    </section>
  </div><!-- row -->   


</div>
	<?php include 'footer.php'; ?>