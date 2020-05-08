 <!-- Gallery -->
	<div class="gallery" id="editprofile">

		<h3>Edit Profile</h3>

		<div class="gallery-items">
			
			<?php
			$id=$_GET['id'];
			$logid=$_SESSION['id'];
			$select5="select * from user where logid=$logid";
			$res5=$obj->exe($select5);
				while($row5=mysqli_fetch_array($res5))
				{
				?>
		  <form name="form_edit4" method="post" enctype="multipart/form-data" class="login"  action="editpro.php">
		      <table class="table table-condensed">
                    
					<tr><td><label> Name</label></td><td>
                    <input type="text" name="name" value="<?php echo $row5[1];?>" /></td></tr>
					
					<tr><td><label> Email</label></td><td>
                    <input type="text" name="email" value="<?php echo $row5[2];?>" /></td></tr>
					
					<tr><td><label>Gender</label></td><td>
                    <input type="radio" name="gender" value="male" <?php if($row5[3]=="male"){?> checked="checked" <?php }?>> Male
                    <input type="radio" name="gender" value="female" <?php if($row5[3]=="female"){?> checked="checked" <?php }?>>Female
                    </td></tr>
					
					<tr><td><label> Phone</label></td><td>
                    <input type="text" name="phone" value="<?php echo $row5[4];?>" /></td></tr>
					
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
			 <script type="text/javascript">
function valid()
{
if(document.form_edit4.name.value=="")
{
alert("Enter Name");
document.form_edit4.name.focus();
return false;
    }
	if(!(isNaN(document.form_edit4.name.value)))
{
alert("Only alphabets are allowed");
document.form_edit4.name.focus();
return false;
}

var email=document.form_edit4.email.value;
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; 
 

if(document.form_edit4.email.value=="")
{
alert("enter your emailid");
document.form_edit4.email.focus();
return false;
}

 if(reg.test(email)== false)
 {
	  
        alert("Please enter a valid Email id");
        document.form_edit4.email.focus();
       return false;
    }
if((document.form_edit4.gender[0].checked==false) && (document.form_edit4.gender[1].checked==false ))//radiobutton name=gender
{
alert("select your gender");

return false;
}
if(document.form_edit4.phone.value=="")
{
alert("Enter Contact Number");
document.form_edit4.phone.focus();
return false;
    }
var phone=document.form_edit4.phone.value.length;
if((isNaN(document.form_edit4.phone.value)))
{
alert("Only numbers are allowed");
document.form_edit4.phone.focus();
return false;
}
var max=10;
if((phone<max) || (phone>max))
{
alert("Please Enter  10 digit Contact Number");

document.form_edit4.phone.focus();
return false;
}
if(document.form_edit4.uname.value=="")
{
alert("Enter Name");
document.form_edit4.uname.focus();
return false;
    }
	if(!(isNaN(document.form_edit4.uname.value)))
{
alert("Only alphabets are allowed");
document.form_edit4.uname.focus();
return false;
}
}
</script>
			<div class="clearfix"></div>
		</div>

	</div>
	<!-- //Gallery -->