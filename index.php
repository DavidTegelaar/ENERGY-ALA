<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="language" content="NL">
    <meta name="description" content="Gainergy, Energy, Drink">
    <meta name="keywords" content="Gainergy, Energy, Drink">
    <meta name="author" content="David Tegelaar">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gainergy</title>
    <link rel="stylesheet" type="text/css" href="ala/css/index.css">
</head>

<body>
    <header>
        <article class="item-logo">
            <img src="ala/pictures/logo.png" height="130" width="180">
        </article>

        <article class="item_nav">
            <ul>
                <li><a href="index.php">Homepage</a></li>
                <li><a href="Product.html">Product</a></li>
                <li><a href="Overons.html">Over ons</a></li>
                <li><a href="GoedeDoelen.html">Goede Doelen</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a href="Contact.html">Contact</a></li>
            </ul>
        </article>
</header>


<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "energy";
$conn = new mysqli($host, $user, $pass, $database);
if ($conn->connect_error) {
    echo "verbinding mislukt";
}

$sql = "SELECT * FROM evenementen LEFT JOIN artiesten ON evenementen.artiest_id = artiesten.artiest_id LEFT JOIN locaties ON artiesten.artiest_id = locaties.locatie_id order by evenementen.datum LIMIT 0,3";
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_row()) {
      ?>

 <article class="evenementen">
          <img src="ala/pictures/" alt="">
          <h1><?php echo $row[1];?></h1>
          <h1><?php echo $row[6];?></h1>

        </article>

<?php
    } 

}
$result->close();
$conn->close(); 

?>
       


<div class="slideshow-container">

<div class="mySlides fade">
  <img src="ala/pictures/Can Template Original Flavor.png" style="padding-left: 8vw; width:50vw">
</div>

<div class="mySlides fade">
  <img src="ala/pictures/Can Template Coffee.png" style="padding-left: 8vw; width: 50vw">
</div>

<div class="mySlides fade">
  <img src="ala/pictures/Can Template Blueberry.png" style="padding-left: 8vw; width:50vw">
</div>

</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2500); // Change image every 2 seconds
}
</script>

<<div class="footer";>
    <p>footer</p>
  </div>
    

</body>