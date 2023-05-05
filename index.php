<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Pet Adoption Home Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script>
    function browse() {
      location.replace("adopt.php")
    }
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

  
  <main>
    <div class="hero-card">
      <h1>Find Your New Best Friend</h1>
      <p>Looking for a furry companion? Browse our selection of pets available for adoption!</p>
      <button onclick="browse()">Browse Pets</button>
    </div>
  </main>


  <section class="testimonials">
    <h2>Happy Adopters</h2>
    <div class="testimonial-container">
      <div class="testimonial">
        <img src="user2.jpg" >
        <p>"I adopted my sweet kitty from this website and couldn't be happier. The process was easy and the staff were so helpful!"</p>
        <h3>alia jain</h3>
      </div>
      <div class="testimonial">
        <img src="user1.jpg" >
        <p>"I never thought I would find my perfect dog online, but this website made it happen. Thank you for bringing my fur baby into my life!"</p>
        <h3>jay kapoor</h3>
      </div>
    </div>
  </section>
  
  
</body>
</html>
<?php
session_start();
if(!isset($_SESSION['username']))
{
  header("Location: index.html");
}
?>