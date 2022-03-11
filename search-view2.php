<?php include ("connection/db.php");?>

<?php

$result='SELECT * FROM districts';
$page_set1=mysql_query( $result);
$result2='SELECT * FROM districts2';
$page_set2=mysql_query( $result2);


?>

<?php


session_start();

$select_cat = $_POST['location'];
$select_price = $_POST['sPrice'];

//echo $select_cat;
//echo $select_price;
$select_ad_table = mysql_query("select * from house where house_location = '$select_cat' AND house_price <= '$select_price' ");
$cat_row = mysql_fetch_array($select_ad_table);

?>

<!DOCTYPE html>
<?php include 'header.php'; ?>

	
	<div class="content">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 y">
				<img src="images/photos.png" width="100%" />
		
			
				
					
					<h4 class="tabgreen">DISTRICTS</h4><br>
			
					<?php while($row = mysql_fetch_assoc($page_set1)) { ?>
						<li><a href='housesearch.php?page=housesearch&cat=<?php echo $row['districts']; ?>' class="tabgreen1"><?php echo  $row['districts'];?></a></li>
					<?php } ?>
					
					
					<?php while($row = mysql_fetch_assoc($page_set2)) { ?>
						<li><a href='housesearch.php?page=housesearch&cat=<?php echo $row['disticts']; ?>' class="tabgreen1"><?php echo  $row['disticts'];?></a></li>
					<?php } ?>
			</div>
		
		<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 landth">
		<div>
			<form method="POST" action="search-view2.php" class=".search-line-wide">
				<div class="clear-fix search-line" style="background-color: #1a1a1a">
					<div class='col-lg-3 clo-md-3 col-sm-3 col-xs-4'>
					<select class="form-control" type="text" name="location">
								<option value="Colombo">Colombo</option>
								<option value="Gampaha">Gampaha	</option>
								<option value="Kandy">Kandy		</option>
								<option value="Matara">Matara	</option>
								<option value="Hambantota">Hambantota</option>
								<option value="Kaluthara">Kaluthara		</option>
								<option value="Anuradhapura">Anuradhapura</option>
								<option value="Kurunegala">Kurunegala	</option>
								<option value="Puttalam">Puttalam		</option>
								<option value="Galle">Galle				</option>
								<option value="Jaffna">Jaffna			</option>
								<option value="Kegalle">Kegalle			</option>
								<option value="Embilipitiya">Embilipitiya</option>
								<option value="Nuwara Eliya">Nuwara Eliya</option>
								<option value="Mullativu">Mullativu		</option>
								<option value="Polonnaruwa">Polonnaruwa	</option>
								<option value="Ratnapura">Ratnapura		</option>
								<option value="Wattala">Wattala			</option>
								<option value="Ampara">Ampara			</option>
								<option value="Kilinochchi">Kilinochchi	</option>
								<option value="Mannar">Mannar			</option>
								<option value="Badulla">Badulla			</option>
								<option value="Trincomalee">Trincomalee	</option>
								<option value="Batticaloa">Batticaloa</option>
\					</select>
					</div>
					
					<input name="sPrice" class="pc tab" value="" placeholder="Your Budget ?">
					<input type='submit' value='Search'>
					
					<button type='button' class='button13' style='float:right;'><a href='house_add.php'>Publish add</a></button>	
					<style>
					.button13{
						width: auto !important;
						padding: 5px 20px !important;
						min-width: 50px;
						background-color: #245203;
						color: white;
					}
					.button13 a
					{
						color:white;
					}
					
					</style>
				</div>
			</form>
			
		</div>
			<div class="">
	<center>
		<div class="row" >
			<?php while($row = mysql_fetch_assoc($select_ad_table)) { ?>
			<div class="col-lg-2 col-md-2 col-sm-3 col-xs-10 box2">
				<a href="#" d="0124" class="colorofbox" title="M.S|REAL ESTADE">
				
				
					<img style='height:100px;width:100%;'src="admin/images/customer/pics/<?php echo  $row['image_name'];?>" width="100%" /><br>
				
					 
			
					<p class="gr">Property Sale in <br><b ><?php echo $row['house_location'];?></b></p>
					<h4>Size in <?php echo $row['house_perches'];?></h4>
					<p><?php echo $row['house_price'];?></p>
					<p><?php echo $row['house_id'];?></p>

					<a href="full-view2.php?page=full-view2&cat=<?php echo $row['house_perches']; ?>&id=<?php echo $row['house_id']; ?>&ad_code=<?php echo $row['house_price'] ?>">view</a>
					<i class="i0"></i><i class="i1"></i><i class="i2"></i><i class="i4"></i>
				</a>
			</div>
				<?php } ?>
			
			<?php 
			if(empty($cat_row["house_location"]) ){
							 echo "<h2 style='color:red'>Sorry Result Not Found</h2>";
							
						}
			else{?>
			
			<div class="col-lg-2 col-md-2 col-sm-3 col-xs-10 box2">
				<a href="#" d="0124" class="colorofbox" title="M.S|REAL ESTADE">
				
				
					<img style='height:100px;width:100%;'src="admin/images/customer/pics/<?php echo  $cat_row['image_name'];?>" width="100%" /><br>
				
					 
			
					<p class="gr">Property Sale in <br><b ><?php echo $cat_row['house_location'];?></b></p>
					<h4>Size in <?php echo $cat_row['house_perches'];?></h4>
					<p><?php echo $cat_row['house_price'];?></p>
					<p><?php echo $cat_row['house_id'];?></p>

					<a href="full-view2.php?page=full-view2&cat=<?php echo $cat_row['house_perches']; ?>&id=<?php echo $cat_row['house_id']; ?>&ad_code=<?php echo $cat_row['house_price'] ?>">view</a>
					<i class="i0"></i><i class="i1"></i><i class="i2"></i><i class="i4"></i>
				</a>
			</div>
		
			<?php } ?>
		</div>
	</center>
	
	
	</div>

	
	</div>
	</div>
	
	</div>
	<?php include 'footer.php'; ?>