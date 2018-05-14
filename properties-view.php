<?php
     session_start();
    include 'includes/database.php';
    if(isset($_POST['searchProp'])){
        $propTypeDropdown = $_POST['propTypeDropdown'];
        $propBedsNoDropdown = $_POST['propBedsNoDropdown'];
        $propPriceDropdown = $_POST['propPriceDropdown'];
        $sql = "SELECT * FROM properties WHERE propType='$propTypeDropdown' AND propBedsNo='$propBedsNoDropdown' AND propPrice <= '$propPriceDropdown'";
        $propResult = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($propResult);
        if($resultCheck < 1){
            echo 'No Properties to Display';
        }
        else{
            $_SESSION['propTypeDropdown'] = $propTypeDropdown;
            $_SESSION['propBedsNoDropdown'] = $propBedsNoDropdown;
            $_SESSION['propPriceDropdown'] = $propPriceDropdown;
            header('Location: apartments.php');
            // // while($propRows = mysqli_fetch_assoc($propResult)){ 
            // //  echo '<div class="col-md-4">
            // //             <div class="well well-lg" style="text-align: center;">
            // //                 <a href="prop-info.php?propid='.$propRows['propID'].'">
            // //                     <img src="'.$propRows['propImage'].'" width="200" height="200">
            // //                     <br />
            // //                     <h4>'.$propRows['propName'].'</h4>
            // //                 </a>
            // //                 <div class="row">
            // //                     <a href="prop-info.php?propid='.$propRows['propID'].'" class="btn btn-xs btn-primary">View Property
            // //                         <span class="glyphicon glyphicon-edit"></span>
            // //                     </a>
            // //                 </div>
            // //             </div>
            // //         </div>';
            // }
        }
    }






?>
<!DOCTYPE html>
<html lang="en" id="about">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us | Summerland</title>
    <link href="https://fonts.googleapis.com/css?family=Pompiere" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/pluggins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/styles_2.css">
</head>

<body>
    <div class="navbar  navbar-expand-lg navbar-dark sticky-top px-3" style="background-color: #1e6583">
        <a class="navbar-brand" href="index.php">SUMMERLAND</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item active">
                    <a class="nav-link" href="about.html">About Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Service</a>
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
            <form class="form-inline mr-4 my-2 my-lg-0">
                <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
                <button class="btn btn-outline-white my-3 mx-1 my-sm-0" type="submit">Log In</button>
                <button class="btn btn-outline-blue my-3 mx-1 my-sm-0" type="submit">Sign Up</button>
            </form>
        </div>
    </div>
    <section class="content">
        <form action="" method="POST">
            <div class="container p-5">
            
            <!-- <select name="propTypeDropdown">
            <?php //$propTypeSql = "SELECT propType FROM properties"; ?>
            <?php //$propTypeResult = mysqli_query($conn, $propTypeSql); ?>
             <?php// while($propTypeCols = mysqli_fetch_array($propTypeResult)): ?>
                <option><?php //echo $propTypeCols['propType']; ?></option>
            <?php //endwhile; ?>
            </select> 
            <select name="propBedsNoDropdown">
            <?php //$propBedsNoSql = "SELECT propBedsNo FROM properties"; ?>
            <?php //$propBedsNoResult = mysqli_query($conn, $propBedsNoSql); ?>
            <?php //while($propBedsNoCols = mysqli_fetch_array($propBedsNoResult)): ?>
                <option><?php// echo $propBedsNoCols['propBedsNo']." Bedrooms"; ?></option>
            <?php //endwhile; ?>
            </select> 
            <select name="propPriceDropdown">
            <?php //$propPriceSql = "SELECT propPrice FROM properties"; ?>
            <?php //$propPriceResult = mysqli_query($conn, $propPriceSql); ?>
            <?php //while($propPriceCols = mysqli_fetch_array($propPriceResult)): ?>
                <option><?php //echo $propPriceCols['propPrice'];  ?></option>
            <?php //endwhile; ?>
            </select>   -->
            <select name="propTypeDropdown">
                <option>TYPE OF PROPERTY</option>
                <option>duplex</option>
                <option>bungalow</option>
                <option>flat</option>                
                <option>storey building</option>                              
            </select>
            <select name="propBedsNoDropdown">
                <option>NO OF BEDROOMS</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>                
                <option>4</option>
                <option>5</option>                              
                <option>6</option>                              
                              
            </select>
            <select name="propPriceDropdown">
                <option>MAX PRICE</option>
                <option>2000</option>
                <option>4000</option>
                <option>5000</option>
                <option>100000</option>
                <option>300000</option>
                <option>500000</option>                
                <option>1000000</option>                              
            </select>  
            <button type="submit" name="searchProp">Search Property</button>
        </form>
            <div class="row" >
                <div class="col-xs-12 col-md-12 col-lg-12 justify-content-center" >
                    <div class="container" >
                        <div class="card card__about__one card__about" >
                            <div class="card-body " style="padding:0px; height:1000px;">
                                
                            </div>
                        </div>
                    </div>
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