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
					<h3 class="title1">LadiesPanel Discussions</h3>
					 <?php
		  $sql="select * from ladiespanel";
		  $res=$obj->exe($sql);
		  $no=mysqli_num_rows($res);
		  if($no==0)
		  {
			  echo "&quot;No records here!!&quot;";
		  }
		  else
		  {
		  ?>
					<div class="panel-body widget-shadow">
						<table class="table">
							<thead>
						  <tr>
							<th>Username</th>
							<th>Message</th>
							
						  </tr>
						</thead>
						<tbody>
						<?php
			while($row=mysqli_fetch_array($res))
			{
		  ?>
						  <tr>
							<td><?php echo $row[1];?></td>
							<td><?php echo $row[2];?></td>
							
						  </tr>
						</tbody>
					   <?php
			}
		  ?>
						</table>
						 <?php
			}
		  ?>
					</div>
		
		  </div>
		  </div>
		  </div>
		 
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2016 Novus Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
		</div>
        <!--//footer-->
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