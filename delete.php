<?php 
        include('conn.php');
    $id = $_GET['id'];
    $query = "DELETE FROM `USERS` WHERE `id` = '$id'";
    $res = mysqli_query($con,$query);

    if($res){
        header('Location:index.php');
    }
?>