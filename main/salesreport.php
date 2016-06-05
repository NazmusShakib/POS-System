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
	  .active{
		background-color: #356BA1;
		border-radius: 0px 50px 0px 0px;
	  }
    </style>

	<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />	
	<link href="css/simple-sidebar.css" rel="stylesheet">
	<!--sa poip up-->
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script>

	<script src="lib/jquery.min.js" type="text/javascript"></script>
	<script src="lib/bootstrap.min.js" type="text/javascript"></script>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=700, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML;
  var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal;">');
   docprint.document.write(content_vlue);
   docprint.document.close();
   docprint.focus();
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
</SCRIPT>
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
$finalcode=''.createRandomPassword();
?>
<body>
<div id="wrapper">
<?php include('navfixed.php');?>
	<div id="sidebar-wrapper" style="background-color: #3C3C3C !important;">
		<ul class="nav nav-list">
			<li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li><a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i> Sales</a>  </li>             
			<li><a href="products.php?id=cashh&invoice=<?php echo $finalcode ?>&page=<?php echo "1";?>"><i class="icon-list-alt icon-2x"></i> Products</a></li>
			<li><a href="customer.php"><i class="icon-group icon-2x"></i> Customers</a></li>
			<li><a href="supplier.php"><i class="icon-group icon-2x"></i> Suppliers</a></li>
			<li class="active"><a href="salesreport.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i> Sales Report</a></li>
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
		<i class="icon-bar-chart"></i> Sales Report

		<ul class="breadcrumb">
		<li><a href="index.php">Dashboard</a></li> /
		<li class="">Sales Report&nbsp;&nbsp;</li>
		</ul>		
<div id="page-content-wrapper">		
	<div class="container-fluid">
	<div class="row">		
		<div class="col-lg-12">



<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php"><button class="btn btn-danger btn-large" style="float: none;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>

<button  style="float:right;" class="btn btn-success btn-mini"><a href="javascript:Clickheretoprint()"> Print</button></a>

</div>
	<form action="" method="POST">
	<center>	
		<select class="btn btn-success " name="report" onchange="this.form.submit()">
			<option value="1"  <?php if(isset($_POST['report'])){if($_POST['report']==1) {echo "selected";}}?> > Today</option>
			<option value="2"  <?php if(isset($_POST['report'])){if($_POST['report']==2) {echo "selected";}}?> > Last Seven Day's</option>
			<option value="3"  <?php if(isset($_POST['report'])){if($_POST['report']==3) {echo "selected";}}?> > Current Month</option>
			<option value="4"  <?php if(isset($_POST['report'])){if($_POST['report']==4) {echo "selected";}}?> > The Last Month</option>
			
			<!--option value="5"  <?php if(isset($_POST['report'])){if($_POST['report']==5) {echo "selected";}}?> > This Year</option>
			<option value="6"  <?php if(isset($_POST['report'])){if($_POST['report']==6) {echo "selected";}}?> > The Last Year</option-->
		</select>
		<strong>From : <input type="text" style="width: 223px; padding:14px;" name="d1" class="tcal" value="" /> To: <input type="text" style="width: 223px; padding:14px;" name="d2" class="tcal" value="" />
		 <button class="btn btn-info" style="width: 50px; height:50px; margin-top:-8px;margin-left:8px;" type="submit"><i class="icon icon-search icon-large"></i></button>
		</strong>
	</center>
	</form>
		<?php			
		if(!empty($_POST['d1']) && !empty($_POST['d2'])){
			$d1=$_POST['d1'];
			$delimeter = explode("/",$d1);
			$arr = array($delimeter[0],$delimeter[1]-1, $delimeter[2]);
			$d1 = implode("/",$arr);
			$d2=$_POST['d2'];
		}elseif(isset($_POST['report']) || $_POST['report']=1){
			$get_rep = $_POST['report'];
			if($get_rep==1){
				//today
					$d1 = date("m/d/Y",strtotime('-1 days'));
					$d2 = date('m/d/Y',mktime());
			}elseif($get_rep==2){
				//The Last Seven days Week
				$d1 = date("m/d/Y",strtotime('-7 days'));
				$d2 = date('m/d/Y',mktime());
			}elseif($get_rep==3){
				//The Current Month
				$d1 = date('m/00/Y',mktime());
				$d2 = date('m/d/Y',mktime());
			}elseif($get_rep==4){
				//The Last Month
				$date = new DateTime('1 months ago');						
				$prv = $date->format('m/00/Y');
				$current = $date->format('m/t/Y');
				$d1 = $prv;
				$d2 = $current;						
			}elseif($get_rep==5){
				//$date = new DateTime('0 years ago');						
				$prv = date('00/00/Y',mktime());
				$current = date('m/d/Y',mktime());
				$d1 = $prv;
				$d2 = $current;						
			}elseif($get_rep==6){
				//The Last Month
				$date = new DateTime('1 months ago');						
				$prv = $date->format('m/00/Y');
				$current = $date->format('m/t/Y');
				$d1 = $prv;
				$d2 = $current;						
			}
		}else{
				$d1 = $d2 =  0;
			}
		?>

<div class="content" id="content">
<div style="font-weight:bold; text-align:center;font-size:14px;margin-bottom: 15px;">
Al-MADINA AUTO PARTS</br>
Sales Report from&nbsp;

	<div style="font-size:20px ">
		<?php
			if(!empty($d1)){
					$del= explode("/",$d1);
					$ar = array($del[0],$del[1]+1, $del[2]);
					echo $d1 = implode("/",$ar);

					$p = explode("/",$d1);
					$pp = array($p[0],$p[1]-1, $p[2]);
					$d1 = implode("/",$pp);
					
					$d1_len = strlen($d1);
					if($d1_len==9){
					$d1 = substr_replace($d1, '0', 3, 0);
					}
			}
		?>
		&nbsp;to&nbsp;<?php if(!empty($d2)){echo $d2;} ?>
	</div>
</div>
<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th width="13%"> Transaction ID </th>
			<th width="13%"> Transaction Date </th>
			<th width="20%"> Customer Name </th>
			<th width="16%"> Invoice Number </th>
			<th width="18%"> Amount </th>
			<th width="13%"> Profit </th>
		</tr>
	</thead>
	<tbody>
		
			<?php
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM sales WHERE date BETWEEN :a AND :b ORDER by transaction_id DESC ");
				$result->bindParam(':a', $d1);
				$result->bindParam(':b', $d2);
				$result->execute();
				
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td>STI-00<?php echo $row['transaction_id']; ?></td>
			<td><?php echo $row['date']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['invoice_number']; ?></td>
			<td><?php
			$dsdsd=$row['amount'];
			echo formatMoney($dsdsd, true);
			?></td>
			<td><?php
			$zxc=$row['profit'];
			echo formatMoney($zxc, true);
			?></td>
			</tr>
			<?php
				}
			?>
	</tbody>
	<thead>
		<tr>
			<th colspan="4" style="border-top:1px solid #999999"> Total: </th>
			<th colspan="1" style="border-top:1px solid #999999"> 
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
				$results = $db->prepare("SELECT sum(amount) FROM sales WHERE date BETWEEN :a AND :b ");
				$results->bindParam(':a', $d1);
				$results->bindParam(':b', $d2);
				$results->execute();
				for($i=0; $rows = $results->fetch(); $i++){
				$dsdsd=$rows['sum(amount)'];
				echo formatMoney($dsdsd, true);
				}
				?>
			</th>
				<th colspan="1" style="border-top:1px solid #999999">
			<?php 
				$resultia = $db->prepare("SELECT sum(profit) FROM sales WHERE date BETWEEN :c AND :d");
				$resultia->bindParam(':c', $d1);
				$resultia->bindParam(':d', $d2);
				$resultia->execute();
				for($i=0; $cxz = $resultia->fetch(); $i++){
				$zxc=$cxz['sum(profit)'];
				echo formatMoney($zxc, true);
				}
				?>
		
				</th>
		</tr>
	</thead>
</table>
</div>
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