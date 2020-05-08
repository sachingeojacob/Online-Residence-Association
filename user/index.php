<?php
error_reporting(0);
session_start();
//$uname=$_SESSION['uname'];
if(isset ($_SESSION['uname']))
{
	$uname=$_SESSION['uname'];
	$id=$_SESSION['id'];
	include("db.php");
$obj=new db(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Residence Association | Home</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Property Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<?php
include("header.php");
?>

</head>
<body>

<!--grids --> 
		<div class="popular-w3">
				<div class="popular-grids">
					<div class="col-md-3 popular-grid">
						<img src="../uploads/a.jpg" class="img-responsive" alt=""/>
						<div class="popular-text">
							<i class="fa fa-home" aria-hidden="true"></i>
							<h5>Services</h5>
							<div class="detail-bottom">
								<p>We Provide Services For You</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 popular-grid">
						<img src="../uploads/b.jpg" class="img-responsive" alt=""/>
						<div class="popular-text">
							<i class="fa fa-home" aria-hidden="true"></i>
							<h5>Service Providers</h5>
							<div class="detail-bottom">
								<p>Service Providers For Your Service</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 popular-grid">
						<img src="../uploads/c.jpg" class="img-responsive" alt=""/>
						<div class="popular-text">
							<i class="fa fa-home" aria-hidden="true"></i>
							<h5>Elections</h5>
							<div class="detail-bottom">
								<p>Choose Your Candidate By Elections</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 popular-grid">
						<img src="../uploads/d.jpg" class="img-responsive" alt=""/>
						<div class="popular-text">
							<i class="fa fa-home" aria-hidden="true"></i>
							<h5>Ladies Discussion Panel</h5>
							<div class="detail-bottom">
								<p>We Provide A Discussion Panel For Ladies</p>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
<!-- //grids -->  
	

	<!-- Gallery -->
	<div style="background-color: #CCCCCC" class="gallery" id="viewnot">

		<h3>Notifications</h3>

		<div class="gallery-items">
			
				
				<?php
		  $sql="select * from notification where date>=CURRENT_DATE";
		  $res=$obj->exe($sql);
		  $no=mysqli_num_rows($res);
		  if($no==0)
		  {
			  echo "&quot;No records here!!&quot;";
		  }
		  else
		  {
		  ?>
		
		 
		  <table class="table table-condensed">
						<thead>
						  <tr>
							<th>Date</th>
							<th>Notification</th>
							
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
		  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		  
			<div class="clearfix"></div>
		</div>

	</div>
	<!-- //Gallery -->
	
	<!-- contact -->
<div class="contact" id="serreq">
	<div class="contact-top">
		<h3>Service Requests</h3>
		<?php
			$id=$_GET['id'];
			$logid=$_SESSION['id'];
			$select1="select * from user where logid=$logid";
				$res1=$obj->exe($select1);
				while($row1=mysqli_fetch_array($res1))
				{
				?>
	</div>
	<div class="container">
		<div class="contact-main w3agile">
			<div class="col-md-7 contact-left">
			  <div class="contact-bottom">
			  	<form name="form_edit1" enctype="multipart/form-data" class="login" action="serreqpro.php" method="post">
					<input type="text" placeholder="name" value="<?php echo $row1[1];?>" name="uname">
					<textarea placeholder="Service" name="service" ></textarea>
			  		<input type="submit" value="Submit" name="submit" onClick="return valid()">
			  	<button><a href="#" data-toggle="modal" data-target="#myModal3">YOUR SERVICES<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a></button> 
				
				<?php
				}
				?>
            </form>
			<script type="text/javascript">
function valid()
{
if(document.form_edit1.uname.value=="")
{
alert("Enter Name");
document.form_edit1.uname.focus();
return false;
    }
	if(!(isNaN(document.form_edit1.uname.value)))
{
alert("Only alphabets are allowed");
document.form_edit1.uname.focus();
return false;
}
if(document.form_edit1.service.value=="")
{
alert("Enter service");
document.form_edit1.service.focus();
return false;
    }
}
</script>
			  </div>
			 </div>
			 <div class="col-md-5 map">
			 </div>
			 <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		   <div class="clearfix"> </div>
		</div>
	</div>
</div>
			
	<!-- Modal1 -->
						<div class="modal fade" id="myModal3" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
									<?php
				$id=$_GET['id'];
			$logid=$_SESSION['id'];
			$sql10="select * from serreq where username=(select name from user where logid='$logid' )";		  
			$res10=$obj->exe($sql10);
		  $no10=mysqli_num_rows($res10);
		  if($no10==0)
		  {
			  echo "&quot;No Records Here!!&quot;";
		  }
		  else
		  {
		  ?>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4>Approves ServiceRequests</h4>
											<img src="../uploads/a.jpg" alt="image">
											<hr/>
												<table class="table table-condensed">
						<thead>
						  <tr>
							<th>Name</th>
							<th>Service</th>
							<th>Status</th>
							
						  </tr>
						</thead>
						<tbody>
						<?php
			while($row10=mysqli_fetch_array($res10))
			{
		  ?>
						  <tr>
							<td><?php echo $row10[1];?></td>
							<td><?php echo $row10[2];?></td>
							<td>
							<?php
							if($row10[3]==1)
							{
							echo "Approved!!  Will Proceed Your Request Within 2 Hrs";
							
							}
							
							else
							{
							echo "Pending...";
							
							}
							?>
							
							</td>
							
							
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
					   <!-- //Modal1 -->
	 <div style="background-color:#CCCCCC" class="gallery" id="viewele">

		<h3>Elections</h3>

		<div class="gallery-items">
			<?php
			$id=$_GET['id'];
			$logid=$_SESSION['id'];
			$date=date('Y-m-d');
			$select3="select * from electionadd where edate='$date'";
			$res3=$obj->exe($select3);
			$row3=mysqli_fetch_array($res3);
			$elname=$row3[1];
			
			$select4="select * from election where voterid=$logid and edate='$date' and elname='$elname'";
			$res4=$obj->exe($select4);
			$num=mysqli_num_rows($res4);
			if($num>0)
			{
			echo 'already voted';
			
			}			
			else
			{
			
			$select4="select * from user where logid=$logid";
			$res4=$obj->exe($select4);
			?>
			
					   
						<form name="form_edit2" method="post" class="login"  action="viewelepro.php" enctype="multipart/form-data">
                
                <table class="table">
				
                   <?php
					while($row4=mysqli_fetch_array($res4))
				{
				?>
					<?php
					$numm=mysqli_num_rows($res3);
					if($numm==0)
				{
				echo 'No Elections For Today';
				?>
					<?php
					}
					else
					{
					
					?>
					
					
					<tr><td><label> Election Name</label></td><td>
                    <input type="text" name="elname" value="<?php echo $elname;?>"placeholder="Election Name" /></td></tr>
					
					<?php
			$id=$_GET['id'];
			$sele="select * from electionadd where elname='$row3[1]'";
			$re=$obj->exe($sele);
			?>
					<tr><td><label>Select Candidate</label></td><td>
					<?php
					while($ro=mysqli_fetch_array($re))
					{
					?>
                    <input type="radio" name="can"  value="<?php echo $ro[2];?> "/> <?php echo $ro[2];?>
                    <?php
					}
					?>
                    </td></tr>
					
              	
                  <tr><td></td><td>
				<input type="submit" name="submit" value="Submit" onClick="return validd()"></td></tr>
				
				<?php
					}
					?>
				<?php
					}
					?>
				</table>
				
            </form>
			
			<?php
			}
			?>
			<br/>
			<br/>
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
			<button><a href="#" data-toggle="modal" data-target="#myModal2">Election Results<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a></button>
			<script type="text/javascript">
function validd()
{
if(document.form_edit2.uname.value=="")
{
alert("Username missing");
document.form_edit2.uname.focus();
return false;
    }
	if(!(isNaN(document.form_edit2.uname.value)))
{
alert("Only Alphabates are allowed");
document.form_edit2.uname.focus();
return false;
}
if((document.form_edit2.can[0].checked==false) && (document.form_edit2.can[1].checked==false ))//radiobutton name=gender
{
alert("select Candidate");

return false;
}
}
</script>



	<!-- //Gallery -->
	<!-- Modal1 -->
													
											
				<!-- Modal1 -->
						<div class="modal fade" id="myModal2" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
									<?php
				
			$sq="select max(vote) from election where edate<CURRENT_DATE";		  
			$y=$obj->exe($sq);
			 $nom=mysqli_num_rows($y);
		  if($nom==0)
		  {
			  echo "&quot;No records here!!&quot;";
		  }
		  else
		  {
		  ?> 
		
		 
										<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4>Election Results</h4>
											<img src="../uploads/c.jpg" alt="image">
											<hr/>
											<?php
		$h=mysqli_fetch_array($y);
		$m=$h[0];
		$t="select *  from election where vote=$m";
			$y1=$obj->exe($t);
			$h3=mysqli_fetch_array($y1);
		  ?>				
					<p><?php echo $h3[1];?> : <?php echo $h3[2];?></p><br/>							
						
										</div>
								</div>
						
							</div>
				       </div>
					   <!-- //Modal1 -->							
											
											
							<?php
							}
							?>				
											
											
											
								
										
													
											
											
											
											
											
																
											
									</div>
								</div>
						
							</div>
				       </div>
					   <!-- //Modal1 -->
	
	 <div style="background-color: #FFFFFF" class="gallery" id="news">

		<h3>News</h3>

		<div class="gallery-items">
			
			<?php
		  $sql2="select * from news where date>=CURRENT_DATE ";
		  $res2=$obj->exe($sql2);
		  $no2=mysqli_num_rows($res2);
		  if($no2==0)
		  {
			  echo "&quot;No records here!!&quot;";
		  }
		  else
		  {
		  ?>
					    <table class="table table-condensed">
						<thead>
						  <tr>
							<th>Date</th>
							<th>News</th>
							
						  </tr>
						</thead>
						<tbody>
						<?php
			while($row2=mysqli_fetch_array($res2))
			{
		  ?>
						  <tr>
							<td><?php echo $row2[1];?></td>
							<td><?php echo $row2[2];?></td>
							
						  </tr>
						</tbody>
					   <?php
			}
		  ?>
          </table>
          <?php
		  }
		  ?>
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
			<div class="clearfix"></div>
		</div>

	</div>
			 
	
	<!-- contact -->
<div class="contact" id="team">
	<div class="contact-top">
		<h3>Ladies Community Panel</h3>
	
	</div>
	<?php
				$id=$_GET['id'];
			$logid=$_SESSION['id'];
			$sql6="select * from user where logid=$logid and gender='female'";		  
			$res6=$obj->exe($sql6);
		  $no6=mysqli_num_rows($res6);
		  if($no6==0)
		  {
			  echo  "&quot;This Panel is only For Ladies!!&quot;";
		  }
		  else
		  {
		  ?>
	<div class="container">
		<div class="contact-main w3agile">
			<div class="col-md-7 contact-left">
			  <div class="contact-bottom">
			  	<form name="form_edit3" enctype="multipart/form-data" class="login" action="ladiespro.php" method="post">
				<?php
			while($row6=mysqli_fetch_array($res6))
			{
		  ?>
			  		<input type="text" placeholder="Name" value="<?php echo $row6[1];?>" name="uname">
					 <textarea placeholder="Message" name="message" ></textarea>
			  		<input type="submit" value="Submit" name="submit" onClick="return val()">
			  	<button><a href="#" data-toggle="modal" data-target="#myModal1">Read Discussion<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a></button>
				<?php
				}
				?>
            </form>
          <?php
		  }
		  ?>
			 <script type="text/javascript">
function val()
{
if(document.form_edit3.uname.value=="")
{
alert("Enter Name");
document.form_edit3.uname.focus();
return false;
    }
	if(!(isNaN(document.form_edit3.uname.value)))
{
alert("Only alphabets are allowed");
document.form_edit3.uname.focus();
return false;
}
if(document.form_edit3.message.value=="")
{
alert("Enter message");
document.form_edit3.message.focus();
return false;
    }
}
</script>
			  </div>
			 </div>
			 <div class="col-md-5 map">
			 </div>
			 <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		   <div class="clearfix"> </div>
		</div>
	</div>
</div>
	
	<!-- contact -->
				
<!-- Modal1 -->
						<div class="modal fade" id="myModal1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
									<?php
				
			$sql7="select * from ladiespanel ";		  
			$res7=$obj->exe($sql7);
		  $no7=mysqli_num_rows($res7);
		  if($no7==0)
		  {
			  echo "&quot;No Records Here!!&quot;";
		  }
		  else
		  {
		  ?>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4>LadiesPanel Discussion</h4>
											<img src="../uploads/d.jpg" alt="image">
											<hr/>
											<?php
			while($row7=mysqli_fetch_array($res7))
			{
		  ?>				
		  									<p><?php echo $row7[1];?> : <?php echo $row7[2];?></p><br/>
											<?php
											}
											?>
											
											<?php
											}
											?>
									</div>
								</div>
						
							</div>
				       </div>
					   <!-- //Modal1 -->

<!-- //blogs -->
	
	
	
	
	<!-- //Gallery -->
	
	
	<!-- contact -->
<div class="contact" id="comp">
	<div class="contact-top">
		<h3>Complaints</h3>
		<?php
			$id=$_GET['id'];
			$logid=$_SESSION['id'];
			$select11="select * from user where logid=$logid";
				$res11=$obj->exe($select11);
				while($row11=mysqli_fetch_array($res11))
				{
				?>
	</div>
	<div class="container">
		<div class="contact-main w3agile">
			<div class="col-md-7 contact-left">
			  <div class="contact-bottom">
			  	<form name="form_edit11" enctype="multipart/form-data" class="login" action="comppro.php" method="post">
					<input type="text" placeholder="name" value="<?php echo $row11[1];?>" name="uname">
					<textarea placeholder="Complaint" name="comp" ></textarea>
			  		<input type="submit" value="Submit" name="submit" onClick="return vali()">
				
				<?php
				}
				?>
            </form>
			<script type="text/javascript">
function vali()
{
if(document.form_edit11.uname.value=="")
{
alert("Enter Name");
document.form_edit11.uname.focus();
return false;
    }
	if(!(isNaN(document.form_edit11.uname.value)))
{
alert("Only alphabets are allowed");
document.form_edit11.uname.focus();
return false;
}
if(document.form_edit11.comp.value=="")
{
alert("Enter complaint");
document.form_edit11.comp.focus();
return false;
    }
}
</script>
			  </div>
			 </div>
			 <div class="col-md-5 map">
			 </div>
			 <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		   <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- contact -->
<div class="contact" id="editprofile">
	<div class="contact-top">
		<h3>Edit Profile</h3>
	
	</div>
	<?php
			$logid=$_SESSION['id'];
			$sqled="select * from user where logid=$logid ";		  
			$resed=$obj->exe($sqled);
			$rowed=mysqli_fetch_array($resed);
		 
		  ?>
	<div class="container">
		<div class="contact-main w3agile">
			<div class="col-md-7 contact-left">
			  <div class="contact-bottom">
			  	<form name="form_edited" enctype="multipart/form-data" class="login" action="editpro.php" method="post">
				
			  		<input type="text" placeholder="Name" value="<?php echo $rowed[1];?>" name="uname">
					<input type="text" placeholder="Email" value="<?php echo $rowed[2];?>" name="email">
                    <input type="radio" name="gender" value="male" <?php if($rowed[3]=="male"){?> checked="checked" <?php }?>> <label id="label">Male</label>
                    <input type="radio" name="gender" value="female" <?php if($rowed[3]=="female"){?> checked="checked" <?php }?>><label id="label">Female</label>
					<input type="text" placeholder="Phone" value="<?php echo $rowed[4];?>" name="phone">
					<input type="text" placeholder="House Number" value="<?php echo $rowed[5];?>" name="housenum">
					<input type="text" placeholder="User Name" value="<?php echo $rowed[6];?>" name="username">
					
					
			  		<input type="submit" value="Submit" name="submit" onClick="return change()">
				
            </form>
          
			 <script type="text/javascript">
function change()
	{
		if(document.form_edited.uname.value=="")//textbox name=name
{
alert("Enter Your Name");
document.form_edited.uname.focus();
return false;
    }
<!----------alphabets only------------------>
	if(!(isNaN(document.form_edited.uname.value)))
{
alert("Only Alphabets Are Allowed");
document.form_edited.uname.focus();
return false;
}

var email=document.form_edited.email.value;
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; 
 

if(document.form_edited.email.value=="")
{
alert("Enter  Emailid");
document.form_edited.email.focus();
return false;
}

 if(reg.test(email) == false)
 {
	  
        alert("Please Enter a Valid Email id");
        document.form_edited.email.focus();
       return false;
 }	

	if((document.form_edited.gender[0].checked==false) && (document.form_edited.gender[1].checked==false ))//radiobutton name=gender
{
alert("Select Gender");

return false;
}


if(document.form_edited.phone.value=="")
{
alert("Enter  Mobile Number");
document.form_edited.phone.focus();
return false;
}
if((isNaN(document.form_edited.phone.value)))
{
alert("Only numbers are allowed");
document.form_edited.phone.focus();
return false;
}
var phone=document.form_edited.phone.value.length;

var max=10;
if((phone<max) || (phone>max))
{
alert("Please Enter  10 Digit Mobile Phone Number");
document.form_edited.phone.value="";
document.form_edited.phone.focus();
return false;
}
if(document.form_edited.housenum.value=="")
{
alert("Enter Your Housenum");
document.form_edited.housenum.focus();
return false;
    }

  if(document.form_edited.username.value=="")
{
alert("Enter Your Username");
document.form_edited.username.focus();
return false;
}

}
	</script>
			  </div>
			 </div>
			 <div class="col-md-5 map">
			 </div>
		   <div class="clearfix"> </div>
		</div>
	</div>
</div>
	
	<!-- contact -->
	<!-- contact -->
<div class="contact" id="changepass">
	<div class="contact-top">
		<h3>Change Password</h3>
	
	</div>
	
	<div class="container">
		<div class="contact-main w3agile">
			<div class="col-md-7 contact-left">
			  <div class="contact-bottom">
			  	<form name="form_editpw" enctype="multipart/form-data" class="login" action="changepasspro.php" method="post">
			  		<input type="password" placeholder="Current Password" name="cpass">
					<input type="password" placeholder="New Password" name="npass">
                    
					
					
			  		<input type="submit" value="Submit" name="submit" onClick="return changepass()">
				
            </form>
          <script type="text/javascript">
function changepass()
{
	if(document.form_editpw.cpass.value=="")
{
alert("Enter Current Password");
document.form_editpw.cpass.focus();
return false;
    }
	if(document.form_editpw.npass.value=="")
{
alert("Enter New Password");
document.form_editpw.npass.focus();
return false;
    }
	var npass=document.form_editpw.npass.value.length;
	var max=10;
if((npass<max) || (npass>max))
{
alert("password limit is 10");

document.form_editpw.npass.focus();
return false;
}

}
</script>
			
			  </div>
			 </div>
			 <div class="col-md-5 map">
			 </div>
		   <div class="clearfix"> </div>
		</div>
	</div>
</div>
	
	<!-- contact -->
<!-- footer -->
<div class="footer-agile">
	<div class="container">
		<div class="col-md-5 footer-main1">
			<h2>Residence Association</h2>
		</div>
		<div class="col-md-7 footer-main2">
			<h4></h4>
			<p></p>
			<ul>
				<li><a href="#home" class="scroll">Home</a></li>
				<li><a href="#team" class="scroll">Our Services</a></li>
				<li><a href="#viewnot" class="scroll">Notifications</a></li>
				<li><a href="#viewele" class="scroll">Elections</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		 <div class="clearfix"> </div>
		<div class="copyright-agile">
			<p>&copy; 2019 Residence Association. All rights reserved </p>
		</div>
	</div>
</div>
<!-- //footer -->

<!-- js-scripts -->
		
			<!-- js -->
				<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
				<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
			<!-- //js -->
			
			
			<!-- FlexSlider --> 
						<script defer src="js/jquery.flexslider.js"></script>
						<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					  </script>
			<!-- End-slider-script -->
			
<!-- start-smoth-scrolling -->
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
<!-- start-smoth-scrolling -->
<!-- start-smoth-scrolling -->
			
<!--responsive tabs -->

							 <script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});

});
</script>
<!-- // responsive tabs -->
 
 <script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
					
					
 <!-- Popup-Box-JavaScript -->
		<script src="js/modernizr.custom.97074.js"></script>
		<script src="js/jquery.chocolat.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.gallery-item a').Chocolat();
			});
		</script>
		<!-- //Popup-Box-JavaScript -->
	<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
		<script type="text/javascript">
			$(document).ready(function() {
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 100,
					easingType: 'linear'
				};
			});
		</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
		<!-- //Slide-To-Top JavaScript -->

		
	<!-- smooth scrolling -->
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
<!-- //smooth scrolling -->

	<!-- //js-scripts -->
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