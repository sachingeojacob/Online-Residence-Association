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
					<h3 class="title1">Add Caretakers</h3>
					 <form name="form_edit" method="post" enctype="multipart/form-data" class="login"  action="addcarepro.php">
                
                <table class="table">
                    
					<tr><td><label> Name</label></td><td>
                    <input type="text" name="name" placeholder="Name" /></td></tr>
					
					<tr><td><label> Email</label></td><td>
                    <input type="text" name="email" placeholder="Email" /></td></tr>
					
					<tr><td><label>Phone</label></td><td>
                    <input type="text" name="phone" placeholder="Phone" /></td></tr>
					
					<tr><td><label>Gender</label></td><td>
                    <input type="radio" name="gender"  value="male" /> Male
                    <input type="radio" name="gender" value="female" />Female
                    </td></tr>
						
               <tr><td><label>House Number</label></td><td>
                    <input type="text" name="address" placeholder="House Number" /></td></tr>
						
                   <tr><td><label>Username</label></td><td>
                    <input type="text"  placeholder="Username" name="uname"/></td></tr>
					
                   <tr><td><label>Password</label></td><td>
                    <input type="password"  placeholder="Password" name="pwd"/></td></tr>
                   
                </table>
				<input type="submit" name="submit" value="Submit" onClick="return valid()" >
            </form>
					
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
		</div>
	</div>
		<?php
		include("footer.php");
		?>
		
	</div>
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
if((document.form_edit.gender[0].checked==false) && (document.form_edit.gender[1].checked==false ))//radiobutton name=gender
{
alert("select your gender");

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
if((pwd<max) || (pwd>max))
{
alert("password limit is 10");

document.form_edit.pwd.focus();
return false;
}
if(document.form_edit.address.value=="")
{
alert("Enter Address");
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
	var pwd=document.form_edit.pwd.value.length;
	var max=10;
if((pwd<max) || (pwd>max))
{
alert("password limit is 10");

document.form_edit.pwd.focus();
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