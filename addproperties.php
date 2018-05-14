<?php
$message = "";
if(isset($_POST['add'])){
    include 'includes/database.php';
        $propType = mysqli_real_escape_string ($conn,$_POST['propType']);
        $propName = mysqli_real_escape_string($conn,$_POST['propName']);
        $propBedsNo = mysqli_real_escape_string($conn,$_POST['propBedsNo']);
        $propImage = mysqli_real_escape_string($conn,'images/'.$_FILES['propImage']['name']);
        $propDescribe = mysqli_real_escape_string($conn,$_POST['propDescribe']);
        $propPrice = mysqli_real_escape_string($conn,$_POST['propPrice']);

              //tmp_name is given to file when it is uploaded
            copy($_FILES['propImage']['tmp_name'], $propImage);
                $sql = "INSERT INTO properties(propType, propName, propImage, propBedsNo, propDescribe, propPrice)"
                . "VALUES ('$propType','$propName','$propImage','$propBedsNo','$propDescribe','$propPrice')";
                  if(mysqli_query($conn,$sql) === true){
                    $message = "Property Has Been Added Succsessfully";
                //   header('Location: admin-prop-display.php');
                  }
                  else{
                    $message = "Property Was Not Added";
                  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Summerland</title>
    <!-- <link rel="icon" type="image/png" href="assets/img/icon.png"> -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet " type="text/css " media="screen " href="assets/pluggins/bootstrap/css/bootstrap.min.css ">
    <!-- <link href="assets/pluggins/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="assets/pluggins/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- <link href="assets/pluggins/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet"> -->
    <!-- <link href="assets/pluggins/css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet " href="assets/css/grid.css ">
    <link rel="stylesheet " href="assets/css/main.css ">
    <link rel="stylesheet " href="assets/css/styles.css ">
    <!-- <link rel="stylesheet" href="assets/css/styles_2.css"> -->

</head>

<body>
    <header class="nav__header">
        <div class="nav__searchbar">
            <!-- <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" href="#"><i class="fa fa-bars"></i> </a> -->
            <span class="span__searchbar"> <i class="fa fa-search" aria-hidden="true"></i></span>
            <input type="text" name="" placeholder="Type here for search">
        </div>
        <div class="nav__userfield">
            <a href="addproperties.php" class="add">+ Add</a>
            <a href="#" class="notification">
                <i class="fa fa-bell-o" aria-hidden="true"></i>
                <span class="circle">3</span>
            </a>
            <a href="#">
                <div class="user-img"></div>
                <i id="caret" class="fa fa-caret-down" aria-hidden="true"></i>
            </a>
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
    <section id="sideMenu">
        <div class="nav__text">
           <a href="index.php"><span><h2>SUMMERLAND</h2></span></a>
        </div>
        <nav class="nav__sidebar">
            <a href="#" class="active">
                <span>
                        <i class=" active fa fa-dashboard" aria-hidden="true"></i>
                </span>
                <span class="active"> 
                    Dashboard
                </span>
            </a>
            <a href="#" class="">
                <span>
                    <i class=" side fa fa-coffee" aria-hidden="true"></i>
                 </span>
                <span> 
                     Agent
                </span>
            </a>
            <a href="#" class="">
                <span>
                    <i class=" side fa fa-users" aria-hidden="true"></i>
                </span>
                <span> 
                   Tenants
                </span>
            </a>
            <a href="admin-prop-display.php" class="">
                <span>
                     <i class=" side fa fa-home" aria-hidden="true"></i>
                 </span>
                <span> 
                     Properties
                </span>
            </a>
            <a href="#" class="">
                <span>
                     <i class="side fa fa-credit-card" aria-hidden="true"></i>
                </span>
                <span> 
                        Payment
                 </span>
            </a>
            <a href="#" class="">
                <span>
                    <i class=" side fa fa-comments-o" aria-hidden="true"></i>
                  </span>
                <span> 
                      Complaints
                </span>
            </a>
        </nav>
    </section>



    <section class="content__area">
        <div class="heading">
            <h1>Dashboard</h1>
            <p>Welcome to Summerland</p>
        </div>

        <div class="" >
            <div class="table-responsive">
            <div class="col-xs-12 col-md-6 col-lg-6 second__col">
                    <div class="" style="width: 1000px; background-color:blue;">
                        <div id="regis_card" class="card mb-5 p-2" style="background-color:darkgrey;">
                            <div class="card-body">
                                <h3 class="text-center p-2">ADD PROPERTIES</h3>
                                <?php if(isset($_POST['add'])): ?>
                                <div class="" style="color: red;  margin-bottom: 10px; padding: 20px; font-size: 20px; border: 1px solid; background-color: #551e21;"><?php echo $message;  ?></div>
                                <?php endif; ?>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <!-- <label for="exampleInputEmail1">Email address</label> -->
                                        <input type="text" name="propType" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type of Property">
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                   
                                    <div class="form-group">
                                        <input type="text" name="propName" class="form-control" id="" aria-describedby="" placeholder="Name of Property">
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="propImage" class="form-control" id="" aria-describedby="" placeholder="Property Image">
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="propBedsNo" class="form-control" id="" aria-describedby="" placeholder="No of Bedrooms">
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <div class="form-group">
                                        <textarea name="propDescribe" class="form-control" id="" aria-describedby="" placeholder="Description of Property"></textarea>
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="propPrice" class="form-control" id="" aria-describedby="" placeholder="How Much Does the Property Cost">
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    
                                    <!-- <div class="form-group">
                                        <textarea type="text" class="form-control" id="landing__textarea" aria-describedby="" placeholder="Message"></textarea> -->

                            </div>
                            <div class="">
                                <input type="submit" name="add" class="btn btn-white submit" value="ADD">
                            </div>
                <!--<table>
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
                </table>-->
            </div>
        </div>
    </section>
    <section class="project">
        <div class="container container--lg--width">
       
</body>

</html>