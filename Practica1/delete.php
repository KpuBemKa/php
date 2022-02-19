<?php

require 'connect.php';

$username = $_POST['id'];

$sqlDelete = "DELETE FROM meniu WHERE id='$username'";

if($connect->query($sqlDelete) == TRUE){
    echo "Datele au fost sterse cu succes";
} else {
    echo "A aparut o eroare<br>" .$connect->error;
}