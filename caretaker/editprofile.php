<?php
include("db.php");
$obj=new db();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<?php
include("dheader.php");
?>
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->

</head>
<body>
		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
            </ol>
<div class="agile-grids">
		<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Edit Profile</h2>
					<?php
			$id=$_GET['id'];
			$logid=$_SESSION['id'];
			$select5="select * from caretaker where logid=$logid";
			$res5=$obj->exe($select5);
				while($row5=mysqli_fetch_array($res5))
				{
				?>
					 	
							<form name="form_edit" method="post" class="login"  action="editpro.php">
                
       
                <table class="table table-condensed">
                    
					<tr><td><label> Name</label></td><td>
                    <input type="text" name="name" value="<?php echo $row5[1];?>" /></td></tr>
					
					<tr><td><label> Email</label></td><td>
                    <input type="text" name="email" value="<?php echo $row5[2];?>" /></td></tr>
					
					<tr><td><label> Phone</label></td><td>
                    <input type="text" name="phone" value="<?php echo $row5[3];?>" /></td></tr>
					
					<tr><td><label>Gender</label></td><td>
                    <input type="radio" name="gender" value="male" <?php if($row5[4]=="male"){?> checked="checked" <?php }?>> Male
                    <input type="radio" name="gender" value="female" <?php if($row5[4]=="female"){?> checked="checked" <?php }?>>Female
                    </td></tr>
					
					<tr><td><label> Address</label></td><td>
                    <input type="text" name="address" value="<?php echo $row5[5];?>" /></td></tr>
					
					<tr><td><label> User Name</label></td><td>
                    <input type="text" name="uname" value="<?php echo $row5[6];?>" /></td></tr>
					<tr><td></td><td>
                    <input type="hidden" name="id" value="<?php echo $row5[6];?>" /></td></tr>
					<?php
					}
					?>
                </table>
				<input type="submit" name="submit" value="Submit" onClick="return valid()" >
				
            </form>	
					</div>
				  
		
				

				</div>
<!--agileinfo-grap-->

	  </div>
	  <!--//w3-agileits-pane-->	
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Pooled. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
		<?php
		include("dside.php");
		?>	
</body>
</html>
