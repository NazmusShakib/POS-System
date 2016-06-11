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
</script>

<body>



<div id="wrapper">
<?php include('navfixed.php');?>
	    <div id="sidebar-wrapper" style="background-color: #3C3C3C !important;">
			<ul class="nav nav-list">
				<li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
				<li><a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i> Sales</a>  </li>             
				<li class="active" ><a href="products.php?id=cashh&invoice=<?php echo $finalcode ?>&page=<?php echo "1";?>"><i class="icon-list-alt icon-2x"></i> Products</a></li>
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
		

			<i class="icon-table"></i> Products

			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="">Products&nbsp;&nbsp;</li>
			</ul>
		
<div id="page-content-wrapper">	
	<div class="container-fluid">
	
	<div class="row">		
		<div class="col-lg-12">


		<div style="margin-top: -19px; margin-bottom: 21px;">
			<a  href="index.php"><button class="btn btn-danger btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
			<div style="float:right;">
			<a rel="facebox" href="sales_pagecopy.php?pt=<?php echo $_GET['id']?>&invoice=<?php echo $_GET['invoice']?>&page=<?php echo $_GET['page']?>"><Button type="submit" class="btn btn-success" /><i class="icon-shopping-cart icon-large">
				<?php include('../connect.php');
				$result = $db->prepare("SELECT * FROM sales_order where invoice = :inv");
				$result->bindParam(':inv',$_GET['invoice']);
				$result->execute();
				echo $rowcount = $result->rowcount();
				?></i>
			</a>
			</div>
			
			<?php 
			//include('../connect.php');
				$result = $db->prepare("SELECT * FROM products ORDER BY qty_sold DESC");
				$result->execute();
				$rowcount = $result->rowcount();
			?>
			<?php
					if(isset($_POST['qtyy'])){
						$result = $db->prepare("SELECT * FROM products where qty <=:b ORDER BY product_id DESC");
						$result->bindParam(':b',$_POST['qtyy']);
						$result->execute();
						$rowcount123 = $result->rowcount();
						echo $rowcount123 ;						
					}
			?>
			
			<?php 
			//include('../connect.php');
				if(isset($_POST['report'])){
					$get_rep = $_POST['report'];
					$result = $db->prepare("SELECT * FROM products where qty < :aa ORDER BY product_id DESC");
					$result->bindParam(':aa', $get_rep);
					$result->execute();
					$rowcount123 = $result->rowcount();
				}else{
					$result = $db->prepare("SELECT * FROM products where qty < 10 ORDER BY product_id DESC");
					$result->execute();
					$rowcount123 = $result->rowcount();
				}
			?>
			<div style="text-align:center;">
				Total Number of Products:  <font color="green" style="font:bold 22px 'Aleo';">[<?php echo $rowcount;?>]&nbsp; |</font>
				<font style="color:rgb(255, 95, 66);; font:bold 22px 'Aleo';">&nbsp;[<?php echo $rowcount123;?>]</font> Products are below QTY of 10
				<form action="" method="POST">
					<input autocomplete="off" type="number" name="qtyy" min="0" id="" class="btn btn-default" placeholder="Qty Left" style="width: 100px; height:30px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px;" />	
					<input class="btn btn-success" type="submit" value="View" />
				</form>
			</div>
		</div>

			<input type="text" style="padding:15px;" name="filter" value="" id="filter" placeholder="Search Product..." autocomplete="off" />
			<a rel="facebox" href="addproduct.php?cashh=<?php echo $_GET['id'];?>&invoice=<?php echo $_GET['invoice'];?>&page=<?php echo $_GET['page'];?>"><Button type="submit" class="btn btn-success" style="float:right; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> Add Product</button></a>
					
			<br/><br/>
			
				<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
					<thead>
						<tr>
							<th width="12%"> Brand Name </th>
							<th width="14%"> Generic Name </th>
							<th width="14%"> Part Number </th>
							<th width="13%"> Category / Description </th>
							<th width="7%"> Supplier </th>
							<th width="9%"> Date Received </th>
							<th width="6%"> Original Price </th>
							<th width="6%"> Selling Price </th>
							<th width="6%"> QTY </th>
							<th width="5%"> Qty Left </th>
							<th width="8%"> Total </th>
							<th width="8%"> Action </th>
						</tr>
					</thead>
					<tbody>
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
						
						//include('../connect.php');
						
						if(isset($_POST['qtyy'])){
						$result = $db->prepare("SELECT *, price * qty as total FROM products WHERE qty<= :qq ORDER BY product_id DESC");
						$result->bindParam(':qq', $_POST['qtyy']);			
						}else{
							$page=$_GET['page'];
							if($page==""|| $page=="1"){
								$page1= 0;
							}else{
								$page1 = ($page*10)-10;
							}
						$result= $db->prepare("SELECT *, price * qty as total FROM products LIMIT {$page1}, 10");							
						}
						$result->execute();				
						for($i=0; $row = $result->fetch(); $i++){
						$total=$row['total'];
						$availableqty=$row['qty'];
						if ($availableqty < 10) {
						echo '<tr class="alert alert-warning record" style="color: #fff; background:rgb(255, 95, 66);">';
						}
						else {
						echo '<tr class="record">';
						}
						?>
						<td><?php echo $row['product_code']; ?></td>
						<td><?php echo $row['gen_name']; ?></td>
						<td><?php echo $row['expiry_date']; ?></td>
						<td><?php echo $row['product_name']; ?></td>
						<td><?php echo $row['supplier']; ?></td>
						<td><?php echo $row['date_arrival']; ?></td>
						<td><?php
						$oprice=$row['o_price'];
						echo formatMoney($oprice, true);
						?></td>
						<td><?php
						$pprice=$row['price'];
						echo formatMoney($pprice, true);
						?></td>
						<td><?php echo $row['qty_sold']; ?></td>
						<td><?php echo $row['qty']; ?></td>
						<td>
						<?php
						$total=$row['total'];
						echo formatMoney($total, true);
						?>
						</td>
						<td>
						<a rel="facebox" title="Click to edit the product" href="editproduct.php?id=<?php echo $row['product_id']; ?>&cashh=<?php echo $_GET['id'];?>&invoice=<?php echo $_GET['invoice'];?>&page=<?php echo $_GET['page'];?>"><button class="btn btn-warning"><i class="icon-edit"></i></button> </a>
						
						<a href="#" id="<?php echo $row['product_id']; ?>" class="delbutton" title="Click to Delete the product"><button class="btn btn-danger"><i class="icon-trash"></i></button></a>
						
						<form action="inin.php" method="post" >
							<input type="hidden" name="pt" value="<?php echo $_GET['id']; ?>" />
							<input type="hidden" name="page" value="<?php echo $_GET['page']; ?>" />
							<input type="hidden" name="invoice" value="<?php echo $_GET['invoice'];	?>" />
							<input type="hidden" name="product" value="<?php echo $row['product_id'];?>" />
							
							<input type="hidden" name="discount" value="" autocomplete="off" style="width: 68px; height:30px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px;" />
							<input type="hidden" name="date" value="<?php echo date("m/d/y"); ?>" />
							
							<div class="btn btn-info">
							<input class="btn btn-info" type="number" name="qty" value="1" min="1" max="<?php echo $row['qty']; ?>" placeholder="Qty" autocomplete="off" style="width: 60px; height:30px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px;" required />			
							
							<Button class="btn btn-info" type="submit"  ><i class="icon-plus-sign icon-large"></i> </button>
							</div>
						</form>
						</td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			  <!--Pagination Start-->  
			<section class="archive-pagess">
			<ul class="pagination">
				<?php
					$result = $db->prepare("SELECT * FROM products");
					$result->execute();
					$rowcount123 = $result->rowcount();
					//
					$a = $rowcount123/10;
					//echo $rowcount123;
					//echo "</br>".$a;
					$a = ceil($a);
					?>
					<li class="first <?php if($_GET['page']==1){ echo "active";}?>" ><a href="products.php?id=<?php echo $_GET['id'];?>&invoice=<?php echo $_GET['invoice'];?>&page=1" title="first page">First</a></li>
					<li class="previous"><a href="products.php?id=<?php echo $_GET['id'];?>&invoice=<?php echo $_GET['invoice'];?>&page=<?php echo $_GET['page']-1;?>" title="previous page">< </a></li>
					<?php
					for ($b=1; $b<=$a;$b++){
					?>
					<li class="<?php if($_GET['page']==$b){ echo "active";}?>"><a href="products.php?id=<?php echo $_GET['id'];?>&invoice=<?php echo $_GET['invoice'];?>&page=<?php echo $b;?>" style="text-decoration:none;"><?php echo $b." "; ?></a></li>	
					<?php
						}
					?>
				<li class="next "><a href="products.php?id=<?php echo $_GET['id'];?>&invoice=<?php echo $_GET['invoice'];?>&page=<?php echo $_GET['page']+1;?>" title="next page">> </a></li>
				<li class="last <?php if($_GET['page']==$a){ echo "active";}?>""><a href="products.php?id=<?php echo $_GET['id'];?>&invoice=<?php echo $_GET['invoice'];?>&page=<?php echo $a;?>" title="last page">Last </a></li>	
			</ul>
			</section>
			  <!--End pagination-->
		<div class="clearfix"></div>
		</div>
	</div>
	</div>
</div>
</div>
<div class="footer">
    <div class="">
	<a href="" target="_blank">
		<!--img src="" alt="logo" class="pull-right" height="20%" width="30%"  /-->
		<font class="pull-right footer-font"></font>
	</a>
    </div>
</div>
<script type="text/javascript">
	$(function() {
	$(".delbutton").click(function(){
	//Save the link in a variable called element
	var element = $(this);
	//Find the id of the link that was clicked
	var del_id = element.attr("id");
	//Built a url to send
	var info = 'id=' + del_id;
	 if(confirm("Sure you want to delete this Product? There is NO undo!"))
			  {
	 $.ajax({
	   type: "GET",
	   url: "deleteproduct.php",
	   data: info,
	   success: function(){
	   }
	 });
			 $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
			.animate({ opacity: "hide" }, "slow");
	 }
	return false;
	});
	});
</script>

<script>
$("#menu-toggle").click(function(e) {
	e.preventDefault();
	$("#wrapper").toggleClass("toggled");
});
</script>

</body>
	<?php include('footer.php');?>
</html>