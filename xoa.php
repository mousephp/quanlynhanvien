<?php 
include('connect.php');

$id=$_GET['id'];
$sql="DELETE FROM nhanvien WHERE id='$id' ";
mysqli_query($conn,$sql);
header("location:index.php");
?>