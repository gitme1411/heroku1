<?php
//include auth.php file on all secure pages
require('db.php');
include("auth.php");
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<head>
	<title>home.</title>
</head>
<body>
	<div class="logo">
		<h2><b style="width: ;"><font size="30">SHOP NAME</font></b></h2>
	</div>
	
	<div class="navigation">
		<a class="active" href="index.php">HOME</a>
		<a href="dashboard.php">DASHBOARD</a>
		<a href="logout.php">LOGOUT</a>
	</div>

	<div class="container-fluid bg-light py-2">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-4">
				<select class="form-control w-50" style="font-weight: 200;" onchange="cat()" id="category">
					<option style="font-weight: 200" value="null">Categories</option>
					<option style="font-weight: 200" value="electronicdevice">Electronic Device</option>
					<option style="font-weight: 200" value="electronicaccessory">Electronic Accessory</option>
					<option style="font-weight: 200" value="clothing">Clothing</option>
				</select>
			</div>
			<div class="col-sm-4"></div>
			<div class="col-sm-1"></div>
		</div>
		<div class="py-2"></div>
		<div class="row">
			<div class="col-sm-1"></div>
	</div>

<div class="row">
<?php
    $fetch_prod = mysqli_query($con, "SELECT * FROM products ORDER BY product_id ASC");

    while($data_products = mysqli_fetch_array($fetch_prod)){
    ?>
    <div class="<?=$data_products['category']?>">
	    <div class="col-md-4">
	        <div class="card" style="width: 18rem; margin-top: 1rem">
	            <!--<img class="card-img-top center" style="padding-top: 1rem; max-height: 17rem; max-width: 17rem" src="./images/<?=$data_products['product_img']?>" alt="OPPO K3">-->
	            <div style="height: 16rem; width: 18rem; background-image: url(./images/<?=$data_products['product_img']?>); background-size: contain; background-repeat: no-repeat; background-position: center;"; background-size: cover;></div>
	            <div class="card-body text-center">
	                <h5 class="card-title"><?= $data_products['product_name']?></h5>
	                <p class="card-text">$<?= $data_products['product_price']?></p>
	                <a href="#" class="btn btn-moreinfo">more info.</a>
	            </div>
	        </div>
	    </div>
    </div>
    <?php
    } 
    ?>
</div>

	<!-- <h2 class="categoryheading">electronic devices.</h2>

	<table class="category">
		<tr>
			<td class="productimg"><img class="img-fluid" style="height: 60%" src="images/oppok3.png"></td>
			<td class="productimg"><img class="img-fluid" style="height: 60%" src="images/samsunggalaxytaba8.png"></td>
			<td class="productimg"><img class="img-fluid" style="height: 60%" src="images/iphonexs.png"></td>
		</tr>
		<tr><td></td></tr>
		<tr>
			<td class="tabletext">OPPO K3</td>
			<td class="tabletext">Samsung Galaxy Tab A8</td>
			<td class="tabletext">iPhone Xs Max 256GB</td>
		</tr>
		<tr>
			<td class="tabletext">$377</td>
			<td class="tabletext">$160</td>
			<td class="tabletext">$1249</td>
		</tr>
	</table>

	<h2 class="categoryheading">electronic accessories.</h2>

	<table class="category">
		<tr>
			<td class="productimg"><img class="img-fluid" style="height: 60%" src="images/airpods2.png"></td>
			<td class="productimg"><img class="img-fluid" style="height: 60%" src="images/athm40x.png"></td>
			<td class="productimg"><img class="img-fluid" style="height: 60%" src="images/gamingmousecorsair.png"></td>
		</tr>
		<tr><td></td></tr>
		<tr>
			<td class="tabletext">AirPods (Gen 2)</td>
			<td class="tabletext">ATH m40x</td>
			<td class="tabletext">Gaming Mouse CORSAIR</td>
		</tr>
		<tr>
			<td class="tabletext">$199</td>
			<td class="tabletext">$99</td>
			<td class="tabletext">$49</td>
		</tr>
	</table>


	<h2 class="categoryheading">clothing.</h2>

	<table class="category">
		<tr>
			<td class="productimg"><img class="img-fluid" style="height: 60%" src="images/tshirt.png"></td>
			<td class="productimg"><img class="img-fluid" style="height: 60%" src="images/hoodie.png"></td>
			<td class="productimg"><img class="img-fluid" style="height: 60%" src="images/pants.png"></td>
		</tr>
		<tr><td></td></tr>
		<tr>
			<td class="tabletext">T-Shirt</td>
			<td class="tabletext">Hoodie</td>
			<td class="tabletext">Pants</td>
		</tr>
		<tr>
			<td class="tabletext">$10</td>
			<td class="tabletext">$20</td>
			<td class="tabletext">$15</td>
		</tr>
	</table> -->

<script type="text/javascript">
	$(".ElectronicDevice").fadeIn();
	$(".ElectronicAccessory").fadeIn();
	$(".Clothing").fadeIn();
	function cat(){
		if($("#category").val() == 'electronicdevice'){
			$(".ElectronicDevice").fadeIn();
			$(".ElectronicAccessory").hide();
			$(".Clothing").hide();
		}
		else if($("#category").val() == 'electronicaccessory'){
			$(".ElectronicDevice").hide();
			$(".ElectronicAccessory").fadeIn();
			$(".Clothing").hide();
		}else if($("#category").val() == 'clothing'){
			$(".ElectronicDevice").hide();
			$(".ElectronicAccessory").hide();
			$(".Clothing").fadeIn();
		}else {
			$(".ElectronicDevice").fadeIn();
			$(".ElectronicAccessory").fadeIn();
			$(".Clothing").fadeIn();
		}
	}
</script>
</body>
</html>