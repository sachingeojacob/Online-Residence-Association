<?php
include("db.php");
$obj=new db();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Novus Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Grids :: w3layouts</title>
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
					<h3 class="title1">Add Images</h3>
					<form name="form_edit" method="post" enctype="multipart/form-data" class="login"  action="addimagepro.php">
                
                <table class="table">
                    
					<tr><td><label>Select Image</label></td><td>
                    <input type="file" name="image" placeholder="Image" /></td></tr>
					
                </table>
				<input type="submit" name="submit" value="Submit" onClick="return valid()" >
            </form>
					 	
						</div>
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
</body>
</html>