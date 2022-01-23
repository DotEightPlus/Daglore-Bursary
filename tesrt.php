<?php
$con = mysqli_connect("localhost","root","","bursary");

$tableName  = 'students';
$backupFile = 'C:\xampp\htdocs\Jobs\daglore\daglorebus\backup.sql';
$query      = "SELECT * INTO OUTFILE '$backupFile' FROM $tableName WHERE id BETWEEN 10 AND 500";

$result = mysqli_query($con,$query);
?>