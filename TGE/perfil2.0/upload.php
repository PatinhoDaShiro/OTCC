<?php
session_start();
$user = $_SESSION['userName'];
include 'conexaoDB.php';
include '../config.php';
error_reporting(E_ALL ^ E_NOTICE);


if(isset($_POST["image"]))
{
    $data = $_POST["image"];

    $image_array_1 = explode(";", $data);
   
    $image_array_2 = explode(",", $image_array_1[1]);
   
    $data = base64_decode($image_array_2[1]);
   
    $imageName = md5(time()) . '.png';
    $pasta = DIR_PATH."/profilePics/";
    file_put_contents($imageName, $data);
    $pastaImgs = "$pasta/$imageName";
    rename($imageName, $pastaImgs);

    $sql_code = "UPDATE usuarios SET imgPerf = '$imageName' WHERE usuario = '$user'";
    mysqli_query($conexao, $sql_code);

    
}

?>