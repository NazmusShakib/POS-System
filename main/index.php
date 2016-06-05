<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<title>
POS
</title>
<link rel="icon" href="images/favicon-96x96.png" type="png/image/x-icon">
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
	 <link rel="stylesheet" href="css/font-awesome.min.css">

    <style type="text/css">
    .sidebar-nav {
        padding: 9px 0;
    }
	.active{
		background-color: #356BA1;
		border-radius: 0px 50px 0px 0px;
	  }
    </style>
	
	<!--link href="css/bootstrap-responsive.css" rel="stylesheet"-->
	<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	
	<!--script src="lib/jQuery v1.11.1.js" type="text/javascript"></script-->
	<script src="lib/jquery.min.js" type="text/javascript"></script>
	<script src="lib/bootstrap.min.js" type="text/javascript"></script>
	<link href="css/simple-sidebar.css" rel="stylesheet">
	<!--script src="lib/jquery.js" type="text/javascript"></script-->
	<script src="src/facebox.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		
	  jQuery(document).ready(function($) {
		$('a[rel*=facebox]').facebox({
		  loadingImage : 'src/loading.gif',
		  closeImage   : 'src/closelabel.png'
		})
	  })
	  
	</script>
<?php
	require_once('auth.php');
?>
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
$finalcode=''.createRandomPassword();
?>

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
</script>	
</head>
<body>
<div id="wrapper">
<?php include('navfixed.php');?>

<?php
//$position=$_SESSION['SESS_LAST_NAME'];
//if($position=='cashier') {
?>

<a href="../index.php"></a>
<?php
//}
//if($position=='admin') {
?>

	    <div id="sidebar-wrapper" style="background-color: #3C3C3C !important;">
			<ul class="nav nav-list">
				<li class="active"><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
				<li><a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i> Sales</a>  </li>             
				<li><a href="products.php?id=cashh&invoice=<?php echo $finalcode ?>&page=<?php echo "1";?>"><i class="icon-list-alt icon-2x"></i> Products</a></li>
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
			<ul class="breadcrumb">
				<li class="icon-dashboard">&nbsp;Dashboard&nbsp;&nbsp;</li>
			</ul>		
<div id="page-content-wrapper">	
	
	<div class="container-fluid">
	<div class="row">		
			<center>
			<font style=" font:bold 44px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;">
			Al-MADINA AUTO PARTS
			</font></center>
			<font style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 25px #000; color:#fff;"><center>All Kinds of Motor Baike parts retail and wholesaler</br> 1102, D.T.Road Dhonialapara, Raj Bannijjo Bitan, Chittagong.</br> Mobile: 01817-207660, 01812-686860, 01817-723813, 01819-3017959 <br> Phone: 031-2520905</font>
			</center>
			<div id="mainmain" class="" >
				<a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>" style="background-color:#F5F5F5;"><i class="icon-shopping-cart icon-2x"></i><br> Sales</a>               
				<a href="products.php?id=cashh&invoice=<?php echo $finalcode ?>&page=<?php echo "1";?>" style="background-color:#F5F5F5;"><i class="icon-list-alt icon-2x" style="background-color:#F5F5F5;"></i><br> Products</a>      
				<a href="customer.php" style="background-color:#F5F5F5;"><i class="icon-group icon-2x"></i><br> Customers</a>     
				<a href="supplier.php" style="background-color:#F5F5F5;"><i class="icon-group icon-2x"></i><br> Suppliers</a>     
				<a href="salesreport.php?d1=0&d2=0" style="background-color:#F5F5F5;"><i class="icon-bar-chart icon-2x"></i><br> Sales Report</a>
				<a href="logout.php" style="background-color:#F5F5F5;"><font color="red"><i class="icon-off icon-2x"></i></font><br> Logout</a> 
				<?php
				//}
				?>
		</div>
	</div>
	</div>
</div>
</div>
<div class="footer">
    <div class="">
	<a href="" target="_blank">
		<!--img src="" alt="" class="pull-right" height="20%" width="30%"  /-->
		<!--font class="pull-right footer-font">&copy; <?php echo date('Y');?> — All Rights Reserved.</font-->
	</a>
    </div>
</div>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>



</body>
<?php include('footer.php'); ?>
</html>
