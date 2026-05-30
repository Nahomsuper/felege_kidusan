<?php
$connection = new mysqli("localhost","root","","felege_kidusan");
if($connection->connect_error){
    die("Incorrect Configuration, Please Contact Your IT Administrator");
}
?>