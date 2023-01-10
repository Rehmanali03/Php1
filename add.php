<?php include('conn.php')?>

<h1>Add User</h1>

<form method="post">
    <input type="text" name="name" />
     <br>
    <br>
    <input type="text" name="email" />
     <br>
    <br>
    <input type="text" name="age" />
     <br>
    <br>
    <input type="text" name="password" />
     <br>
    <br>
        <select name="gender">
            <option value="1">Male</option>
            <option value="2">Female</option>
        </select>
     <br>
    <br>
    <input type="submit" name="submit" />
     <br>
    <br>
</form>
<?php 

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];


    $query = "INSERT INTO `users` VALUES (NULL,'$name','$age','$email','$password','$gender')";
    $res = mysqli_query($con,$query);

    if($res){
        header('Location:index.php');
    }

}
  

?>

