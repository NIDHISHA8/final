<?php
session_start();
include('connection.php');
if(!isset($_SESSION['logged_user'])){
	header("Location:login1.html");
}
?>
<html>
<head>
<style>
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}
	
	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}
	
	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}
	
	
	
	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}
	
}
</style>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<?php

	if(isset($_GET['iid'])){
				
		$iid=$_GET['iid'];
		$q=mysqli_query($dbc,"select * from menu where item_id=$iid");
		$qu=mysqli_fetch_array($q);
		$inm=$qu['item_name'];
		$price=$qu['price'];
		$std_id=$_SESSION['std_id'];
		$total=$price;
		$que=mysqli_query($dbc,"insert into cart (`std_id`,`mid`,`inm`,`price`,`total`) values('$std_id','$iid','$inm','$price','$total')");
		if($que==1){
		header("Location:menu.php");
	}
}
	else{
$q=mysqli_query($dbc,"select * from cart");
$c=mysqli_num_rows($q);
if($c<=0){
	echo 'No Items in your Cart!';
}
else{



?>
<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
					<?php
					$tot=0;
					while($qu=mysqli_fetch_array($q)){
						$tot=$tot+$qu['total'];
						$_SESSION['tot']=$tot;
						echo '

						<tr>
							<td data-th="Product">
								<div class="row">
									
									<div class="col-sm-10">
										<h4 class="nomargin">'.$qu['inm'].'</h4>
										
									</div>
								</div>
							</td>
							<td data-th="Price">'.$qu['price'].'</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="'.$qu['qty'].'">
							</td>
							<td data-th="Subtotal" class="text-center">'.$qu['total'].'</td>
							<!--<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
							</td>-->
						</tr>
						';
					}
					echo '</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>'.$_SESSION['tot'].'</strong></td>
						</tr>
						<tr>
							<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>'.$_SESSION['tot'].'</strong></td>
							<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
							<td><a href="menu.php" class="btn btn-success btn-block">Browse More items <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
					';

					}}?>
					
				</table>
</div>
</body>
</html>
































