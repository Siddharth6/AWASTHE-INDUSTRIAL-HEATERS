
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Cookie|Mali|Noto+Serif|Parisienne&display=swap" rel="stylesheet">
    <title>PRODUCT DETAILS</title>
    <?php include('../inculdes/links.php'); ?>
   
</head>
<body>
<!-- navbar -->
<?php include('../inculdes/s.php'); ?>
<div class="container " >
	
<h1 class="text-center  text-uppercase text-danger mb-5" 
	style="margin-top:100px;"> Products</h1>
	<div class="row">

	<?PHP
    // error_reporting(0);
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'heater');

	


	$query = " SELECT `id`,`filepath`, `filename`, `product` FROM `products` order by id ASC ";

	$queryfire = mysqli_query($con, $query);
    // print_r( $queryfire);

    $num = mysqli_num_rows($queryfire);
    // print_r($num);

	if($num >0){
		while($product = mysqli_fetch_array($queryfire)){
			?>
			
		<div class="col-lg-3 col-md-3 col-sm-12 " style="margin-top:10px;">
			
			<form style="margin-top:10px;">
				<div class="card">
					
					<div class="card-body">
						 <img src="<?php echo $product['filepath'];  ?>" alt="<?php echo $product['product'];  ?>" class="img-thumbnail img-fluid mb-2" >

					 <h6>  <?php //echo $product['price'];  ?> </h6> 

					 <h6 class="badge badge-success"> 4.4 <i class="fa fa-star"> </i> </h6>

					 <!-- <input type="text" name="" class="form-control" placeholder="Quantity"> -->
                     <h6 class="card-title bg-info text-white p-2  text-center text-uppercase"> <?php echo $product['product'];  ?> </h6>


					</div>
					<div class="btn-group d-flex">
                   
						<!-- <button class="btn btn-success flex-fill"> Add to cart </button> <button class="btn btn-warning flex-fill text-white"> BUy Now </button> -->
                        <br/><br/>
                        <a class='btn btn-success flex-fill text-uppercase' href='pro.php?id=<?php echo $product['id'];?>&img=<?php echo $product['filepath'];?>&name=<?php echo $product['product'];?>'>show interest</a>
                    
                    </div>


				</div>
			</form>

		</div>


	<?php		
		}
	}
	?>


</div>
</div><br/>
    
<?php include('../inculdes/footer.php'); ?></body>
</html>