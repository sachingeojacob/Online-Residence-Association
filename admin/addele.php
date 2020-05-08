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
<title>Residence Admin Panel | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<?php
include("header.php");
include("sidemenu.php");

?>

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">	
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Add Election</h3>
					 	
							<form name="form_edite" method="post" enctype="multipart/form-data" class="login"  action="addelepro.php">
                
                <table class="table">
                    
					<tr><td><label> Election Name</label></td><td>
                    <input type="text" name="ename" placeholder="Election Name" /></td></tr>
					
					<tr><td><label> Candidate </label></td><td>
                    <input type="text" name="can" placeholder="Enter Name" /></td></tr>
					
						<tr><td><label>Date</label></td><td>
                    <input type="date" name="date" placeholder="Enter Date" /></td></tr>
					
                </table>
				<input type="submit" name="submit" value="Submit" onClick="return valid()" >
            </form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		
		 
		<?php
		include("footer.php");
		?>
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script type="text/javascript">
function valid()
{
if(document.form_edite.ename.value=="")
{
alert("Enter Designation Name");
document.form_edite.ename.focus();
return false;
    }
	if(!(isNaN(document.form_edite.ename.value)))
{
alert("Only alphabets are allowed");
document.form_edite.ename.focus();
return false;
}
if(document.form_edite.can.value=="")
{
alert("Enter Name");
document.form_edite.can.focus();
return false;
    }
	if(!(isNaN(document.form_edite.can.value)))
{
alert("Only alphabets are allowed");
document.form_edite.can.focus();
return false;
}

if(document.form_edite.date.value=="")
{
alert("Enter Date");
document.form_edite.date.focus();
return false;
    }
	
}
</script>
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