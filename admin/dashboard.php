<?php

session_start();
if(!isset($_SESSION['login_user'])){
    header('location:login.php?login');
}
error_reporting(0);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
          
        <!-- Our Custom CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/das.css">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css"> -->
    </head>
    <body>
        
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3 style="font-size: 20px;"><?php echo $_SESSION['login_user']; ?> </h3>
                </div>

                <ul class="list-unstyled components">
                    
                    <li class="active">
                        <a href="" >Home</a>
                        
                    </li>
                    <li>
                        <a href="#"id="Product">Upload Product</a>
                        
                        
                    </li>
                    <li>
                        <a href="#">Manage Product</a>
                    </li>
                    <li>
                        <a href="#">Respond</a>
                    </li>
                    <li>
                        <a href="#">Message</a>
                    </li>
                    
                    
                    
                </ul>

                
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <!-- <i class="glyphicon glyphicon-align-left"></i> -->
                                <i class="fa fa-align-left"></i>
                                <span><?php echo $_SESSION['login_user']; ?></span>
                            </button>
                        </div>
                        <div class="navbar-header">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="../php/logout.php">Logout</a></li>
                            </ul>
                        </div>
                        <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href=""></a></li>
                            </ul>
                        </div> -->
                    </div>
                </nav>
                
                <div class=" card Product" style="display: none;">
                	<div class=" card-body">
                	   <form method="post" action="../php/up.php" enctype="multipart/form-data">
                       <input type="text" class="form-control "name="proname" placeholder="Enter The Product Name" required/> <br/>
					    <input type="file" class="form-control "name="Filename"> 
					    <p>Description</p>
					    <textarea rows="10" cols="40"  class="form-control"name="Description" placeholder="Enter The Product Description" placeholder="type any Description"></textarea>
					    <br/>
					    <input TYPE="submit" class="btn btn-outline-success"name="upload" value="Submit"/>
					</form>
                </div>
            </div>
        </div>

        



        <?php if(empty($_SESSION['role']) || empty($_SESSION['login_user'])){ ?>
            <!-- <script type='text/javascript'>
                $(document).ready(function(){
                    $('#test').show();  
                    // $('.wrapper').hide();
                    // $(".wrapper *").prop('disabled',true);
                });
            </script> -->
        <?php } ?>

        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
               

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });

                $('#Product').on('click' ,function(){
                	$('.Product').toggle();

                });
            });
        </script>
    </body>
</html>



