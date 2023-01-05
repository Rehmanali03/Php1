<?php
 if(isset($_POST['insert'])){
    $id = $_POST['id'];
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $pasword = $_POST['password'];

    $q = "INSERT INTO `user` VALUES('$id','$name','$email','$pasword');";
    $con = mysqli_connect('localhost', 'root', '', 'check');

    if($con){
        $res = mysqli_query($con, $q);
        if($res){
            echo "Working";
        } else{
            echo "eror";
        }

    }
 }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" placeholder="Id" name="id" id="num_id">
        <input type="text" placeholder="Name" name="full_name" id="name">
        <input type="email" placeholder="Email" name="email" id="email">
        <input type="password" placeholder="Password" name="password" id="password">

        <input type="submit" name="insert" value="insert">
    </form>
</body>
</html>