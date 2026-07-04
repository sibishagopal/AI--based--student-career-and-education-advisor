<?php

$conn = mysqli_connect("localhost", "root", "", "career_advisor");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>