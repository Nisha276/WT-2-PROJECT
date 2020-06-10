<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "webtechproj";

$conn =new mysqli($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}


