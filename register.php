<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Estate Land Real Estate Category Flat Bootstrap Responsive Website Template | Contact :: W3layouts</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Estate Land Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	
	<!-- Popup css (for Video Popup) -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">

	<!-- //web-fonts -->
	
</head>

<body>


<!-- Navigation -->
<header>
	<div class="top-nav">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand text-uppercase" href="index.php">Residence <i class="fas fa-building"></i><span>Association</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center pr-md-4" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
					<li class="nav-item">
							<a class="nav-link" href="register.php">User Registration</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login.php">Login</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>
<!-- //Navigation -->


<!-- inner page banner -->
<section class="innerpage_banner py-5">
	<div class="dot1">
		
	</div>
</section>
<!-- //inner page banner -->

<section class="contact_form py-5">
	<div class="container">
		<div class="heading">
		<h1 class="heading text-capitalize mb-5 pb-3"><span>User </span> Registration</h1>
			<h4 class="position cont">Register Here</h4>
		</div>
			<form action="userregpro.php" method="post" name="form_edit">
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="name" placeholder="Enter Your Name" required="">
				</div>
				<div class="input-w3ls w3ls-rght">
					<input type="email" class="name" name="email" placeholder="Enter Your Email" required="">
				</div>
				
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="phone" placeholder="Enter Your Phone Number" required="">
				</div>
				<div class="input-w3ls w3ls-rght">
					<input type="text" class="name" name="address" placeholder="Enter Your House Number" required="">
				</div>
				<div class="input-w3ls w3ls-left">
					<input type="text" class="name" name="uname" placeholder="Enter Username" required="">
				</div>
				<div class="input-w3ls w3ls-rght">
					<input type="password" class="name" name="pwd" placeholder="Enter Password" required="">
				</div>
				<div class="input-w3ls w3ls-left"><br>
					Select Gender: &nbsp; <input type="radio" name="gender"  value="male" /> <label id="label">Male</label>
                    <input type="radio" name="gender" value="female" /><label id="label">Female</label>
				</div>
				
				<div class="input-w3ls">
					<input type="submit" value="Register" onClick="return valid()">
				</div>
			</form>
			<script type="text/javascript">
function valid()
{
	if(document.form_edit.name.value=="")
{
alert("Enter Name");
document.form_edit.name.focus();
return false;
    }
	if(!(isNaN(document.form_edit.name.value)))
{
alert("Only alphabets are allowed");
document.form_edit.name.focus();
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
if(document.form_edit.address.value=="")
{
alert("Enter HouseNumber");
document.form_edit.address.focus();
return false;
    }
 
if(document.form_edit.uname.value=="")
{
alert("Enter Username");
document.form_edit.uname.focus();
return false;
    }
if(document.form_edit.pwd.value=="")
{
alert("Enter Password");
document.form_edit.pwd.focus();
return false;
    }
	if((document.form_edit.gender[0].checked==false) && (document.form_edit.gender[1].checked==false ))//radiobutton name=gender
{
alert("select your gender");

return false;
}
	
}
</script>

	</div>
</section>
<!-- contact -->

		
<!-- contact -->

<!-- /newsletter-->

<!-- //newsletter-->

<!-- footer -->
<section class="agile-footer w3ls-section py-5">
	
		<div class="agileits_w3layouts-copyright text-center">
			<p>© 2019 Residence Association. All Rights Reserved 
			</p>
		</div>
	
</section>
<!-- //footer -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->

</body>
</html>