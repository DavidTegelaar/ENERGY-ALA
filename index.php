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

    <main>
        <article class="Product_Slideshow">
         <div class="SlideFoto" style="max-width:500px">
           <img class="mySlide" src="pictures/Can Template Original Flavor.png" style="width:100%">
           <img class="mySlide" src="pictures/Can Template Coffee.png" style="width:100%">
           <img class="mySlide" src="pictures/Can Template Blueberry.png" style="width:100%">
         </div>

         <script>
         var myIndex = 0;
         carousel();

        function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2500); // Change image every 2.5 seconds
        }
        </script>
        </article>

        <article class="Home-Evenementen">
            
        </article>





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
    $sql = "SELECT locatie_id FROM evenementen;";
    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_row()) {
            echo "<section class='Plaats'>" . $row[0] . "</section>";
        }

    }
    $result->close();
    $conn->close();
    
    
    ?>
        </article>
    </main>
    

</body>