<?php include ("connection/db.php");?>

<?php
$res="SELECT * FROM land";
$page_set=mysql_query( $res);
$result='SELECT * FROM districts';
$page_set1=mysql_query( $result);
$result2='SELECT * FROM districts2';
$page_set2=mysql_query( $result2);


?>

<!DOCTYPE html>
<?php include 'header2.php'; ?>


	<div class="content">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 y">
				<img src="images/photos.png" width="100%" />



					<h4 class="tabgreen" style="color: black">DISTRICTS</h4><br>

					<?php while($row = mysql_fetch_assoc($page_set1)) { ?>
						<li><a style="color: black" href='landsearch.php?page=landsearch&cat=<?php echo $row['districts']; ?>' class="tabgreen1"><?php echo  $row['districts'];?></a></li>
					<?php } ?>



					<?php while($row = mysql_fetch_assoc($page_set2)) { ?>
						<li><a style="color: black" href='landsearch.php?page=landsearch&cat=<?php echo $row['disticts']; ?>' class="tabgreen1"><?php echo  $row['disticts'];?></a></li>
					<?php } ?>


			</div>

		<div>
			<form method="POST" action="search-view.php" class=".search-line-wide">
				<div class="clear-fix search-line" style="background-color:grey">
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


					</select>
					</div>

					<input name="sPrice" class="pc tab" value="" placeholder="Your Budget ?">
					<input type='submit' value='Search'>

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
			<?php while($row = mysql_fetch_assoc($page_set)) { ?>
			<div class="col-lg-2 col-md-2 col-sm-3 col-xs-10 box2">
				<a href="#" d="0124" class="colorofbox" title="M.S|REAL ESTADE">


					<img style='height:100px;width:100%;'src="admin/images/customer/land/pics/<?php echo  $row['image_name'];?>" width="100%" /><br>



					<p class="gr">Land Sale in <br><b ><?php echo $row['land_location'];?></b></p>
					<h4>Size in <?php echo $row['land_perches'];?></h4>
					<p><?php echo $row['land_price'];?></p>
					<p><?php echo $row['land_id'];?></p>

					<a href="full-view.php?page=full-view&cat=<?php echo $row['land_perches']; ?>&id=<?php echo $row['land_id']; ?>&ad_code=<?php echo $row['land_price'] ?>">view</a>
					<i class="i0"></i><i class="i1"></i><i class="i2"></i><i class="i4"></i>
				</a>
			</div>
				<?php } ?>

		</div>
	</center>


	</div>
	</div>
	</div>


	<?php include 'footer.php'; ?>
	</div>
	
