<!DOCTYPE html>
<html>
  <head>
    <title>Adopt a Pet</title>
    <link rel="stylesheet" type="text/css" href="style_adopt.css">
  </head>
  <body>


  <header>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="rehome.php">REHOME</a></li>
          <li><a href="adopt.php">ADOPT</a></li>
          <li><a href="logout.php">LOGOUT</a></li>
        </ul>
      </nav>
    </header>
  <form method="POST">

    <div class="container">
      <h1>Adopt a Pet</h1>
      <div class="pets">
        <h2>Dogs</h2>
        <div class="pet">
          <img src="dog1.jpg" alt="Dog 1">
          <h3>tommy</h3>
          <p>Breed: Golden Retriever</p>
          <p>Age: 2 years</p>
          <p>Gender: Male</p>
          <a href="#">Adopt Now</a>
        </div>
        <!-- <div class="pet">
          <img src="dog2.jpg" alt="Dog 2">
          <h3>simmi</h3>
          <p>Breed: Labrador Retriever</p>
          <p>Age: 1 year</p>
          <p>Gender: Female</p>
          <a href="#">Adopt Now</a>
        </div>
      </div>
      <div class="pets">
        <h2>Cats</h2>
        <div class="pet">
          <img src="cat1.jpg" alt="Cat 1">
          <h3>Mittens</h3>
          <p>Breed: Domestic Shorthair</p>
          <p>Age: 3 years</p>
          <p>Gender: Female</p>
          <a href="#">Adopt Now</a>
        </div>
        <div class="pet">
          <img src="cat2.jpg" alt="Cat 2">
          <h3>Simbha</h3>
          <p>Breed: Siamese</p>
          <p>Age: 2 years</p>
          <p>Gender: Male</p>
          <a href="#">Adopt Now</a>
        </div>-->
      </div> 
    </div>
  </form>
  </body>
</html>
<?php



session_start();
if(!isset($_SESSION['username']))
{
  header("Location: login.php");
}

$conn = mysqli_connect('localhost', 'root','1234','pet');;

// Retrieve pet details from the database
$sql = 'SELECT * FROM pet_details';
$result = mysqli_query($conn, $sql);

// Create an array to store the pet details
$petDetails = array();

// Loop through the results and add the pet details to the array
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $petDetails[] = $row;
  }
}

// Close the database connection
mysqli_close($conn);

    // Loop through the pet details array and add them to the page


    foreach ($petDetails as $pet) {
      echo '<div class="pet">';
      echo '<img src="' . $pet['image'] . '" alt="' . $pet['name'] . '">';
      echo '<h3>' . $pet['name'] . '</h3>';
      echo '<p>Breed: ' . $pet['breed'] . '</p>';
      echo '<p>Gender: ' . $pet['gender'] . '</p>';
      echo '<p>Age: ' . $pet['age'] . '</p>';
      echo '<a href="#">Adopt Now</a>';
      echo '</div>';
    }





    // //  <div class="container">
    // //  <h1>Adopt a Pet</h1>
    // //  <div class="pets">
    // //    <h2>Dogs</h2>
    // //    <div class="pet">
    // //      <img src="dog1.jpg" alt="Dog 1">
    // //      <h3>Charlie</h3>
    // //      <p>Breed: Golden Retriever</p>
    // //      <p>Age: 2 years</p>
    // //      <p>Gender: Male</p>
    // //      <a href="#">Adopt Now</a>
    // //    </div>
    //   // for(){
    //   //   <div class="container">
    //   //   <h1>Adopt a Pet</h1>
    //   //   <div class="pets">
    //   //     <h2>Dogs</h2>
    //   //     <div class="pet">
    //   //       <img src="dog1.jpg" alt="Dog 1">
    //   //       <h3>Charlie</h3>
    //   //       <p>Breed: Golden Retriever</p>
    //   //       <p>Age: 2 years</p>
    //   //       <p>Gender: Male</p>
    //   //       <a href="#">Adopt Now</a>
    //   //     </div>
    //   // }
    //   if(isset($_POST['submit'])){
    //     $conn = mysqli_connect('localhost', 'root','1234','pet');

    //   if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    //   }
    //   $sql = "SELECT * FROM your_table!";
    //   $result = mysqli_query($conn, $sql);


    //   $sql = "select * FROM pet_details";

    //   if (mysqli_num_rows($result) > 0) {
    //     // output data of each row
    //     while($row = mysqli_fetch_assoc($result)) {
    //       echo "<div class="pets">\n";
    //       echo "<h2>Cats</h2>\n";
    //       echo "<div class="pet">\n";
    //         echo "<img src="cat1.jpg" alt="Cat 1">\n";
    //         echo "<h3>Mittens</h3>\n";
    //         echo "<p>Breed: Domestic Shorthair</p>";
    //         echo "<p>Age: 3 years</p>\n";
    //         echo "<p>Gender: Female</p>\n";
    //         echo "<a href="">Adopt Now</a>\n";
    //       echo "</div>\n";
    //     }
    //   } else {
    //     echo "0 results";
    //   }

?>