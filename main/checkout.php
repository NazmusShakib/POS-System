
<form action="savesales.php" method="post">
<div id="ac">
<center><h4><i class="icon icon-money icon-large"></i> Cash</h4></center><hr>
<input type="hidden" name="date" value="<?php echo date("m/d/y"); ?>" />

<input type="hidden" name="invoice" value="<?php echo $_GET['invoice']; ?>" />
<input type="hidden" name="amount" value="<?php echo $_GET['total']; ?>" />
<input type="hidden" name="ptype" value="<?php echo $_GET['pt']; ?>" />
<input type="hidden" name="cashier" value="<?php echo $_GET['cashier']; ?>" />
<input type="hidden" name="profit" value="<?php echo $_GET['totalprof']; ?>" />

<center>
<table>
<tr>
	<td>Customer Name:</td>
	<td><input type="text" size="25" value="" name="cname" autocomplete="off" placeholder="Enter Customer Name" style="width: 268px; height:40px;" /></td>
</tr>
<?php
$asas="cash";//$_GET['pt'];
if($asas=='credit') {
?>Due Date:<input type="date" name="due" placeholder="Due Date" style="width: 268px; height:40px; margin-bottom: 15px;" /><br>
<?php
}
if($asas=='cash') {
?>
<tr>
	<td>Cash:</td>
	<td><input type="number" min=<?php echo $_GET['total']; ?> name="cash" placeholder="Cash" style="width: 268px; height:40px;  margin-bottom: 15px;"  required/></td>
<?php } ?>
</tr>
</table>
<button class="btn btn-success btn-block btn-large" style="float: right;width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
</center>
</div>
</form>
