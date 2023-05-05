<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>



<header>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="rehome.php">REHOME</a></li>
          <li><a href="adopt.php">ADOPT</a></li>
          
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php">Register</a></li>
        </ul>
      </nav>
    </header>



    <section class="register">
        <h2>Register</h2>
        <form method="POST" >
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>

      

          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>


          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
      
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
      
      
          <button type="submit" name="submit">Register</button>



      
        </form>
      </section>
      
    
</body>
</html>
<?php
  if(isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'root','1234','pet');
    $sql = "INSERT INTO register(name,username,email,password) VALUES('".$_POST['name']."','".$_POST['username']."','".$_POST['email']."','".$_POST['password']."');";
   // $result=mysqli_query($con,$sql);
    //$row=mysqli_fetch_assoc($result);
    if(mysqli_query($conn,$sql)){
      echo"<script>alert('success')</script>";
    }   
    else{
      echo"<script>alert('error')</script>";
      
    }
  }
?>