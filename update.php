<?php 
    include('conn.php');

    $id = $_GET['id'];
    echo $q = "SELECT * from `users` where `id` = $id";
    $res = mysqli_query($con, $q);

    $user = mysqli_fetch_assoc($res);
?>

<h1>Update User</h1>

<form method="post">
    <input type="text" name="name" value="<?=$user['name']?>"  required/>
     <br>
    <br>
    <input type="text" name="email" value="<?=$user['email']?>" required/>
     <br>
    <br>
    <input type="text" name="age" value="<?=$user['age']?>" required/>
     <br>
    <br>
    <input type="text" name="password" value="<?=$user['password']?>" required/>
     <br>
    <br>
        <select name="gender" required>
            <option value="">SELECT GENDER</option>
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

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    echo $up_q = "UPDATE `users` set `name` = '$name', `email` = '$email', `age` = $age,
     `password` = '$password', `gender` = '$gender' where `id` = $id";

     $update = mysqli_query($con, $up_q);
     if($update){
        echo "Update Successful";
        header("location: index.php");
        die;
     }
   

}
  

?>

