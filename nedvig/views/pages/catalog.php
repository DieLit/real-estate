<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/catalog.css">
    <title>Catalog</title>
</head>
<script src="https://kit.fontawesome.com/f33bcf135e.js" crossorigin="anonymous"></script>

<body>
    
    <!-- NAV -->
    <div class="header ">
        <div class="container ">
            <div class="header-line ">

                <div class="header-logo ">
                    <a href="/"><img src="img/logo.png " alt=" "></a>
                </div>

                <div class="nav ">
                    <a href="/" class="nav-item ">Catalog</a>
                    <a href="@ " class="nav-item ">Search in offers</a>
                    <a href="@ " class="nav-item ">Review</a>
                    <a href="@ " class="nav-item ">About Us</a>
                    <a href="@ " class="nav-item ">Our Team</a>
                </div>

                <div class="btn ">
                    <a class="button " href="@">Contact us</a>

                </div>
            </div>
        </div>
    </div>




<div class="main-text-cont">
    <h1 class="main-h1">Search for an offer</h1>
    <p class="main-p">Choose from the most advantageous offers</p>
</div>


<!------------------------------- FILTER ----------------------------->
<div class="cont-filter">

<div class="zdar">

    <div class="search">
        <input class="input-filter" style="font-family:Open sans, FontAwesome" type="text" placeholder="Enter a keyword">
        <a class="search-btn" href="#"><i class="fa-sharp fa-solid fa-magnifying-glass"></i> Search</a>
    </div>

    <div class="line-cont">
        <div class="line"></div>
        <p class="lince-p">Filter Settings </p>
    </div>

    <div class="filter">
        <input class="input-room" type="text" list="list" placeholder="Select room flat">
            <datalist id="list">
                <option value="1 bed room">
                <option value="2 bed room's">
                <option value="3 bed room's">
                <option value="4 bed room's">
                <option value="5 bed room's">
            </datalist>

            <input class="input-location" type="text" list="location" placeholder="Select location">
            <datalist id="location">
                <option value="Brazil">
                <option value="Italia">
                <option value="Thailand">
                <option value="Germany">
                </datalist>
    </div>

<div class="price">
    <input class="input-price" type="range" min="0" max="1000000" step="10000">
        <div class="text-price">
        <p class="min">0 €</p>
        <p class="max">1 000 000 €</p>
    </div>
</div>
</div>
    
</div>


<!---------------------------------- CARDS --------------------------->
    <?php
    use app\utils\Connect;
    $id = $_GET['id'];
    $card_query = "SELECT * FROM `position`";
    $card = mysqli_query(Connect::connectDB(), $card_query);
    $card = mysqli_fetch_all($card);

    foreach($card as $card_view){
    
    ?>

<main>
    <section class="catalog">
        <div class="product">
            <img src="<?= $card_view[1] ?>">
            <h3><?= $card_view[2] ?> </h3>
            <p><?= $card_view[3] ?> rooms</p>
            <p><?= $card_view[4] ?>$</p>
            <p><?= $card_view[5] ?></p>
            <a href="/item?id=<?= $card_view[0] ?>" class="btn">Open</a>
        </div>
    </section>

</main>

<?php } ?>

    <style>
        main{
            background-color: lightgray;
        }
    </style>
<!-------------------------------- SPAM ----------------------------->

<div class="spam_cont">
    <div class="spam_block">
        <div class="spam-img-block">
            <img class="spam-img"src="img/Group 188.png" alt="">
        </div>

    <div class="spam-block-text">
        <h1 class="spam-h1">Subscribe to newsletter</h1>
        <p class="spam-p">Get the latest news and interesting offers and real estate</p>  
        <input class="spam-input" type="email" placeholder="Your e-mail address">
        <button class="spam-btn" type="submit">Subscribe</button>
    </div>
    
    </div>
</div>

<!-------------------------------- FOOTER ----------------------------->
<div class="footer-cont">
    <img class="footer-logo" src="img/logo-white.png" alt="">
    <h1 class="footer-h1">Real Estate</h1>
</div>




</body>
</html> 