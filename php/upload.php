<?php
session_start();
if(!isset($_SESSION['login_user'])){
    header('location:../admin/login.html?error= login');
}
error_reporting(0);

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
        $target = "../admin/doc/";     
        $fileTarget = $target.$fileName;    
        $tempFileName = $_FILES["Filename"]["tmp_name"];
        $fileDescription = $_POST['Description'];   
        $result = move_uploaded_file($tempFileName,$fileTarget);
        /*
        *   If file was successfully uploaded in the destination folder
        */

        ?>

        

        <?php
        if($result) { 
            echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";       
            $query = "INSERT INTO products (filepath,filename,description) VALUES ('$fileTarget','$fileName','$fileDescription')";
            $link->query($query) or die("Error : ".mysqli_error($link));
            header('location:../admin/dashboard.php?sucess=file uploading');
                        
        }
        else {          
            echo "Sorry !!! There was an error in uploading your file";         
        }
        mysqli_close($link);
    }
    /*
    *   If file is already present in the destination folder
    */
    else {
        echo "File <html><b><i>".$fileName."</i></b></html> already exists in your folder. Please rename the file and try again.";
        mysqli_close($link);
    }   
?>