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
					  <h2>Add Agents</h2>
					  
					<form name="form_edit" method="post" class="login"  action="addagpro.php" enctype="multipart/form-data">
                
                <table class="table">
                    
					<tr><td><label>Branch Name</label></td><td>
                    <input type="text" name="brname" placeholder="Branch Name" required="required"/></td></tr>
					
					<tr><td><label>Agent Name</label></td><td>
                    <input type="text" name="agname" placeholder="Agent Name" required="required"/></td></tr>
					
					<tr><td><label>Age</label></td><td>
                    <input type="text" name="age" placeholder="Age" required="required"/></td></tr>
					
					<tr><td><label>Gender</label></td><td>
                    <input type="radio" name="gender"  value="male" /> Male
                    <input type="radio" name="gender" value="female" />Female
                    </td></tr>
					
					<tr><td><label> Address</label></td><td>
                    <textarea rows="5" cols="30" name="address" placeholder="Address"  ></textarea></td></tr>
					
					<tr><td><label>Phone</label></td><td>
                    <input type="text" name="phone" placeholder="Phone" required="required"/></td></tr>
					
					<tr><td><label>Email</label></td><td>
                    <input type="text" name="email" required="required" placeholder="Email" /></td></tr>
					
					<tr><td><label>Username</label></td><td>
                    <input type="text" name="uname" required="required" placeholder="Username" /></td></tr>
					
					<tr><td><label>Password</label></td><td>
                    <input type="text" name="pwd" required="required" placeholder="Password" /></td></tr>
					
                </table>
				<input type="submit" name="submit" value="Submit">
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

 