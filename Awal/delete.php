<?php
include('konek.php');
$ni	= $_GET['ni'];

$sql 	= 'delete from login where email="'.$ni.'"';
$query	= mysqli_query($db_link,$sql);
header('location: TEMPLATE.php');
?>