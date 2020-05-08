<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="index.php" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-table nav_icon"></i>User Management <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="newuser.php">New Users</a>
								</li>
								<li>
									<a href="viewuser.php">View Users</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-table nav_icon"></i>Caretaker Management <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="newcare.php">Add Caretakers</a>
								</li>
								<li>
									<a href="viewcare.php">View Caretakers</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li>
							<a href="addnoti.php"><i class="fa fa-table nav_icon"></i>Add Notifications</a>
						</li>
						
						<li>
							<a href="#"><i class="fa fa-table nav_icon"></i>Election <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="addele.php">Add Election</a>
								</li>
								
								<li>
									<a href="viewele.php">Elections</a>
								</li>
								
								<li>
									<a href="viewele.php">Elections</a>
								</li>								
								
							</ul>
							<!-- /nav-second-level -->
						</li>
						
						<li>
							<a href="#"><i class="fa fa-table nav_icon"></i>Services <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="viewpend.php">Pending</a>
								</li>
								<li>
									<a href="viewap.php">Approved</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li>
							<a href="addnews.php"><i class="fa fa-table nav_icon"></i>Add News</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-table nav_icon"></i>Gallery <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="addimage.php">Add</a>
								</li>
								<li>
									<a href="viewimage.php">View</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						
						<li>
							<a href="viewcomplaint.php"><i class="fa fa-table nav_icon"></i>View Complaints</a>
						</li>
						
						
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
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
   <script src="js/bootstrap.js"> </script>
</body>
</html>
