<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn= mysqli_connect("localhost","root","","a_shop");
    $sql="SELECT * FROM users";

   if(isset($_GET['searchBtn'])){

       $sql = "SELECT * FROM users WHERE id = ". $_GET['search'];
       $searchby=$_GET['search-list'];
       $searchtext=$_GET['search'];
       if($searchBy=='id'){
        $sql = "SELECT * FROM users WHERE id = '$searchtext'";
       }else if($searchBy=='username'){
        $sql = "SELECT * FROM users WHERE username = '$searchtext'";
       }else if($searchBy=='email'){
        $sql = "SELECT * FROM users WHERE email = '$searchtext'";
       }else if($searchBy=='address'){
        $sql = "SELECT * FROM users WHERE address = '$searchtext'";
       }else if($searchBy=='phoneno'){
        $sql = "SELECT * FROM users WHERE phoneno = '$searchtext'";
       }else{
        "<script>alert('please select my field')</script>";
       }
       
   }

    $run=mysqli_query($conn,$sql);
    if(mysqli_num_rows($run)>0){
    
    ?>

   <form action="" method="get">
   <label for="">search by id:</label>
   <input type="number" require value="0" name="search">
   <input type="submit" value="search" name="searchBtn"> 
   <button><a href="display.php">reset</a></button>
   <select name="search-list">
    <option value="select">select</option>
    <option value="username">username</option>
    <option value="email">email</option>
    <option value="address">address</option>
    <option value="phoneno">phoneno</option>
    </select>
    
   </form>





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