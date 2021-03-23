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

<!-- <button id="readArray">Array ophalen</button>
 <div id="test" style="width:225px;height:335px;"></div>

<script>
var slideShowArray = ['Can Template Original Flavor.png','Can Template Coffee.png','Can Template Blueberry.png'];
var index = 0;

window.onload = function(){
    test = document.getElementById("test");

    setInterval(slideShow, 1000);

}

function slideShow(){
    test.style.backgroundImage = "url(ala/pictures/" + slideShowArray[index] + ")";
    index++;
    if(index == slideShowArray.lenght){
        index = 0;
    }
}
</script>

<!-- <?php -->

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

 <article class="index-evenementen">
          <img src="ala/pictures/download.png" alt="evenement1">
          <h1><?php echo $row[1];?></h1>
          <h1><?php echo $row[6];?></h1>

        </article>

<?php
    } 

}
$result->close();
$conn->close(); 

?> -->

<div class="footer";>
    <p>footer</p>
  </div>
    

</body>