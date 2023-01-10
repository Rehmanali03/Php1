<?php include('conn.php')?>
<h1><a href="add.php">Add Data</a></h1>
<table border="1">
    <tr>
        <th>ID</th>
        
        <th>Name</th>
        
        <th>Email</th>
        
        <th>Age</th>
        
        <th>Password</th>
        

        <th>Action</th>
    </tr>


    <?php 
        $query = "SELECT * FROM `users`";
        $res = mysqli_query($con,$query);
        $sno = 1;
        while($show = mysqli_fetch_array($res)){
            ?>
                <tr>
                    <td><?= $show['id'] ?></td>
                    <td><?= $show['name']?></td>
                    <td><?= $show['email']?></td>
                    <td><?= $show['age']?></td>
                    <td><?= $show['password']?></td>
                    <td>
                        <a href="update.php?id=<?=$show['id']?>">Edit</a>
                         | 
                        <a href="delete.php?id=<?=$show['id']?>">Delete</a></td>
                </tr>
            <?php
        }
    
    ?>
</table>