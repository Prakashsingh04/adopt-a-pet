<?php

?>

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





    <section class="login">
        <h2>Login</h2>
        <form method="POST" action="login.php">
          <label for="username">username:</label>
          <input type="text" id="username" name="username">
      
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
      
          <button type="submit" name="submit">Login</button>
        </form>
      </section>
            </form>
      </section>
</body>
</html>
<?php
session_start();
if(isset($_SESSION['username'])){
header("Location: index.php");

}
  if(isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'root','1234','pet');
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $sql = "SELECT * FROM register where username='$username' and password='$password' ";
   $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

    if($row>0){
      $_SESSION['username']=true;
      $_SESSION['username']=$username;
      
      header("Location: index.php");
    }   
    else{
      echo"<script>alert('error')</script>";
      
    }
  }
?>