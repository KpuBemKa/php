<?php

update();

function update()
{

    $id = $_POST['id'];
    $numele = $_POST['numele'];
    $prenumele = $_POST['prenumele'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($id == "") {
        echo "Alege un ID.";
        return;
    }

    if($numele != ""){
        $request = updateSQL("Numele", $numele, $id);
        echo "$request";
    }

    if($prenumele != ""){
        $request = updateSQL("Prenumele", $prenumele, $id);
        echo "$request";
    }

    if($number != ""){
        $request = updateSQL("Telefonul", $number, $id);
        echo "$request";
    }

    if($email != ""){
        $request = updateSQL("email", $email, $id);
        echo "$request";
    }

    if($username != ""){
        $request = updateSQL("username", $username, $id);
        echo "$request";
    }

    if($password != ""){
        $request = updateSQL("password", $password, $id);
        echo "$request";
    }

    echo "Datele au fost modificate cu succes.";
}

function updateSQL($updateField, $updateData, $updateID)
{
    require 'connect.php';

    $sql = "UPDATE meniu SET $updateField='$updateData' WHERE id=$updateID";

    if ($connect->query($sql) === TRUE) {
        return "";
    } else {
        return $connect->error;
    }

    $connect->close();
}
