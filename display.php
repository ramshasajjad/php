<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn= mysqli_connect("localhost","root","","student");
    $sql="SELECT * FROM students";
    $run=mysqli_query($conn,$sql);
    if(mysqli_num_rows($run)>0){
    
    ?>
    <table border="1" cellspacing="0px" cellpadding="20px">
    <thead>
        <tr>
           <th>username</th>
           <th>email</th>
           <th>address</th>
           <th>phoneno</th>
           <th>action</th>


        </tr>
        </thead>
        <tbody>
            <?php
            while($data =mysqli_fetch_assoc($run)){
                ?>
            <tr>
                <td><?php echo $data['username'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['address'];?></td>
                <td><?php echo $data['phoneno'];?></td>
                <td>
                    <a >Edit</a>
                    <a >Delete</a>
                </td>
            </tr>
            <?php }?>
            </tbody>
       </table>
            <?php }?>
   
         
       <br></br>
       <a href="array.php"><button>add new user</button></a>






    

  
</body>
</html>