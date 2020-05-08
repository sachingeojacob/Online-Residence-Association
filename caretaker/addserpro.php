<?php
session_start();
//$uname=$_SESSION['uname'];
if(isset ($_SESSION['uname']))
{
	$uname=$_SESSION['uname']; 
	include("db.php");
	$obj=new db();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Residence Caretaker Panel | Home</title>
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
					  <h2>Add Service Providers</h2>
					  
					<form name="form_edit" method="post" class="login"  action="addserpros.php" enctype="multipart/form-data">
                
                <table class="table">
                   <tr><td><label> Name</label></td><td>
                    <input type="text" name="sname" placeholder="Name" /></td></tr>
					
					<tr><td><label> Service</label></td><td>
                    <input type="text" name="service" placeholder="Service" /></td></tr>
					
					<tr><td><label> Email</label></td><td>
                    <input type="text" name="email" placeholder="Email" /></td></tr>
					
					<tr><td><label>Phone</label></td><td>
                    <input type="text" name="phone" placeholder="Phone" /></td></tr>
					
					<tr><td><label>Gender</label></td><td>
                    <input type="radio" name="gender"  value="male" /> Male
                    <input type="radio" name="gender" value="female" />Female
                    </td></tr>
				
					
                   </table>
				<input type="submit" name="submit" value="Submit" onClick="return valid()">
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
		<script type="text/javascript">
function valid()
{
	if(document.form_edit.sname.value=="")
{
alert("Enter  Name");
document.form_edit.sname.focus();
return false;
    }
	if(!(isNaN(document.form_edit.sname.value)))
{
alert("Only alphabets are allowed");
document.form_edit.sname.focus();
return false;
}

if(document.form_edit.service.value=="")
{
alert("Enter Service Name");
document.form_edit.service.focus();
return false;
    }
	if(!(isNaN(document.form_edit.service.value)))
{
alert("Only alphabets are allowed");
document.form_edit.service.focus();
return false;
}


var email=document.form_edit.email.value;
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; 
 

if(document.form_edit.email.value=="")
{
alert("enter your emailid");
document.form_edit.email.focus();
return false;
}

 if(reg.test(email)== false)
 {
	  
        alert("Please enter a valid Email id");
        document.form_edit.email.focus();
       return false;
    }
	if(document.form_edit.phone.value=="")
{
alert("Enter Contact Number");
document.form_edit.phone.focus();
return false;
    }
var phone=document.form_edit.phone.value.length;
if((isNaN(document.form_edit.phone.value)))
{
alert("Only numbers are allowed");
document.form_edit.phone.focus();
return false;
}
var max=10;
if((phone<max) || (phone>max))
{
alert("Please Enter  10 digit Contact Number");

document.form_edit.phone.focus();
return false;
}
if((document.form_edit.gender[0].checked==false) && (document.form_edit.gender[1].checked==false ))//radiobutton name=gender
{
alert("select your gender");

return false;
}

}
</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019 Residence. All Rights Reserved </p>
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
<?php
 }
 else
 {
 ?>
 <script>
 alert("Invaid Login");
 window.location="../index.php#login";
 </script>
 <?php
 }
 ?>

 