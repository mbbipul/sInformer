<?php
    require 'serverCon.php';
    $id=$_GET['user'];
    $query = "DELETE  FROM tutors WHERE id=$id";
    $result=mysqli_query($link,$query);
    if($result){
	header('Location:index.php');
    }
?>