<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<body>
    <h3>USER DATA</h3>
<table class="table" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
<?php

include('db.php');
$q="select * from register";
$run=mysqli_query($con,$q);
while($fetch=mysqli_fetch_assoc($run)){
//echo $fetch;

?>

  <tbody>
    <tr>
      <th scope="row"> <?php  echo  $fetch['id']; ?>    </th>
      <td><?php echo  $fetch['name']; ?>    </td>
      <td> <?php  echo $fetch['email']; ?>  </td>
      <td><?php echo $fetch['password']; ?>  </td>
    </tr>
   <?php
}
   ?>

  </tbody>
</table>
</body>
</html>