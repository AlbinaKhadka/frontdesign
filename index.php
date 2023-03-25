<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ART and Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="css/style1.css">

</head>
<body>

<header class="header">

    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#contact">contact</a>
        <a href="#blogs">blogs</a>
        <a href="login1.php">Login</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    
</header>


<section class="home" id="home">

    <div class="content">
        <h3>Art is Precious as Our Life</h3>
        <p></p>
       
    </div>

</section>

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/log.jpg" alt="">
        </div>

        <div class="content">
            <h3>INTRODUCING FELIZ ART </h3>
            <p>The Feliz Art has been active in the promotion of contemporary Nepalese art and has strived to introduce international perspectives of art to the Kathmandu community.</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>




<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">
<form action="">
            <h3>CONTACT</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="Name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="Email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="Number">
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>Blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/grantha.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Grantha Chitra</a>
                <span>by admin / 1st Nov, 2022</span>
                <p>The oldest book painting of Nepal has been found in religious books. Originally they were made on a copper plate, palm leaf, wood, etc.
                     A 900-year old copper in the wooden surface is the oldest painting of Nepal. The painting consists of the picture of Pancha Buddha and 5 stars on one side and the pictures of Prajnaparamita, Bajrasawta and other goddesses on the other side.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/grantha.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Grantha Chitra</a>
                <span>by admin / 1st Nov, 2022</span>
                <p>The oldest book painting of Nepal has been found in religious books. Originally they were made on a copper plate, palm leaf, wood, etc.
                     A 900-year old copper in the wooden surface is the oldest painting of Nepal. The painting consists of the picture of Pancha Buddha and 5 stars on one side and the pictures of Prajnaparamita, Bajrasawta and other goddesses on the other side.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

       
</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">contact</a>
        <a href="#">blogs</a>
    </div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>