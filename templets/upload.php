<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['login_user'])){
    header('location:../admin/login.html?error= login');
}


    $fileExistsFlag = 0; 
    $fileName = $_FILES['Filename']['name'];
    $link = mysqli_connect('localhost','root','','heater') or die("Error ".mysqli_error($link));
    /* 
    *   Checking whether the file already exists in the destination folder 
    */
    $query = "SELECT filename FROM products WHERE filename='$fileName'"; 
    $result = $link->query($query) or die("Error : ".mysqli_error($link));
    while($row = mysqli_fetch_array($result)) {
        if($row['filename'] == $fileName) {
            $fileExistsFlag = 1; 
        }       
    }
    /*
    *   If file is not present in the destination folder
    */
    if($fileExistsFlag == 0) { 
        //second folder
        $target = "doc/";     
        $fileTarget = $target.$fileName;    
        $tempFileName = $_FILES["Filename"]["tmp_name"];
        $productname = $_POST['proname'];
        $fileDescription = $_POST['Description'];   
        $result = move_uploaded_file($tempFileName,$fileTarget);
        /*
        *   If file was successfully uploaded in the destination folder
        */

        ?>

        

        <?php
        if($result) { 
            echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";       
            $query = "INSERT INTO products (filepath,filename,description,product) VALUES ('$fileTarget','$fileName','$fileDescription','$productname')";
            $link->query($query) or die("Error : ".mysqli_error($link));
            // header('location:../admin/dashboard.php?sucess=file uploading');
            echo"<script type='text/javascript'>alert('upload sucessfully .'); document.location ='../admin/dashboard.php?sucess=login'; </script>";
                        
        }
        else {          
            echo "<script>alert('Sorry !!! There was an error in uploading your file');</script>";         
        }
        mysqli_close($link);
    }
    /*
    *   If file is already present in the destination folder
    */
    else {
        echo "File <html><b><i>".$fileName."</i></b></html> already exists in your folder. Please rename the file and try again.";
        echo"<button> back</button>";
        mysqli_close($link);
    }   
?>

<!-- upload other   folder -->

