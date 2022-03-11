<!DOCTYPE html>
<?php include ("connection/db.php");?>
<?php
$res="SELECT * FROM house";
$page_set=mysql_query( $res);
$res1="SELECT * FROM land";
$page_set1=mysql_query( $res1);
$count=0;

?>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5500);    
}
</script>

			

<script>  
window.onload=function(){getTime();}  
function getTime(){  
var today=new Date();  
var h=today.getHours();  
var m=today.getMinutes();  
var s=today.getSeconds();  
// add a zero in front of numbers<10  
m=checkTime(m);  
s=checkTime(s);  
document.getElementById('txt').innerHTML=h+":"+m+":"+s;  
setTimeout(function(){getTime()},1000);  
}  
//setInterval("getTime()",1000);//another way  
function checkTime(i){  
if (i<10){  
  i="0" + i;  
 }  
return i;  
}  
</script>  	


	
		
		
	<div class="">
	<div class="content2">



	<center>
	<div class="box-border-back">	

	<marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
		<div class="" style='padding-left:5%;  '>
			
			
		<!-- 	<php while($count<3 and $row1 = mysql_fetch_assoc($page_set1)) { ?>
			<div class="box2">
				<a href="#" d="0124" class="colorofbox" title="Prime Life Kadawatha">
				
				
					<img style='height:100px;width:100%;'src="admin/images/customer/land/pics/<php echo  $row1['image_name'];?>" width="100%" /><br>
				
					 
			
					<p class="gr">Land Sale in <br><b ><php echo $row1['land_location'];?></b></p>
					<h4>Size in <php echo $row1['land_perches'];?></h4>
					<p><php echo $row1['land_price'];?></p>
					<p><php echo $row1['land_id'];?></p>

					<a href="full-view.php?page=full-view&cat=<php echo $row1['land_perches']; ?>&id=<php echo $row1['land_id']; ?>&ad_code=<php echo $row1['land_price'] ?>">view</a>
					<i class="i0"></i><i class="i1"></i><i class="i2"></i><i class="i4"></i>
				</a>
			</div>
				<php $count++; } ?>
		  
		 
		 
		  <php while($count<5 and$row = mysql_fetch_assoc($page_set)) { ?>
			<div class="box2">
				<a href="#" d="0124" class="colorofbox" title="Prime Life Kadawatha">
				
				
					<img style='height:100px;width:100%;'src="admin/images/customer/pics/<php echo  $row['image_name'];?>" width="100%" /><br>
				
					 
			
					<p class="gr">House Sale in <br><b ><php echo $row['house_location'];?></b></p>
					<h4>Size in <php echo $row['house_perches'];?></h4>
					<p><php echo $row['house_price'];?></p>
					<p><php echo $row['house_id'];?></p>

					<a href="full-view2.php?page=full-view2&cat=<php echo $row['house_perches']; ?>&id=<php echo $row['house_id']; ?>&ad_code=<php echo $row['house_price'] ?>">view</a>
					<i class="i0"></i><i class="i1"></i><i class="i2"></i><i class="i4"></i>
				</a>
			</div>
				<php  $count++;  } ?>
		   -->



		   <h3> <B>- APARTMENT</B> OR <B>FLATE.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp - Agricultural LANDS. <br><BR>- MULTY FAMILY HOUSES.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp - Residential LANDS.  <BR><br>- SINGLE FAMILY HOUSES.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  - Commercial LANDS. &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp| SELL YOUR PROPERTY WITH US!!! |<BR><BR>- TERRACED HOUSE.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  - Industrial LANDS. <BR><BR> - TENTS HOUSES.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   - Special Purpose LANDS.</h3> <BR>
		  	Our webSite is:<b>&nbsp&nbsp ms.realestate/cpn.lk</b>&nbsp&nbsp mobile: <b>0719786887</b>&nbsp&nbsp Tel:0272222247.&nbsp&nbsp<img src="images/0.png" width="25" height="35">REAL ESTATE (PVT)LTD.


		  </div>
		  
		</marquee>
			</div>
		
	</center>
		
	</div>
	
	</div>
