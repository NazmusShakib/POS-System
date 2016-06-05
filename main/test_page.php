<?php
include('../connect.php');
require_once('auth.php');


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

	<link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
	.input-group[class*="col-"] {
    padding-right: 15px;
    padding-left: 15px;
    }
	.popover   {
	background-color: #e74c3c;
	color: #ecf0f1;
	width: 120px;
	}
	.popover.right .arrow:after {
		border-right-color: #e74c3c;
	}
	
    </style>

	<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
	
	    <!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">	
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />	

	
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	
	
	<script type="text/javascript">
	  jQuery(document).ready(function($) {
		$('a[rel*=facebox]').facebox({
		  loadingImage : 'src/loading.gif',
		  closeImage   : 'src/closelabel.png'
		})
	  })
	</script>
	

	<!--sa poip up
	<script src="lib/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js"></script>		
	


<script type="text/javascript">
  	$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').focus()
	})
</script-->

				<h4 class="modal-title">Open Cart Items</h4>
				<?php
					if(!empty($_SESSION['cart'])){
						$wherIn = Implode(',', $_SESSION['cart']);						
						echo "SELECT * FROM products WHERE product_id IN($wherIn)";
						
				?>
				
							<h2>Bordered Table</h2>
					  <p>The .table-bordered class adds borders to a table:</p>            
					  <table class="table table-bordered">
						<thead>
						  <tr>
							<th>Product Name</th>
							<th>Generic Name</th>
							<th>Category / Description</th>
							<th>Price</th>
							<th>Qty</th>
							<th>Amount</th>
							<th>Profit</th>
							<th>Action</th>
						  </tr>
						</thead>
						<?php

						$sql = $db->prepare("SELECT * FROM products WHERE product_id IN($wherIn)");
						$sql->execute();
						for($i=0; $row = $sql->fetch(); $i++){
							
						?>
						<tbody>
						  <tr>
							<td><?php echo $row['product_name']; ?></td>
							<td><?php echo $row['gen_name']; ?></td>
							<td>july@example.com</td>
							<td><?php
									$ppp=$row['price'];
									echo formatMoney($ppp, true);
								?>
							</td>
							<td><?php echo $row['qty']; ?></td>
							<td>
							<?php
								$dfdf=$row['price'];
								echo formatMoney($dfdf, true);
							?>
							</td>
							<td>
							<?php
								$profit=$row['profit'];
								echo formatMoney($profit, true);
							?>
							</td>
							<td>
							<a href="delete_cart.php?proid=<?php echo $row['product_id']; ?>"><button class="btn btn-mini btn-warning"><i class="icon icon-remove"></i> Cancel </button></a>
							</td>
						  </tr>
						</tbody>
			<?php
						}
							}
			?>
							  </table>
							  <br/>
					
					<a rel="facebox" href="checkout.php?pt=cash&invoice=<?php echo $finalcode;?>&total=<?php echo "gettotal";?>&totalprof=<?php echo "gettotalprof"; ?>&cashier=<?php echo $_SESSION['SESS_FIRST_NAME']?>">
					<button class="btn btn-success btn-large btn-block"><i class="icon icon-save icon-large"></i> SALL</button>
					</a>
					
					
					
					<a rel="facebox" href="checkout.php?pt=<?php echo $_GET['id']?>&invoice=<?php echo $_GET['invoice']?>&total=<?php echo $fgfg ?>&totalprof=<?php echo $asd ?>&cashier=<?php echo $_SESSION['SESS_FIRST_NAME']?>"><button class="btn btn-success btn-large btn-block"><i class="icon icon-save icon-large"></i> SAVE</button></a>
					
					
					 
			<div class="modal-body">
			  .....
					
			</div>
			
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
		$sdsd=$_GET['invoice'];
		$resultas = $db->prepare("SELECT sum(amount) FROM sales_order WHERE invoice= :a");
		$resultas->bindParam(':a', $sdsd);
		$resultas->execute();
		for($i=0; $rowas = $resultas->fetch(); $i++){
		$fgfg=$rowas['sum(amount)'];
		echo formatMoney($fgfg, true);
		}
		
?>