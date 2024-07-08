<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>games</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
</head>
<body>
    <div class="games">
        <div class="menu">
            <ul>
                <!--Creation of icons-->
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="service.php">SERVICE</a></li>
                <li><a href="design.php">DESIGN</a></li>
                <li><a href="games.php">GAMES</a></li>
                <li><a href="membership.php">MEMBERSHIP</a></li>
                <li><a href="signup.php">SIGNUP</a></li>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <h1>KONAMI GAMES</h1>
        <br>
    <div class="information">Konami has produce a variety of games other than the well-known Efootball 24.<br>These games are of good quality and unlike other gaming companies,Konami has provided games for both for mobile and PC.
    </div>
    <div class="container-content">
        <h2>Castlevania Series</h2>
        <p>The <strong>Castlevania</strong> series blends action, platforming, and exploration with gothic horror themes.</p>
        <h2>Pro Evolution Soccer (PES)</h2>
        <p>The <strong>Pro Evolution Soccer</strong> series (known as <strong>eFootball PES</strong> in later years) is a highly regarded football simulation series praised for its realistic gameplay and deep tactical options.</p>
        <h2>Birds of Steel</h2>
        <p><strong>Birds of Steel</strong> (2012) is a combat flight simulation game developed by Gaijin Entertainment and published by Konami. It features realistic flight mechanics, historical World War II battles, and a variety of aircraft for players to pilot.</p>
        <h2>The Final Round</h2>
        <p><strong>The Final Round</strong> (1988) is an arcade boxing game developed and published by Konami. Players can engage in boxing matches with a variety of opponents, each with unique fighting styles and abilities.</p>
    </div>
    <div class="slider">
        <div><img src="unnamed.webp" alt="Slide 1"></div>
        <div><img src="Birds of Steel.jpg" alt="Slide 2"></div>
        <div><img src="round.jpg" alt="Slide 3"></div>
        <div><img src="Castlevania.jpg" alt="Slide 4"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.slider').slick({
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true
            });
        });
    </script>
    </div>
</body>
</html>