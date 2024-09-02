<?php
include('export.php');
include('inc/header.php');
?>
<title>phpzag.com: Demo Export Data to CSV with Date Filter using PHP</title> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script src="js/datepickers.js"></script>
<style>
.input-daterange input {
  text-align: left;
}
</style>
<?php include('inc/container.php'); ?>
<div class="container">
<h2>Example: Export Data to CSV with Date Filter using PHP</h2>
<br>
<div class="row">
 <form method="post">
  <div class="input-daterange">
   <div class="col-md-4">
	From<input type="text" name="fromDate" class="form-control" value="<?php echo date("Y-m-d"); ?>" readonly />
	<?php echo $startDateMessage; ?>
   </div>
   <div class="col-md-3">
	To<input type="text" name="toDate" class="form-control" value="<?php echo date("Y-m-d"); ?>" readonly />
	<?php echo $endDate; ?>
   </div>
  </div>
  <div class="col-md-2"><div>&nbsp;</div>
   <input type="submit" name="export" value="Export to CSV" class="btn btn-info" />
  </div>
 </form>
</div>
<div class="row">
	<div class="col-md-8">
		<?php echo $noResult;?>
	</div>
</div>
<br />
<table class="table table-bordered table-striped">
 <thead>
  <tr>
   <th>ID</th>
   <th>Name</th>
   <th>Item</th>
   <th>Price</th>
   <th>Date</th>
  </tr>
 </thead>
 <tbody>
  <?php
  foreach($allOrders as $order) {
   echo '
   <tr>
	<td>'.$order["id"].'</td>
	<td>'.$order["cname"].'</td>
	<td>'.$order["item"].'</td>
	<td>$'.$order["value"].'</td>
	<td>'.$order["date"].'</td>
   </tr>
   ';
  }
  ?>
 </tbody>
</table>
</div>
<?php include("inc/footer.php"); ?>