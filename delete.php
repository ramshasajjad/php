<?php
$stud_id=$_GET['id'];
$conn = mysqli_connect("localhost","root","","a_shop");
$sql= "DELETE FROM `users` WHERE id='{$stud_id}'";
$run = mysqli_query($conn,$sql);
if($run){
    header("location: display.php");
}

?>