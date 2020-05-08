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
					  <h2>Approve Service Requests</h2>
					  
					 <?php
			
			$select="select * from serpro";
			$res=$obj->exe($select);
			?>
					 	
							<form name="form_edit" method="post" enctype="multipart/form-data" class="login"  action="sms.php">
                
                <table class="table">
                    
					<tr><td><label>Provider Number</label></td><td>
                    <input type="text" name="sernum" required="required" placeholder="Number" >
										

					
<?php
			$id=$_GET['id'];
			$select2="select * from serreq where srid=$id ";
			$res2=$obj->exe($select2);
			while($row2=mysqli_fetch_array($res2))
{

			?>

 <?php

}
?>
<tr><td><label> Message</label></td><td>
                    <textarea rows="5" cols="60" name="message" placeholder="Message" required="required"  ></textarea></td></tr>
					   <tr><td>
 <input type="hidden" name="id" value="<?php echo $id;?>" placeholder="Service" /></td></tr>

                </table>
				<input type="submit" name="submit" value="Send Sms" onClick="return valid()" >
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
	
	if(document.form_edit.sernum.value=="")
{
alert("Enter Contact Number");
document.form_edit.sernum.focus();
return false;
    }
var sernum=document.form_edit.sernum.value.length;
if((isNaN(document.form_edit.sernum.value)))
{
alert("Only numbers are allowed");
document.form_edit.sernum.focus();
return false;
}
var max=12;
if((sernum<max) || (sernum>max))
{
alert("Include 91 in number And Limit is 10");

document.form_edit.sernum.focus();
return false;
}
if(document.form_edit.message.value=="")
{
alert("Enter Message");
document.form_edit.message.focus();
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
