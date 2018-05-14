<?php
session_start();
include 'includes/database.php';
$apart1 = $_SESSION['propTypeDropdown'] ;
$apart2 = $_SESSION['propBedsNoDropdown'] ;
$apart3 = $_SESSION['propPriceDropdown'];
$sql = "SELECT * FROM properties WHERE propType='$apart1' AND propBedsNo='$apart2' AND propPrice <= '$apart3'";
$queryResult = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html id="aparts" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apartments | Summerland</title>
    <link href="https://fonts.googleapis.com/css?family=Pompiere" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/pluggins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/styles_2.css">
</head>

<body>
    <div class="navbar navbar-expand-lg navbar-dark sticky-top px-3" style="background-color: #1e6583">
        <a class="navbar-brand" href="index.html">SUMMERLAND</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item ">
                    <a class="nav-link" href="about.html">About Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Agent</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="search.html">Apartments</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQs</a>
                </li>
            </ul>
            <?php if(isset($_SESSION['tenantID'])): ?>
                    <form action="logout.php" method="POST">
                    <button type="submit" name="logout" class="btn btn-outline-white my-3 mx-1 my-sm-0">Logout</button>
                    </form>
             <?php else: ?>
            <form class="form-inline mr-4 my-2 my-lg-0">
                <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
                <a class="btn btn_b btn-outline-white my-3 mx-1 my-sm-0" href="login.html">Log In</a>
                <a class="btn btn_a btn-outline-blue my-3 mx-1 my-sm-0" href="register.html">Sign Up</a>
                <!-- <button class="btn btn-outline-blue my-3 mx-1 my-sm-0" type="submit">Sign Up</button> -->
            </form>
            <?php endif; ?>
        </div>
    </div>
    <section class="content mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="">
                        <div class="card card__one">
                            <div class="card-body">
                                <img src="assets/img/apartment-interior-room.jpeg" alt="Living room">
                                <p class="card-text">This is a one bedroom apartment is located on Montgomery Road, Summerland Estate. It is on the second floor in the ultra modern Toni's Apartments with an elevator for your convinience </p>
                                <a class="" href="apartment.html">.....More detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="card card__one ">
                        <div class="card-body">
                            <img src="assets/img/apartment-2-interior-room.jpeg" alt="Living room">
                            <p class="card-text">This three bedroom apartment is on Ikeja G.R.A. street Summerland. It is a penthouse suite in a modern building called Josephine's Court with an elevator for your convinience </p>
                            <a class="" href="apartment.html">.....More detail</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    <section class="content mb-5">
        <div class="container">
            <div class="row">
                <?php while($propRows = mysqli_fetch_assoc($queryResult)):?>
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="">
                        <div class="card card__one">
                            <div class="card-body">
                                <img src="<?php echo $propRows['propImage']; ?>" alt="Living room">
                                <p class="card-text">This is a one bedroom apartment is located on Montgomery Road, Summerland Estate. It is on the second floor in the ultra modern Toni's Apartments with an elevator for your convinience </p>
                                <a class="" href="apartment.php?id=<?php echo $propRows['propID']; ?>">.....More detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <!-- <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="card card__one ">
                        <div class="card-body">
                            <img src="assets/img/apartment-2-interior-room.jpeg" alt="Living room">
                            <p class="card-text">This three bedroom apartment is on Ikeja G.R.A. street Summerland. It is a penthouse suite in a modern building called Josephine's Court with an elevator for your convinience </p>
                            <a class="" href="apartment.html">.....More detail</a>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
        </div>
    </section>

    <footer class="fixed-bottom">
        <ul class="footer__list px-1">
            <li class="footer__left ml-2">
                <P>&copy copyright 2018 Summerland all right reserved</P>
            </li>
            <li class="footer__right">
                <ul class="footer__list">
                    <li>
                        <a href="#"><img src="assets/img/facebook.png" alt="facebook"></a>
                    </li>
                    <li>
                        <a href="#"><img src="assets/img/twitter.png" alt="facebook"></a>
                    </li>
                    <li>
                        <a href="#"><img src="assets/img/instagram.png" alt="facebook"></a>
                    </li>
                </ul>
            </li>
        </ul>
    </footer>


    <script src=" assets/pluggins/jquery.min.js "></script>
    <script src="assets/pluggins/popper.min.js "></script>
    <script src="assets/pluggins/bootstrap/js/bootstrap.min.js "></script>
</body>

</html>