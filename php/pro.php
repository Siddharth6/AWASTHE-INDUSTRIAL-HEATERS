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
	
<h1 class="text-center  text-uppercase text-danger mb-5 active" style="margin-top:100px;"> Products</h1>
<div class="row">

	<?PHP
    error_reporting(0);
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'heater');

	$ids= $_GET['id'];


	$query = " SELECT `id`,  `description`, `product` FROM `products`WHERE id='$ids' ";

	$queryfire = mysqli_query($con, $query);
    

    $num = mysqli_num_rows($queryfire);
   

	if($num >0){
		while($product = mysqli_fetch_array($queryfire)){
		?>
			
		<div class="col-lg-3 col-md-3 col-sm-12 " style="margin-top:10px;">
			
		<form style="margin-top:10px;">
            <div class="card-deck">
				<div class="card">
					
					<div class="card-body">
						 <img src="<?php echo $_GET['img'];  ?>" alt="<?php echo $_GET['name'];  ?>" class="img-thumbnail img-fluid mb-2" >

					 

					 <h6 class="badge badge-success"> 4.4 <i class="fa fa-star"> </i> </h6>

					 
                     <h6 class="card-title bg-info text-white p-2  text-center text-uppercase"> <?php echo $_GET['name'];  ?> </h6>


					</div>
					<div class="btn-group d-flex">
                   
						<button class="btn btn-success flex-fill"> Add to cart </button> <button class="btn btn-warning flex-fill text-white"> BUy Now </button>
                        <br/><br/>
                        
                    
                    </div>


				</div>
            </div>

              
			</form>

		</div>
                      <!-- Products description  -->
            <div class="card col-lg-5 col-md-3 col-sm-12" >

                <h6 class="card-title bg-info text-white p-2  text-center text-uppercase mb-5"style="font-family: 'Noto Serif', serif; margin-top:10px;"> Products description</h6>
                  <p style="font-family: 'Noto Serif', serif;">
                    <?php echo $product['description'];?>
                  </p>
            </div>
              <!-- form -->
            <div class="card col-lg-3 col-md-3 col-sm-12" >

                  <h6 class="card-title bg-info text-white p-2  text-center text-uppercase mb-5"style="font-family: 'Noto Serif', serif; margin-top:10px;"> forms</h6>
               <form action="order.php" method="post"> 
                        <p> Name of product: <input type="text" name="productname" class="form-control " value="<?php echo $_GET['name'];?>" placeholder="Enter Your Name" disabled/></p>
                         <p> <input type="text" name="productid" class="form-control " value="<?php echo $_GET['id'];?>" placeholder="Enter Your Name" disabled style="display:none;"><br/>
                              

                            <input type="text" name="cname" class="form-control" placeholder="Enter Your Name" required/><br/>
                            <input type="text" name="number" class="form-control" placeholder="Enter Your Mobile number" required/><br/>
                            <input type="text" name="add" class="form-control" placeholder="Enter Your Address" required/><br/>
                            <input type="text" name="" class="form-control" placeholder="Quantity"><br/>
                            <button class="btn btn-success flex-fill"> buy </button> 

                </form><br/>
            </div>
	<?php		
	 	}
	 }
	?>


</div>
</div><br/>
    
<?php include('../inculdes/footer.php'); ?></body>
</html>