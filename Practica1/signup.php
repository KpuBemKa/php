<?php

require 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$numele = $_POST['numele'];
$prenumele = $_POST['prenumele'];
$number = $_POST['number'];
$email = $_POST['email'];

$sqlInsert = "INSERT INTO meniu (Numele, Prenumele, Telefonul, email, username, password) VALUES ('$numele', '$prenumele', '$number', '$email', '$username', '$password')";

$insertResult = mysqli_query($connect, $sqlInsert);

if($insertResult == 1){
    echo "Datele au fost introduse cu succes.<br><br>";
} else {
    echo "A aparut o eroare.<br><br>";
}