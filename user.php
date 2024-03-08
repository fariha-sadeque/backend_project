<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud` (name,email,mobile,password)
    values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Data inserted successfully";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}



?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>CRUD Operation</title>
</head>

<body>
    <div class="container my-5">
  
        <form method="post">
            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name">
            </div>
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
            </div>
            <div class="form-group">
                <label class="form-label">Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile">
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div>

            <button  type="submit" class="btn btn-primary my-4" name="submit">Submit</button>
        </form>
        </div>



    <!--bootsrap-->
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>