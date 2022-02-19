<?php

function readBD()
{
    require 'connect.php';

    $sqlSelect = "SELECT * FROM meniu;";
    $result = $connect->query($sqlSelect);
    $returnString = "";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $returnString = $returnString. "Id: " . $row["id"] . " | Numele: " . $row["Numele"] . " | Prenumele: " . $row["Prenumele"] . " | Telefonul: " . $row["Telefonul"] . " | E-mail: " . $row["email"] . " | Username: " . $row["username"] . " | Password: " . $row["password"] . "<br>";
        }
    } else {
        $returnString = "0 results";
    }

    $connect->close();

    return $returnString;
}