<?php
include('file/config.php');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$notlpn = $_POST['notlpn'];
$email = $_POST['email'];
$nosikilat = $_POST['nosikilat'];
$password = $_POST['password'];


$query = "INSERT INTO user(nama, alamat, notlpn, email, nosikilat, password) VALUES ('$nama', '$alamat', '$notlpn', '$email', '$nosikilat' ,'$password')";
  if ($mysqli->query($query) === TRUE){
    header('location: index.php');
  }else {
    echo "Error: " . $query . "<br>" . $mysqli->error;
  }
?>