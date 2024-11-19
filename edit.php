<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$conn =mysqli_connect("localhost","root","","students");
$id=$_GET['id'];
$sql="SELECT * FROM student WHERE id='{$id}'";
$run=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($run)
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']?>"><br></br>
    <input type="text" name="username" value="<?php echo $row['username'];?>"><br></br>
    <input type="email" name="email" value="<?php echo $row['email'];?>"><br></br>
    <input type="text" name="address" value="<?php echo $row['address'];?>"><br></br>
    <input type="text" name="phone" value="<?php echo $row['phone'];?>"><br></br>
  <input type="submit" value="update" name="updatebtn">
</form>
</body>
</html>
