<?php
include ("database.php");

$idnumber = $_POST['ide'];

$file_name = $_FILES['pho']['name'];// Trae nombre de la foto

$file_type = $_FILES['pho']['type'];// Trae tipo .jpg.. de la foto

$file_size = $_FILES['pho']['size']/1024;// Trae tamaño o lo puede modificar

$file_tmp = $_FILES['pho']['tmp_name'];//Trae la direccion del archivo temporal

//echo prueba consola echo $idnumber. "<br>". $file_name. "<br>". $file_type. "<br>". $file_size. "<br>". $file_tmp;
move_uploaded_file($_FILES['pho']['tmp_name'],"pho/".$_FILES['pho']['name']);

$photo_url_db = "pho/".$_FILES['pho']['name'];

$sql="INSERT INTO users (id_number,photo) VALUES($idnumber,'$photo_url_db')";
$conn->query($sql);

echo "<script language='javascript'>alert('::: User has been registered :::') </script>";
header("Refresh:0;url=index.html");
 ?>
