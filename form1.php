<form action="" method="post"><br><br>
user_name:<input type="text" name="us"><br></br>
password:<input type="password" name="pa"><br></br>
email:<input type="email" name="em"><br></br>
submit:<input type ="submit" name="save">
</form>
<?php
if(isset($_POST["save"])){
    $username=$_POST["us"];
    $password=$_POST["pa"];
    $email=$_POST["em"];


$con=mysqli_connect("localhost","root","","a_shop");
if(!$con){
    echo "connect successfully";
}

$q="INSERT INTO `users`(`username`, `password`, `email`) VALUES ('  $username','   $password',' $email')";

$run=mysqli_query($con,$q);
if($run){
    "<script>alert('connection successfully built')</script>";
}else{
    "<script>alert('failed')</script>";
}

}


?>
