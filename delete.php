<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM `crud` WHERE id = $id";
$result = mysqli_query($con,$sql);
if($result){
    header("Location: display.php?msg=Record deleted successfully");

}else{
    echo "Failed: " . mysqli_error($con);
}

?>