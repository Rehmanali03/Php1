<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $insert_query = "insert into users(username, email, password, cpassword)
        values('$username', '$email', '$password', '$cpassword')";

    $result = mysqli_query($connection, $insert_query);

    if($result){
        echo 'user created';
    }else{
        echo 'User not added';
    }

    // echo "$username <br> $password <br> $email <br> $cpassword";
}
?>



