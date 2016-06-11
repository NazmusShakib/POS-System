<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<title>POS</title>
<link rel="icon" href="images/favicon-96x96.png" type="png/image/x-icon">
<?php 
require_once('auth.php');
?>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      .sidebar-nav {
        padding: 9px 0;
      }
	  #customer { overflow: hidden; }
		#customer-title { font-size: 20px; font-weight: bold; float: left; }
		#meta { margin-top: 1px; width: 300px; float: right; }
		#meta td { text-align: right;  }
		#meta td.meta-head { text-align: left; background: #eee; }
		#meta td textarea { width: 100%; height: 20px; text-align: right; }
		tr td {text-align: right;}
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
<script language="javascript">
	function Clickheretoprint()
	{
	  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
		  disp_setting+="scrollbars=yes,width=800, height=400, left=100, top=25"; 
	  var content_vlue = document.getElementById("content").innerHTML; 
	  
	  var docprint=window.open("","",disp_setting); 
	   docprint.document.open(); 
	   docprint.document.write('</head><body onLoad="self.print()" style="font-size: 13px; font-family: arial;">');          
	   docprint.document.write(content_vlue); 
	   docprint.document.close(); 
	   docprint.focus(); 
	}
</script>
<?php
	$invoice=$_GET['invoice'];
	include('../connect.php');
	$result = $db->prepare("SELECT * FROM sales WHERE invoice_number = :userid");
	$result->bindParam(':userid', $invoice);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
	$cname=$row['name'];
	$invoice=$row['invoice_number'];
	$date=$row['date'];
	$cash=$row['due_date'];
	$cashier=$row['cashier'];

	$pt=$row['type'];
	$am=$row['amount'];
	if($pt=='cash'){
	$cash=$row['due_date'];
	$amount=$cash-$am;
	}
	}
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
</SCRIPT>
<div id="wrapper">
<?php include('navfixed.php');?>
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
		
<div id="page-content-wrapper">		
	<div class="container-fluid">
	<div class="row">		
	<div class="col-lg-12">
	<a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>">
	<button class="btn btn-danger"><i class="icon-arrow-left"></i> Back to Sales</button></a>

<div class="content" id="content">
	<center>
	<div style="font:bold 25px 'Aleo';">Sales Receipt</div>
		<img src="images/almadinalogo.png" alt="Al-Madina" /></br>
		<font style=" font:bold 44px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;">
		Al-MADINA AUTO PARTS
		</font></br>
		<font style=" font:bold 15px 'Aleo'; text-shadow:1px 1px 25px #000; color:#fff;">
		All Kinds of Motor Baike parts retail and wholesaler</br>1102, D.T.Road Dhonialapara, Raj Bannijjo Bitan, Chittagong.</br> Mobile: 01817-207660, 01812-686860, 01817-723813, 01819-3017959 | Phone: 031-2520905
		</font>
	</center>
	<table class="pull-rightt">
		<tbody>
		<tr>	
		<td>Name :&nbsp;</td><td>..................................</td>
		</tr>
		<tr>	
		<td>Address :&nbsp;</td><td>................................</td>
		</tr>
		<tr>
			<td>Invoice :&nbsp;</td>
			<td><?php echo $invoice; ?></td>
		</tr>
		<tr>
			<td>Date :&nbsp;</td>
			<td><div id="date"><?php echo $date; ?></div></td>
		</tr>
	</table>
	
	<div class="clearfix"></div>

	</br></br>
	<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;	text-align:left;" width="100%">
		<thead>
			<tr>
				<th width="90"> Product Code </th>
				<th> Product Name </th>
				<th> Qty </th>
				<th> Price </th>
				<!--th> Discount </th-->
				<th> Amount </th>
			</tr>
		</thead>
		<tbody>
				<?php
					$id=$_GET['invoice'];
					$result = $db->prepare("SELECT * FROM sales_order WHERE invoice= :userid");
					$result->bindParam(':userid', $id);
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
				?>
				<tr class="record">
				<td><?php echo $row['product_code']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo '<input type="number" value="'.$row['qty'].'"\>'; ?></td>
				<td>
				<?php
					$ppp=$row['price'];
					echo '<input type="text" value="'.formatMoney($ppp, true).'"\>';
				?>
				</td>
				<!--td>
				<?php
					//$ddd=$row['discount'];
					//echo formatMoney($ddd, true);
				?>
				</td-->
				<td>
				<?php
				$dfdf=$row['amount'];
				echo '<input type="text" value="'.formatMoney($dfdf, true).'"\>';
				?>
				</td>
				</tr>
				<?php
					}
				?>
				<tr>
					<td colspan="4" style="text-align:right;"><strong style="font-size: 12px;">Total: &nbsp;</strong></td>
					<td colspan="1"><strong style="font-size: 12px;">
					<?php
					$sdsd=$_GET['invoice'];
					$resultas = $db->prepare("SELECT sum(amount) FROM sales_order WHERE invoice= :a");
					$resultas->bindParam(':a', $sdsd);
					$resultas->execute();
					for($i=0; $rowas = $resultas->fetch(); $i++){
					$fgfg=$rowas['sum(amount)'];
					echo '<input type="text" value="'.formatMoney($fgfg, true).'"\>';
					}
					?>
					</strong></td>
				</tr>
				<?php if($pt=='cash'){
				?>
				<tr>
					<td colspan="4"style=" text-align:right;"><strong style="font-size: 12px; color: #222222;">Cash Tendered:&nbsp;</strong></td>
					<td colspan="1"><strong style="font-size: 12px; color: #222222;">
					<?php
						echo '<input type="text" value="'.formatMoney($cash, true).'"\>';
					?>
					</strong></td>
				</tr>
				<?php
				}
				?>
				<tr>
					<td colspan="4" style=" text-align:right;"><strong style="font-size: 12px; color: #222222;">
					<font style="font-size:20px;">
					<?php
						if($pt=='cash'){
						echo 'Change:';
						}
						if($pt=='credit'){
						echo 'Due Date:';
						}
					?>&nbsp;
					</strong></td>
					<td colspan="1"><strong style="font-size: 15px; color: #222222;">
					<?php
					function formatMoney($number, $fractional=false) {
						if ($fractional) {
							$number = sprintf('%.2f', $number);
						}
						while (true) {
							$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
							if ($replaced != $number) {
								$number = $replaced;
							} else {
								break;
							}
						}
						return $number;
					}
					if($pt=='credit'){
					echo $cash;
					}
					if($pt=='cash'){
					echo '<input type="text" value="'.formatMoney($amount, true).'"\>';
					}
					?>
					</strong></td>
				</tr>
		</tbody>
	</table>
	</br>
	</br>
	</br>
	<div class="footer">
		<table>
			<tr>
				<td  width="85%"><div class="pull-left">Customer Signature: _ _ _ _ _ _</div></td>
				<td width="20%" style="text-align:right;"> <font style="font-weight: bold;">Sales By: </font><?php echo $_SESSION['SESS_LOGIN_NAME'];?></td>
			</tr>
		</table>
	</div>
	</div>
	</div>
	
	<div class="pull-right" style="margin-right:100px;">
		<a href="javascript:Clickheretoprint()" style="font-size:20px;"><button class="btn btn-success btn-large"><i class="icon-print"></i> Print</button></a>
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


