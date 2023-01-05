<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('db.php');
//echo $_GET['id'];
$a=$_GET['id'];
$query="select * from register where id='$a'";
$execute=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($execute);
$name = $data['name'];
$email=$data['email'];
$pass= $data['password'];

//echo $name . " " . $email . " " . $pass;
?>
<form action="" method="post">
        <label for="">Name</label><br>
        <input type="text" name="uname" id="" value="<?php echo $name  ?>"><br>
        <label for="">Email</label><br>
        <input type="text" name="umail" id="" value="<?php echo $email  ?>"><br>
        <label for="">Password</label><br>
        <input type="text" name="upass" id="" value="<?php echo $pass  ?>"><br>
        <input type="submit" value="Update" name="sub">
    </form>
    <?php
     if(isset($_POST['sub'])){
        $name=$_POST['uname'];
        $pass=$_POST['upass'];
        $usermail=$_POST['umail'];

        $q="update register set name= '$name' , password = '$pass', email = '$usermail' 
        where id = '$a'";

        $run=mysqli_query($con,$q);
        if($run){
            echo "<script>alert('data updated success')</script>";
        }
        else{
            echo "<script>alert('data updated failed')</script>"; 
        }


    }

    ?>
    
</body>
</html>