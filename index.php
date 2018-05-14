<?php
session_start();
if(isset($_POST['signup'])){
    header('Location: register.php');
}
if(isset($_POST['login'])){
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en" id="index">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome | Summerland</title>
    <link href="https://fonts.googleapis.com/css?family=Pompiere" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/pluggins/bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css"> -->
    <link rel="stylesheet" href="assets/css/styles_2.css">
</head>

<body>
    <div class="navbar navbar-expand-lg sticky-top px-3" style="background-color: #fff">
        <a id="nav" class="navbar-brand" href="index.php">SUMMERLAND</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item ">
                    <a class="nav-link" href="about.html">About Us <span class="sr-only">(current)</span></a>
                </li>
                <?php if(isset($_SESSION['tenantID'])): ?>
            
                <li class="nav-item">
                    <a class="nav-link" href="dashboard2.php">My Dashboard</a>
                </li>
                <?php else: ?>
<?php endif; ?>
                <li class="nav-item">
                    <a href="properties-view.php" class="nav-link" href="#">Properties</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Agent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQs</a>
                </li>
            </ul>
            <?php if(isset($_SESSION['tenantID'])): ?>
             <form action="logout.php" method="POST">
            <button type="submit" name="logout" class=" btn btn-outline-white my-3 mx-1 my-sm-0 ">Logout</button>
            </form>
            <?php else: ?>
            <form class="form-inline mr-4 my-2 my-lg-0" method="POST" action="">
                <button id="landing__btn" class="btn btn-outline-white my-3 mx-1 my-sm-0" name="login" type="submit">Log In</button>
                <button id="landing__btn1" class="btn btn-outline-blue my-3 mx-1 my-sm-0" name="signup" type="submit">Sign Up</button>
            </form>
            <?php endif; ?>
        </div>
    </div>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="container">
                        <div class="card p-5 card__about__two">
                            <div class="card-body p-5">
                                <h2 class="card-title text-center">Welcome to SUMMERLAND</h2>
                                <p class="card-text"> We are leading property management comany with 50 years experience, and are committed to ensuring your is home is care and respect. With a varied portfolio of developments and with over 20 offices in Summerland positioned
                                    conveniently around Lagos, you are never far away from a local Summerland Property manager.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="fixed-bottom">
        <ul class="footer__list px-1">
            <li class="footer__left ">
                <P>&copy copyright 2018 Summerland all right reserved</P>
            </li>
            <li class="footer__right">
                <ul class="footer__list mr-3">
                    <li class="">
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
</body>

</html>