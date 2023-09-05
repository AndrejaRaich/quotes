<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Montserrat:wght@400;900&family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=EB+Garamond&family=Montserrat:wght@400;900&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/babede9b63.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class= "row">
    <div class="dropdown show col-lg-4 col-md-12">
        <a class="btn btn-secondary w-100 " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="logos\njegos-potpis.png" alt="logo" id = "logo"> 
        <div>Citati</div>
        </a>
        <form class= "row " action="" method="post">
            <div class="dropdown-menu col-lg-12" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="posao.php" >Posao</a>
                <a class="dropdown-item" href="zdravlje.php" >Zdravlje</a>
                <a class="dropdown-item" href="ljubav.php" >Ljubav</a>
                <a class="dropdown-item" href="motivacija.php">Motivacija</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="njegos.php">Njegoševi citati <i class="fa-solid fa-fire fa-lg fa-beat" style="color: rgba(255, 99, 71, 1); text-shadow: none;"></i></a>
            </div>
        </form>
        <div class="blockquote-wrapper">
            <div class="blockquote">
                <h1>
                Knjige su hladni, ali pouzdani prijatelji.
                </h1>
                <h4>&mdash; Sokrat</h4>
            </div>
        </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide col-lg-8 col-md-12" data-bs-ride="carousel">
    <div class="carousel-inner">
    <?php 
        $path = __DIR__ . "/images";
        $photos = scandir($path);
        $photos = array_diff($photos, array('.', '..'));
        shuffle($photos);
        $img1 = $photos[0];
        $img2 = $photos[1];
        $img3 = $photos[2];
    ?>
        <div class="carousel-item active">
            <?php 
            echo "<img src='images\\$img1' class='d-block' alt='First slide'>"; 
            ?>
        </div>
        <div class="carousel-item">
            <?php 
            echo "<img src='images\\$img2' class='d-block' alt='Second slide'>"; 
            ?>
        </div>
        <div class="carousel-item">
            <?php 
            echo "<img src='images\\$img3' class='d-block' alt='Third slide'>"; 
            ?>
        </div>
    </div>
    <button class="carousel-control-prev arrow" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next arrow" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</header>
<footer class="py-3">
    <div class="container text-center">
        <?php date_default_timezone_set('Europe/Belgrade'); 
        $date = date('Y-m-d H:i:s'); ?>
        <p><?php echo $date; ?></p>
        <i class="icon fa-brands fa-twitter"></i>
        <i class="icon fa-brands fa-facebook"></i>
        <i class="icon fa-brands fa-instagram"></i>
        <i class="icon fa-solid fa-envelope"></i>
    </div>
</footer>
</body>
</html>