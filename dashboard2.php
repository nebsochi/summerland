<?php
    include 'includes/database.php';
    session_start();
$tenantID = $_SESSION['tenantID'];
$sql = "SELECT * FROM ownership WHERE tenantID = $tenantID";
$result = mysqli_query($conn, $sql);
$numRows = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> SUMMERLAND</title>
    <!-- <link rel="icon" type="image/png" href="assets/img/icon.png"> -->
    <link href="https://fonts.googleapis.com/css?family=Pompiere" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet " type="text/css " media="screen " href="assets/pluggins/bootstrap/css/bootstrap.min.css ">
    <!-- <link href="assets/pluggins/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="assets/pluggins/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- <link href="assets/pluggins/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet"> -->
    <!-- <link href="assets/pluggins/css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet " href="assets/css/grid.css ">
    <link rel="stylesheet " href="assets/css/main.css ">
    <link rel="stylesheet " href="assets/css/styles.css ">
</head>

<body>

    <section id="sideMenu">
        <div class="nav__text">
        <a href="index.php"><span><h2>SUMMERLAND</h2></span></a>
        </div>
        <nav class="nav__sidebar">
            <a href="dashboard2.php" class="active">
                <span>
                        <i class=" active fa fa-product-hunt" aria-hidden="true"></i>
                </span>
                <span class="active"> 
                    Profile
                </span>
            </a>

            <a href="houses_1.html" class="">
                <span>
                    <i class=" side fa fa-users" aria-hidden="true"></i>
                </span>
                <span> 
                    Property Details
                </span>
            </a>
            <a href="payment_form.html" class="">
                <span>
                     <i class=" side fa fa-credit-card-alt" aria-hidden="true"></i>
                 </span>
                <span> 
                      Payment
                </span>
            </a>
            <a href="complaint2.php" class="">
                <span>
                    <i class=" side fa fa-comment-o" aria-hidden="true"></i>
                  </span>
                <span> 
                       Complaint
                </span>
            </a>
        </nav>
    </section>
    <header class="nav__header">
        <div class="nav__searchbar">
            <!-- <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" href="#"><i class="fa fa-bars"></i> </a> -->
            <span class="span__searchbar"> <i class="fa fa-search" aria-hidden="true"></i></span>
            <input type="text" name="" placeholder="Type here for search">
        </div>
        <div class="nav__userfield">
            <a href="#" class="add">+ Add</a>
            <a href="#" class="notification">
                <i class="fa fa-bell-o" aria-hidden="true"></i>
                <span class="circle">3</span>
            </a>
            <div class="dropdown">
                <a href="#" class="dropbtn">
                    <div class="user-img"></div>
                    <i id="caret" class="fa fa-caret-down" aria-hidden="true"></i>
                </a>
                <div class="dropdown-content">
                <form action="logout.php" method="POST">
                    <button type="submit" name="logout" class="btn btn-outline-white my-3 mx-1 my-sm-0">Logout</button>
                </form>
                    <!-- <a href="logout.php">Logout</a> -->
                </div>
                <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div> -->
            </div>

            <!-- <div class="dropdown profile-element">
                <span>
                    <img alt="image" class="img-circle" src="assets/img/user.jpg" />
                     </span>
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Ore ValSochi </strong>
                     </span> <span class="text-muted text-xs block">Manager<b class="caret"></b></span> </span>
                </a>
                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="mailbox.html">Mailbox</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div> -->
        </div>
    </header>


    <section class="content__area">
        <div class="container">
            <div class="">
                <!-- <div class="heading">
                    <h1>Dashboard</h1>
                    <p>Welcome to Summerland</p>
                </div> -->
                <!-- <div class=" col card">
                    <div class="card-body">
                        <h4 class="card-title">hellboy</h4>
                        <h6 class="card-subtitle text-muted">Subtitle</h6>
                    </div>
                    <img src="holder.js/100x180/" alt="">
                    <div class="card-body">
                        <p class="card-text">Text</p>
                        <a href="#" class="card-link">Link 1</a>
                        <a href="#" class="card-link">Link 2</a>
                    </div>
                </div> -->
            </div>

            <div class="">
                <div class="row">
                    <div class=" col-xs-12 col-md-12 col-lg-12 ">
                        <div class="card user__card">
                            <h3>Welcome!</h3>
                            <div class="user-img"></div>
                            <!-- <span class="user-name">John Levis</span>
                            <span class="user-title">Summerland Admin</span> -->
                            <!-- <hr> -->
                            <!-- <div class="col-xs-3">
                            </div> -->
                            <div class="col-xs-12">
                                <div>
                                    <span class="">Occupant Name:</span>
                                    <span class="profile__name"><?php echo $_SESSION['first']." ".$_SESSION['last'] ?></span>
                                </div>
                                
                                <div>
                                    <span class="">House Unit:</span>
                                    <span class="profile__house">
                                        <?php if($numRows > 0): 
                                        $ownerRow = mysqli_fetch_assoc($result);
                                       $propID =  $ownerRow['propID'];
                                        $propSql = "SELECT propName FROM properties WHERE propID = '$propID'";
                                        $propResult = mysqli_query($conn,$propSql);
                                        $propRow = mysqli_fetch_assoc($propResult);
                                        echo $propRow['propName'];
                                        ?>
                                        <?php else: echo "NILL"; ?>
                                        <?php endif; ?>
                                    </span>
                                </div>
                                <div>
                                    <span class="">Move-in Date:</span>
                                    <span class="profile__Move-in">
                                    <?php if($numRows > 0): 
                                    $tenantID = $_SESSION['tenantID'];
                                    $sql = "SELECT * FROM ownership WHERE tenantID = $tenantID";
                                    $result = mysqli_query($conn, $sql);
                                        $ownerRow = mysqli_fetch_assoc($result);
                                       echo $ownerRow['ownerStartDate'];
                                     ?>
                                    <?php else: echo "NILL"; ?>
                                    <?php endif; ?>   
                                    </span>
                                </div>
                                <div>
                                    <span class="">Rent Due:</span>
                                    <span class="profile__due-date">
                                    <?php if($numRows > 0): 
                                    $tenantID = $_SESSION['tenantID'];
                                     $sql = "SELECT * FROM ownership WHERE tenantID = $tenantID";
                                     $result = mysqli_query($conn, $sql);
                                        $ownerRow = mysqli_fetch_assoc($result);
                                       echo $ownerRow['ownerDueDate'];
                                     ?>
                                    <?php else: echo "NILL"; ?>
                                    <?php endif; ?>  
                                    </span>
                                </div>
                                <!-- <div>
                                    <span class="">Service Charge:</span>
                                    <span class="profile__service_charge">Paid</span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class=" col-xs-6 ">
                        <div class="cards__card">
                            <h6>Interview Schedule</h6>
                            <span class="date"> 21 Jul, 2018</span>
                            <div class="col-xs-2">
                                <span class="job__type">IT</span>
                            </div>
                            <div class="col-xs-10">
                                <span class="location">Best Buy HQ</span>
                                <span class="position">Senior Developer</span>
                                <span class="time">09:30 am</span>
                            </div>
                            <div class="col-xs-2">
                                <span class="job__type__2">UX</span>
                            </div>
                            <div class="col-xs-10">
                                <span class="location">Online Shopping e-commerce</span>
                                <span class="position">Senior UI/UX Designer</span>
                                <span class="time">01:00 pm</span>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class=" col-xs-4 ">
                        <div class="cards__card">
                            <h6>Interview Schedule</h6>
                            <span class="date"> 21 Jul, 2018</span>
                            <div class="col-xs-2">
                                <span class="job__type">IT</span>
                            </div>
                            <div class="col-xs-10">
                                <span class="location">Best Buy HQ</span>
                                <span class="position">Senior Developer</span>
                                <span class="time">09:30 am</span>
                            </div>
                            <div class="col-xs-2">
                                <span class="job__type__2">UX</span>
                            </div>
                            <div class="col-xs-10">
                                <span class="location">Online Shopping e-commerce</span>
                                <span class="position">Senior UI/UX Designer</span>
                                <span class="time">01:00 pm</span>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- <div class="container">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>
                                COMPANY
                            </th>
                            <th>
                                Jobs
                            </th>
                            <th>
                                END OF APPLICATION
                            </th>
                            <th>
                                LOCATION
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="logo">VX</span> Online Shopping</td>
                            <td>Java Developent</td>
                            <td>July 28, 2018</td>
                            <td>New York, NY</td>
                        </tr>
                        <tr>
                            <td><span class="logo">TG</span>Online Shopping</td>
                            <td>Java Developent</td>
                            <td>July 28, 2018</td>
                            <td>New York, NY</td>
                        </tr>
                        <tr>
                            <td><span class="logo">HQ</span> Online Shopping</td>
                            <td>Java Developent</td>
                            <td>July 28, 2018</td>
                            <td>New York, NY</td>
                        </tr>
                        <tr>
                            <td> <span class="logo">TK</span>Online Shopping</td>
                            <td>Java Developent</td>
                            <td>July 28, 2018</td>
                            <td>New York, NY</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> -->
    </section>


    <footer class=" footer fixed-bottom">
        <ul class="dashboard__footer__list ">
            <li class="dashboard__footer__left">
                <P>&copy copyright 2018 Summerland all right reserved</P>
            </li>
        </ul>
    </footer>




    <!-- Mainly scripts -->
    <!-- <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script> -->

    <!-- Flot -->
    <!-- <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="js/plugins/flot/curvedLines.js"></script> -->

    <!-- Peity -->
    <!-- <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script> -->

    <!-- Custom and plugin javascript -->
    <!-- <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script> -->

    <!-- jQuery UI -->
    <!-- <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script> -->
</body>

</html>