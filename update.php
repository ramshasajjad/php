<?php

if(isset($_POST["updatebtn"])){
    $id = $_POST['id'];
    $username=$_POST["us"];
    $password=$_POST["pa"];
    $email=$_POST["em"];

    $conn=mysqli_connect("localhost","root", "","a_shop");
    $sql= "UPDATE users SET Username ='{$username}', password = '{$password}' , email = '{$email}' WHERE id = '{$id}'";
    $run = mysqli_query($conn,$sql);
    if($run){
        header("location: display.php");
    }else{
        echo "<script>alert('something went wrong! Recordcould not be updated')</script>";
    }

}
?>