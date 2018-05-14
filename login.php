
<?php
session_start();
$error = "";
if(isset($_POST['login'])){
    include 'includes/database.php';
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);    
  
    if(empty($email) || empty($password)){
        $error = "Empty field(s)";
    }
    else{
        $sql = "SELECT * FROM tenants WHERE email = '$email' OR phoneno = '$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
            $error = "Tenant has not Signed Up";
        }
        else{
            if($row = mysqli_fetch_assoc($result)){
              //Verify password
            //   $passwordCheck = password_verify($password, $row['password']);
        
              if($password != $row['password']){
                  $error = "Wrong Password for Email";
              } 
              elseif($password == $row['password']){
                $_SESSION['tenantID'] = $row['tenantID']; 
                $_SESSION['email'] = $row['email'];
                $_SESSION['first'] = $row['firstname'];
                $_SESSION['last'] = $row['lastname'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['phoneno'] = $row['phoneno'];
                header('Location: dashboard2.php');
              } 
              else{
                $error = "Login Error";
              }
            }

        }
    }
}


?>
<!DOCTYPE html>
<html id="login" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration | Summerland</title>
    <link href="https://fonts.googleapis.com/css?family=Pompiere" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
            <ul class="navbar-nav ml-auto pr-3 ">
                <!-- <li class="nav-item active ">
                    <a class="nav-link" href="register.html">Registration <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item ">
                    <a class="nav-link" href="about.html">About Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Agent</a>
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
                    <div class="form-row align-items-center">
                    </div>
                    <a class="btn btn_a btn-outline-blue my-3 mx-1 my-sm-0" href="register.php">Sign Up</a> 
                </form>
                <?php endif; ?>
        </div>
    </div>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 second__col">
                    <div class="">
                        <div id="login_card" class="card mt-5 mb-5 p-2">
                            <div class="card-body pt-5">
                                <h2 class="text-center p-2">Login</h2>
                                <?php if(isset($_POST['login']) && $error!=""): ?>
                                        <div class="" style="color: red;  margin-bottom: 10px; padding: 2px 20px 2px 10px; font-size: 20px; border: 1px solid; background-color: #551e21;"><?php echo $error ?></div>
                                 <?php endif; ?>
                                <form action="" method="POST" class="">
                                    <div class="form-group">
                                        <!-- <label for="exampleInputEmail1">Email address</label> -->
                                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" id="" aria-describedby="" placeholder="Enter Password">
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" id="">
                                        <label class="form-check-label" style="font-size: 1.15rem;" for="">
                                                 Remember me <a href="terms.html" class="ml-2">Forget Password</a>
                                                </label>
                                    </div>
                                    <div class="">
                                        <button type="submit" name="login" class="btn btn-white submit">Log In</button>
                                    </div>
                                    
                                </form>
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
</body>

</html>