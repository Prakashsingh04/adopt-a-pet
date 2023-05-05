<!DOCTYPE html>
<html>
  <head>
    <title>Rehome a Pet</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>

    </script>


  </head>
  <body>

    <header>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="rehome.php">REHOME</a></li>
          <li><a href="adopt.php">ADOPT</a></li>
          
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </header>
  

    <div class="container">
      <h1>Rehome a Pet</h1>
      <form method="POST">
        <label for="petname">Name:</label>
        <input type="text" id="petname" name="petname" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label for="breed">Breed:</label>
        <input type="text" id="breed" name="breed" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
                <option value="">Select gender...</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
          </select>

        <label for="vaccinated">Vaccinated:</label>
        <select id="vaccinated" name="vaccinated" required>
                <option value="">Select if vaccinated or not...</option>
                <option value="yes">yes</option>
                <option value="no">no</option>
          </select>

          <label for="upload">Choose a profile picture:</label>

        <input type="file" id="upload" name="upload" accept="image/png, image/jpeg">



        <button type="submit" name="submit">Submit</button>
      </form>
    </div>
  </body>
</html>

<?php
session_start();
if(!isset($_SESSION['username']))
{
  header("Location: login.php");
}


if(isset($_POST['submit'])){
  $conn = mysqli_connect('localhost', 'root','1234','pet');
  $sql = "INSERT INTO pet_details(name,age,breed,gender,vaccine,image) VALUES('".$_POST['petname']."','".$_POST['age']."','".$_POST['breed']."','".$_POST['gender']."','".$_POST['vaccinated']."','".$_POST['upload']."');";
  if(mysqli_query($conn,$sql)){
    echo"<script>alert('success')</script>";
  }   
  else{
    echo"<script>alert('error')</script>";
    
  }
}


// $conn = mysqli_connect('localhost', 'root','1234','pet');
// if(isset($_POST["submit"]))
// {
//       $petname = $_POST['petname'];
//       $age= $_POST['age'];
//       $breed=$_POST['breed'];
//       $gender = $_POST['gender'];
//       $description=$_POST['description'];







//       // if(!empty($petname && $age && $breed && $gender)){
//       //     $query = "INSERT INTO pet_details VALUES ('$petname',$age,'$breed','$gender')";
//       //     $result = $conn->query($query);
//       //     if($result){
//       //       echo "Course is inserted successfully";
//       //     }  
//       //   }

//       // // $query = "INSERT INTO pet_details VALUES ('$petname','$age','$breed','$gender')";
//       // // $query_run = mysqli_query($conn, $query);
  
//       // // if($query_run)
//       // // {
//       // //   echo"<script>alert('success')</script>";
//       // //     $_SESSION['status'] = "Inserted Succesfully";
//       // //     header("Location: index.php");
//       // // }
//       // // else
//       // // {
//       // //   echo"<script>alert('noo')</script>";
//       // //     $_SESSION['status'] = "Not Inserted";
//       // //     header("Location: rehome.php");
//       // // }
//   }
  ?>
