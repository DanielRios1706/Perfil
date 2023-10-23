<?php

require '../config/database.php';

$id = $conn->real_escape_string($_POST['id']);
$nombre = $conn->real_escape_string($_POST['nombre']);
$usuario = $conn->real_escape_string($_POST['usuario']);
$contrasena = $conn->real_escape_string($_POST['contrasena']);
$confcontrasena = $conn->real_escape_string($_POST['confirmcontrasena']);
$correo = $conn->real_escape_string($_POST['correo']);
$facebook = $conn->real_escape_string($_POST['fb']);
$twitter1 = $conn->real_escape_string($_POST['twt']);

if($contrasena != $confcontrasena){
    echo '<script language="javascript">alert("La Contrasena no coinciden"); history.back();</script>';
}else{
    $sql = "UPDATE usuario SET nombre = '$nombre', usuario = '$usuario', contrasena = '$contrasena', correo = '$correo', facebook = '$facebook', twitter = '$twitter1'  WHERE id = $id ";

}

 

if ($conn->query($sql)){
}

header('Location: index.php');

