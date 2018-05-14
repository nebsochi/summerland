<?php
session_start();
require_once 'config.php';
$id = $_GET['id'];
include 'includes/database.php';
$sql = "SELECT * FROM properties WHERE propID='$id'";
$queryResult = mysqli_query($conn, $sql);
$queryResultRow = mysqli_fetch_assoc($queryResult);
if(isset($_POST['submit'])){
$duration = $_POST['duration'];
if($duration == 1){
    $year = 'year';
}
else{
    $year = 'years';
}

 $propPriceDuration = durationAmount($duration,$queryResultRow['propPrice']);
}
function durationAmount($durationValue, $propPrice){
    // $returnedAmount = 0;
   $returnedAmount =  $propPrice * $durationValue; 
  return $returnedAmount;
}
?>


<!DOCTYPE html>
<html id="aparts" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apartment | Summerland</title>
    <link href="https://fonts.googleapis.com/css?family=Pompiere" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/pluggins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/styles_2.css">
</head>

<body>
    <div class="navbar navbar-expand-lg navbar-dark sticky-top px-3" style="background-color: #1e6583">
        <a class="navbar-brand" href="index.php">SUMMERLAND</a>
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
                <a class="btn btn_b btn-outline-white my-3 mx-1 my-sm-0" href="register.html">Log In</a>
                <a class="btn btn_a btn-outline-blue my-3 mx-1 my-sm-0" href="register.html">Sign Up</a>
                <!-- <button class="btn btn-outline-blue my-3 mx-1 my-sm-0" type="submit">Sign Up</button> -->
            </form>
            <?php endif;?>
        </div>
    </div>
    <section class="content mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="">
                        <div class="card card__one">
                            <div class="card-body">
                                <!-- <img src="assets/img/apartment-interior-room.jpeg" alt="Living room"> -->
                                <img src="<?php echo $queryResultRow['propImage']; ?>" alt="Living room">
                                <!-- <p class="card-text">This is a one bedroom apartment is located on Montgomery Road, Summerland Estate. It is on the second floor in the ultra modern Toni's Apartments with an elevator for your convinience </p> -->
                                <a class="" href="apartment.html">.....More detail</a>
                            </div>
                            <div class="">
                                <div class="card no__card__1">
                                    <p>Amenities</p>
                                    <span><i class="fa fa-bathtub"></i>Bathroom</span><span><i class="fa fa-bed"></i> Bed</span>
                                    <span><i class="fas fa-plug"></i> Stable Power</span><span><i class="fab fa-superpowers"></i> Air conditional</span> <br>
                                    <span><i class="fa fa-smoking"></i> Washing Machine</span><span><i class="fas fa-wifi"></i>Wifi</span><span><i class="fas fa-lock"></i> 24/7 security</span><span><i class="fas fa-car"></i> Parking</span> <br>
                                    <span><i class="fa fa-smoking"></i>Furniture</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if(isset($_SESSION['tenantID'])): ?>
                <div class="col-xs-12 col-md-6 col-lg-6 second__col">
                    <div class="aparts">
                        <!-- <h5 class="text-center">N120,000/Month + N80,000 - Service Charge</h5> -->
<h5 class="text-center"><?php  if(isset($_POST['submit'])): echo  "Pay  $".$propPriceDuration." for $duration $year"; //echo durationAmount($duration); ?><?php endif;?></h5>
                        <div class="card card__one mt-5 mb-5">
                            <div class="card-body">
                                <!-- <h6 class=" p-0">Contact us to get the best offers from our agents!</h6> -->
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="">Move in on</label>
                                        <input type="date" class="form-control" id="" aria-describedby="" placeholder="DD/MM/YY">
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="">Duration</label>
                                        <select name="duration" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        </select>
                                        <!-- <input name="duration" type="text" class="form-control" id="" aria-describedby="" placeholder="1 Month"> -->
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <!-- <div class="form-group">
                                        <textarea type="text" class="form-control" id="landing__textarea" aria-describedby="" placeholder="Message"></textarea>

                                    </div> -->
                                    <div class="">
                                        <button name="submit" type="submit" class="btn btn-white submit">Book and Pay</button>
                                    </div>    
                                </form>
                                <!-- stripe-button -->
                                <form action="stripe.php?id=<?php echo $_GET['id']; ?>" method="POST">
                                    <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="<?php echo $stripeDetails['publishablekey']; ?>"
                                        data-amount="<?php echo ($queryResultRow['propPrice']*100); ?>"
                                        data-name="<?php echo $queryResultRow['propName']; ?>"
                                        data-description="<?php echo "A ". $queryResultRow['propType']." with ".$queryResultRow['propBedsNo']. " Bedrooms"; ?>"
                                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                        data-locale="auto">
                                    </script>
                                </form>
                            </div>
                        </div>
                        <div class="container">
                            <div class="card no__card__2">
                                <p>House rules</p>
                                <span><i class="fa fa-paw"></i>No Pets</span> <span><i class="fa fa-smoking"></i> No Smoking</span>
                            </div>
                        </div>
                    </div>
                
                </div>
                <?php else: ?>
                <?php endif; ?>
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