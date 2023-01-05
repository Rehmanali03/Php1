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
        <label for="">Name</label><br>
        <input type="text" name="uname" id=""><br>
        <label for="">Email</label><br>
        <input type="text" name="umail" id=""><br>
        <label for="">Password</label><br>
        <input type="text" name="upass" id=""><br>
        <input type="submit" value="Submit" name="sub">
    </form>
    <?php
    include('db.php');

    if(isset($_POST['sub'])){
        $name=$_POST['uname'];
        $pass=$_POST['upass'];
        $usermail=$_POST['umail'];

        $q="insert into register (id,name,email,password) values ('','$name','$usermail','$pass')";

        $run=mysqli_query($con,$q);
        if($run){
            echo "<script>alert('data inserted success')</script>";
        }
        else{
            echo "<script>alert('data inserted failed')</script>"; 
        }


    }
    


?>
</body>
</html>