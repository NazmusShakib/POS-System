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
	<?php require_once('auth.php'); ?>
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
	<script src="lib/bootstrap.min.js" type="text/javascript"></script>
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
<body onLoad="document.getElementById('country').focus();">

<div id="wrapper">
	<?php include('navfixed.php');?>
	    <div id="sidebar-wrapper" style="background-color: #3C3C3C !important;">
			<ul class="nav nav-list">
				<li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
				<li><a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i> Sales</a>  </li>             
				<li><a href="products.php?id=cashh&invoice=<?php echo $finalcode ?>"><i class="icon-list-alt icon-2x"></i> Products</a></li>
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
			<i class="icon icon-money icon-large"></i> Cash
			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="">Cash&nbsp;&nbsp;</li>
			</ul>
	<div id="page-content-wrapper">	
	<div class="container-fluid">
	<div class="row">		
		<div class="col-lg-12">
			<form action="savesales.php" method="post">
				<div id="ac">
				<center><h4><i class="icon icon-money icon-large"></i> Cash</h4></center><hr/>
				
				<h4>Total Payable Amount:</h4>  <h1><?php echo $_GET['total']; ?></h1></br>
				<input type="hidden" name="date" value="<?php echo date("m/d/y"); ?>" />
				<input type="hidden" name="invoice" value="<?php echo $_GET['invoice']; ?>" />
				<input type="hidden" name="amount" value="<?php echo $_GET['total']; ?>" />
				<input type="hidden" name="ptype" value="<?php echo $_GET['pt']; ?>" />
				<input type="hidden" name="cashier" value="<?php echo $_GET['cashier']; ?>" />
				<input type="hidden" name="profit" value="<?php echo $_GET['totalprof']; ?>" />
				<center>
				
				<table>
				<tr>
				<th style="text-align:right">&nbsp;Customer Name:&nbsp;</th>
				<td><input type="text" size="25" value="" name="cname" autocomplete="off" placeholder="Enter Customer Name" style="width: 268px; height:40px;" />
				</td>
				</tr>
				<?php
				$asas="cashh";//$_GET['pt'];
				if($asas=='credit') {
				?>
				Due Date: <input type="date" name="due" placeholder="Due Date" style="width: 268px; height:30px; margin-bottom: 15px;" />
				</br>
				<?php
				}
				if($asas=='cashh') {
				?>
				<tr>
				<th style="text-align:right">&nbsp;Cash:&nbsp;</th>
				<td><input type="number" name="cash" min="<?php echo $_GET['total']; ?>"placeholder="Cash" style="width: 268px; height:42px;  margin-bottom: 15px;"  required/>
				<?php } ?>
				</td>
				</tr>
				<tr>
				<td></td>
				<td><button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button></td>
				</tr>
				</table>				
				</center>
				</div>
			</form>
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
	<?php include('footer.php');?>
</body>

</html>

