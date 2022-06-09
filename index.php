<!DOCTYPE html>
<html lang="nl">

<?php
require 'PHP/function.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `products`');

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.php">
    <script src="java/script.js" defer></script>
    <title>Faiss</title>
</head>

<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href=""><img src="img/LogoFaiss.png" class="logo" alt=""></a>
            <nav>
                <li><a href="index.html">Home</a></li>
                <li><a href="#Shop">Shop</a></li>
                <li><a href="#">Ontwerpen</a></li>
                <li><a href="#">Over ons</a></li>
                <li><a href="contact.html">Contact</a></li>
            </nav>
        </header>
        <div class="content">
            <div class="textbox">
                <h2>FEEL GOOD<br>DRESS<span class="texth">GOOD</span></h2>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam fugit quis fuga corrupti deserunt
                    sed.
                    Animi at tempora asperioresaliquam est.</p>
                <a class="button1" href="#Shop">Shop now</a>
            </div>
            <div class="imgBox">
                <img src="img/Jordan1Landing.png" class="Jordan1">
            </div>
        </div>
        <ul class="thumb" ;>
            <li><img src="img/JordanThumb1.png" onclick="imgSlider('img/Jordan1Landing.png');  changeCirclecolor('#68573f'); changeTextcolor('#68573f'); changebuttoncolor('#68573f')">
            </li>
            <li><img src="img/JordanThumb2.png" onclick="imgSlider('img/Jordan1Landing2.png'); changeCirclecolor('#adc7dc'); changeTextcolor('#adc7dc'); changebuttoncolor('#adc7dc')">
            </li>
            <li><img src="img/JordanThumb3.png" onclick="imgSlider('img/Jordan1Landing3.png'); changeCirclecolor('#dec2b9'); changeTextcolor('#dec2b9'); changebuttoncolor('#dec2b9')">
            </li>
            <li><img src="img/Teeontwerpzelf.webp" onclick="imgSlider('img/Teeontwerpzelf.webp'); changeCirclecolor('#2dd6b8'); changeTextcolor('#2dd6b8'); changebuttoncolor('#2dd6b8')">
            </li>
        </ul>
    </section>
    <div>
        <video src="vid/FaissxNikeVid1.mp4" autoplay loop muted plays-inline class="bvideo"></video>
    </div>

    <div class="ProductCard">
        <h1 id="Shop" class="ProductTitle">Shop All</h1>
        <ul class="ProductSlider">
            <?php foreach ($result as $row) : ?>
                <li class="item-a">
                    <div class="containerp">
                        <div class="card">
                            <figure class="colorcircle" style="background: <?php echo $row['color']; ?>">

                            </figure>
                            <div class="proImg">
                                <img src=<?php echo $row['foto']; ?> alt="">
                            </div>
                            <div class="contentbox">
                                <h2><?php echo $row['titel']; ?></h2>
                                <div class="size">
                                    <h3>Maat:</h3>
                                    <span>39</span>
                                    <span>40</span>
                                    <span>41</span>
                                </div>
                                <div class="color">
                                    <h3>colors:</h3>
                                    <span style="background: <?php echo $row['color'];?>">
                                    </span>
                                </div>
                                <a href="productpage.php?id=<?php echo $row['id'];?>">Buy now</a>
                            </div>
                        </div>
                </li>
            <?php endforeach; ?>
    </div>
    <footer>
        <h4 class="footertitle">Made By Faiss</h4>
        <span class="footertext">Contact</span>
    </footer>
</body>

</html>