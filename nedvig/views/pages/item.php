<?php
use app\controllers\info;
$id = $_GET['id'];
$show = Info::show_item($id);
$acc_broker = Info::account_broker($id);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/item.css">
    <title><?= $show["name__apps"] ?></title>
 
<style type="text/css">

html, body {
            margin: 0px;
            padding: 0px;
        }

        .carousel {
            position: relative;
            /* box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64); */
            margin-top: 26px;
            width:50%;
        }

        .carousel-inner {
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            position: absolute;
            opacity: 0;
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        .carousel-item img {
            display: block;
            height: auto;
            max-width: 100%;
        }

        .carousel-control {
            background: rgba(0, 0, 0, 0.28);
            border-radius: 50%;
            color: #fff;
            cursor: pointer;
            display: none;
            font-size: 40px;
            height: 40px;
            line-height: 35px;
            position: absolute;
            top: 50%;
            -webkit-transform: translate(0, -50%);
            cursor: pointer;
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
            text-align: center;
            width: 40px;
            z-index: 10;
        }

        .carousel-control.prev {
            left: 2%;
        }

        .carousel-control.next {
            right: 2%;
        }

        .carousel-control:hover {
            background: rgba(0, 0, 0, 0.8);
            color: #aaaaaa;
        }

        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        .carousel-indicators li {
            display: inline-block;
            margin: 0 5px;
        }

        .carousel-bullet {
            color: #fff;
            cursor: pointer;
            display: block;
            font-size: 55px;
        }

        .carousel-bullet:hover {
            color: #333;
        }

        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #333;
        }

        #title {
            width: 100%;
            position: absolute;
            padding: 0px;
            margin: 0px auto;
            text-align: center;
            font-size: 27px;
            color: rgba(255, 255, 255, 1);
            font-family: 'Open Sans', sans-serif;
            z-index: 9999;
            text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), -1px 0px 2px rgba(255, 255, 255, 0);
        }

        .contact{
            margin-top:-170%;
            background-color:#F3F3FA;
            padding:20px;
            padding-top: 3px;
        }

        .contact-cont{
            float:right;
            /* background-color:red; */
        }

        .allContactCont{
            float:right;
        }

        .broker-cont{
            /* background-color: red; */
            /* height:550px; */
            margin-top:110%;
        }

        .broker{
            padding:20px;
        }

        .info-cont{
            float:right;
        }

        .allInfoCont{
            margin-left:10%;
        }

        .about-line-cont{
            width:850px;
            height:80px;
        }

</style>

</head>
  
<body>

    <div class="container ">
        <div class="header-line ">

            <div class="header-logo ">
                <a href="/"><img src="img/logo.png " alt=" "></a>
            </div>

            <div class="nav ">
                <a href="/catalog" class="nav-item ">Catalog</a>
                <a href="@ " class="nav-item ">Search in offers</a>
                <a href="@ " class="nav-item ">Review</a>
                <a href="@ " class="nav-item ">About Us</a>
                <a href="@ " class="nav-item ">Our Team</a>
            </div>

            <div class="btn ">
                <a class="button " href="@ ">Contact us</a>

            </div>
        </div>
    



<!---------------------------- MAIN ---------------------------------->
<h1 name="mainh1" class="main-h1" ><?= $show["name__apps"] ?></h1>

<div class="carousel">
            <div class="carousel-inner">
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                <div class="carousel-item">
                    <img width="1000" src="<?= $show["img__1"] ?>">
                </div>
                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item">
                    <img width="1000" src="<?= $show["img__2"] ?>">
                </div>
                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item">
                    <img width="1000" src="<?= $show["img__3"] ?>">
                </div>
                <label for="carousel-3" class="carousel-control prev control-1">‹</label>
                <label for="carousel-2" class="carousel-control next control-1">›</label>
                <label for="carousel-1" class="carousel-control prev control-2">‹</label>
                <label for="carousel-3" class="carousel-control next control-2">›</label>
                <label for="carousel-2" class="carousel-control prev control-3">‹</label>
                <label for="carousel-1" class="carousel-control next control-3">›</label>
                <ol class="carousel-indicators">
                    <li>
                        <label for="carousel-1" class="carousel-bullet">•</label>
                    </li>
                    <li>
                        <label for="carousel-2" class="carousel-bullet">•</label>
                    </li>
                    <li>
                        <label for="carousel-3" class="carousel-bullet">•</label>
                    </li>
                </ol>
            </div>
        </div>

<div class="allContactCont">
<form class="contact-cont" action="/add" method="post">


    <div class="contact">
    <h1>Contact Us</h1> 

    <p>Apartment</p>
    <input type="text" name="app" value="<?= $show["name__apps"] ?>" >

    <p>Full name</p>
    <input name="name" type="text" placeholder="Your full name">

    <p>Phone number</p>
    <input name="phone" type="phone" placeholder="Phone number">

    <p>E-mail</p>
    <input name="email" type="email" placeholder="Your E-mail">

    <p>Your message</p>
    <textarea name="message" id="" cols="18" rows="10"></textarea>
    <br>    
    <button type="submit">Send Message</button>
    </div>

</form>

    <div class="broker-cont">
        <div class="broker">
            <img src="<?= $acc_broker["photo"] ?>" alt="">
            <br>
            <h1><?= $acc_broker["name"] ?></h1>
            <p>+<?= $acc_broker["phone"] ?></p>
            <p><?= $acc_broker["email"] ?></p> <br>
            <a href="#">View broker profile</a>
        </div>
    </div>

    </div>
</div>


<div class="allInfoCont">
<div class="about-line-cont">
    <div class="about-line">
        <img  src="img/XMLID 1.png" alt="">
        <h1><?= $show["type"] ?></h1>

        <img  src="img/dimensions 1.png" alt="">
        <h1><?= $show["useble_area"] ?> m²</h1>

        <img  src="img/Group.png" alt="">
        <h1><?= $show["city"] ?></h1>
    </div>
</div>



<div class="mortgage-cont">
    <div class="mortgage">
        <p class="mortgage-p">Mortgage since:</p>
        <h1 class="mortgage-h1">807.57 €/ month</h1>
        <a href="#">Get a mortgage</a>
    </div>
</div>


<div class="content-cont">
    <div class="content">
        <p> <?= $show["description"] ?> </p> <br>

        <div class="info-cont">
            <div class="info">
                <h1>Brief characteristics</h1> 
                <b>City:</b> <?=  $show["city"] ?> <br>
                <br>
                <b>Street:</b> <?=  $show["street"] ?> <br>
                <br>
                <b>Space in garage:</b> <?=  $show["garage"] ?> <br>
                <br>
                <b>Number of rooms:</b> <?=  $show["room"] ?> <br>
                <br>
                <b>Usable area:</b> <?=  $show["useble_area"] ?> m² <br>
                <br>
                <b>Total area:</b> <?=  $show["total_area"] ?> m² <br>
                <br>
                <b>Balcony:</b> <?=  $show["balcony"] ?> <br>
                <br>
                <b>Terrace:</b> <?=  $show["terrace"] ?> <br>
                <br>
                <b>Number of bathrooms:</b> <?=  $show["number_of_bathrooms"] ?> <br>

            </div>
        </div>
        </div>
    </div>
</div>

<!-------------------------------- SPAM ----------------------------->


<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3749.0338892800555!2d92.89310499794676!3d56.03271906826322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1697893047965!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
