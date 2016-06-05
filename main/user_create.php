<?php
//session_start();
include('../connect.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title> POS </title>
	<link rel="icon" href="images/favicon-96x96.png" type="png/image/x-icon">
	<?php
	require_once('auth.php');
		if($_SESSION['SESS_LAST_NAME']!="Admin" && $_SESSION['SESS_LAST_NAME']!= "admin"){
			
			echo "<h1>Error 404: Page Not Found.</h1>";
			exit();
						
		}
	?>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<!--theme-style-->
	<link href="css/cartstyle.css" rel="stylesheet" type="text/css" media="all" />
	
    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
    <style type="text/css">
      .sidebar-nav {
        padding: 9px 0;
      }
	  .active{
		background-color: #356BA1;
		border-radius: 0px 50px 0px 0px;
	  }

    </style>
	<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />	
	<link href="css/simple-sidebar.css" rel="stylesheet">
	<!--sa poip up-->
	<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
	<!--script src="lib/jquery.js" type="text/javascript"></script-->
	<script src="lib/jquery.min.js" type="text/javascript"></script>
	
	<!--script src="lib/bootstrap.min.js" type="text/javascript"></script-->
	
	<script src="src/facebox.js" type="text/javascript"></script>
	
	<script type="text/javascript">
	  jQuery(document).ready(function($) {
		$('a[rel*=facebox]').facebox({
		  loadingImage : 'src/loading.gif',
		  closeImage   : 'src/closelabel.png'
		})
	  })
	</script>
</head>

<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>
<script>
	function sum() {
				var txtFirstNumberValue = document.getElementById('txt1').value;
				var txtSecondNumberValue = document.getElementById('txt2').value;
				var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
				if (!isNaN(result)) {
					document.getElementById('txt3').value = result;
				}
				 var txtFirstNumberValue = document.getElementById('txt11').value;
				var result = parseInt(txtFirstNumberValue);
				if (!isNaN(result)) {
					document.getElementById('txt22').value = result;				
				}
				 var txtFirstNumberValue = document.getElementById('txt11').value;
				var txtSecondNumberValue = document.getElementById('txt33').value;
				var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
				if (!isNaN(result)) {
					document.getElementById('txt55').value = result;
				}
				 var txtFirstNumberValue = document.getElementById('txt4').value;
				 var result = parseInt(txtFirstNumberValue);
				if (!isNaN(result)) {
					document.getElementById('txt5').value = result;
					}
	}
</script>


<script language="javascript" type="text/javascript">
	/* Visit http://www.yaldex.com/ for full source code
	and get more free JavaScript, CSS and DHTML scripts! */
	<!-- Begin
	var timerID = null;
	var timerRunning = false;
	function stopclock (){
	if(timerRunning)
	clearTimeout(timerID);
	timerRunning = false;
	}
	function showtime () {
	var now = new Date();
	var hours = now.getHours();
	var minutes = now.getMinutes();
	var seconds = now.getSeconds()
	var timeValue = "" + ((hours >12) ? hours -12 :hours)
	if (timeValue == "0") timeValue = 12;
	timeValue += ((minutes < 10) ? ":0" : ":") + minutes
	timeValue += ((seconds < 10) ? ":0" : ":") + seconds
	timeValue += (hours >= 12) ? " P.M." : " A.M."
	document.clock.face.value = timeValue;
	timerID = setTimeout("showtime()",1000);
	timerRunning = true;
	}
	function startclock() {
	stopclock();
	showtime();
	}
	window.onload=startclock;
	// End -->
	//delete confirm
	function userdelete() {
    if (confirm("Are you sure to Delete this user?")) {
        //alert("Clicked Ok");
        return true;
    } else {
        //alert("Clicked Cancel");
        return false;
    }
}
	
</script>

<body>



<div id="wrapper">
<?php include('navfixed.php');?>
	    <div id="sidebar-wrapper" style="background-color: #3C3C3C !important;">
			<ul class="nav nav-list">
				<li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
				<li><a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i> Sales</a>  </li>             
				<li class="" ><a href="products.php?id=cashh&invoice=<?php echo $finalcode ?>&page=<?php echo "1";?>"><i class="icon-list-alt icon-2x"></i> Products</a></li>
				<li><a href="customer.php"><i class="icon-group icon-2x"></i> Customers</a></li>
				<li><a href="supplier.php"><i class="icon-group icon-2x"></i> Suppliers</a></li>
				<li><a href="salesreport.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i> Sales Report</a></li>
				<li><a href="sales_inventory.php"><i class="icon-table icon-2x"></i> Product Inventory</a></li>
				<br><br><br><br><br><br>		
				<li>
				<div class="hero-unit-clock">
					<form name="clock">
						<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
					</form>
				</div>
				</li>
			</ul>

		</div><!--/sidebar-wrapper-->
		
		<a href="#menu-toggle" class="btn btn-info glyphicon glyphicon-menu-hamburger" id="menu-toggle"></a>
		

			<i class="icon-user"></i> Create User

			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="">create User&nbsp;&nbsp;</li>
			</ul>
		
<div id="page-content-wrapper">	
	<div class="container-fluid">
	
	<div class="row">		
		<div class="col-lg-12">
		
		
		<form role="form" method="post" action="deleteuser.php">
            <div class="col-lg-6">
                <!--div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div-->
                <div class="form-group">
                    <label for="InputName">Enter User Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="user_name" id="InputName" placeholder="Enter User Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Position</label>
                    <div class="input-group">
						<select name="user_position" class="form-control" name="InputName" id="InputName" required>
								<option value="">Select Position</option><br/>
								<option value="Admin">Admin</option><br/>
								<option value="Cashier">Cashier</option><br/>
								<option value="Seller">Seller</option>
						</select>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
					</div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="InputEmailSecond" name="user_pass" placeholder="password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="btn_sub" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
			<br/>
			<br/>

			<table class="table">
				<thead>
				  <tr>
					<th>User Name</th>
					<th>Position</th>
					<th>Password</th>
					<th>Action</th>
				  </tr>
				</thead>
				<tbody>
			<?php
				$result = $db->prepare("SELECT * FROM user ORDER BY id DESC");
				$result->execute();				
				for($i=0; $row = $result->fetch(); $i++){
			?>
				  <tr class="success">

				  
					<td><?php echo $row['username'];?></td>
					<td><?php echo $row['position'];?></td>
					<td><?php echo $row['password'];?></td>
					<td><a onClick="return userdelete()" href="deleteuser.php?id=<?php echo $row['id'];?>" class="delbutton"><button class="btn btn-danger"><i class="icon-trash"></i></button></a></td>
				  </tr>				  
			<?php } ?>
				  

				</tbody>
			</table>
				
			
			
			</table>
			
			
		<div class="clearfix"></div>
		</div>
	</div>
	</div>
</div>
</div>


<script>
$("#menu-toggle").click(function(e) {
	e.preventDefault();
	$("#wrapper").toggleClass("toggled");
});
</script>

</body>
	<?php include('footer.php');?>
</html>