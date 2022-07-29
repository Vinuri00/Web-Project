<?php
//$msg = '';
include_once 'dbconn.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $sql = "insert into image (image) values(?)";

    $stmt = mysqli_prepare($conn,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1)
    {
        header('Location: http://localhost/WEB/Imageupload/file%20upli/Display_Img.php');
        // die('Image Successfullly Uploaded');
    }
    else
    {
        die('Error: uploading image');
    }
    mysqli_close($conn);
}
