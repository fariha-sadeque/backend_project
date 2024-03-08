<?php
include 'connect.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crud Operation</title>
  
</head>
<body>
 
    <div class="container">
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5 text-light" style="background-color: black;" >
       <strong>A CRUD Application</strong>
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New User</h3>
            <p class="text-muted">Complete the form below to add a new user</p>
        </div>
      



        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>

  <tbody>
    <?php

    $sql = "Select * from `crud`";
    $result = mysqli_query($con,$sql);
    if($result){
        while( $row = mysqli_fetch_assoc($result)){
          ?>
           <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['mobile'] ?></td>
            <td><?php echo $row['password'] ?></td>
            
            <td>
            <button class="btn btn-success"><a href="update.php?id=<?php echo $row['id'] ?>" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?id=<?php echo $row['id'] ?>" class="text-light">Delete</a></button>
            </td>
            

           </tr>
          <?php

        }
    }
   

    ?>


   
  </tbody>
</table>


    </div>
 
</body>
</html>