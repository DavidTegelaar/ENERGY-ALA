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
                <li><a href="Contact.html">Contact</li>
            </ul>
        </article>

    </header>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="ala/pictures/Can Template Original Flavor.png" style="width:50%">
  <div class="text">Original</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="ala/pictures/Can Template Coffee.png" style="width:50%">
  <div class="text">Coffee</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="ala/pictures/Can Template Blueberry.png" style="width:50%">
  <div class="text">Blueberry</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
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


    <article class="Data_Locatie">
    <?php  
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "energy";
    $conn = new mysqli($host, $user, $pass, $database);
    if ($conn->connect_error) {
        echo "verbinding mislukt";
    }

    $sql = "SELECT datum FROM evenementen order by datum LIMIT 0,3";
    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_row()) {
            echo "<section class='locatie'>" . $row[0] . "</section>";
        } 

    }
    $result->close();
    $conn->close(); 
    
    
    ?>
        </article>
    </main>
    

</body>