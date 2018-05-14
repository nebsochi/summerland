<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complaints | SUMMERLAND</title>
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
            <span><h2>SUMMERLAND</h2></span>
        </div>
        <nav class="nav__sidebar">
            <a href="dashboard_1.html">
                <span>
                        <i class="  fa fa-dashboard" aria-hidden="true"></i>
                </span>
                <span class=""> 
                    Dashboard
                </span>
            </a>
            <a href="agent.html" class="">
                <span>
                    <i class=" fa fa-coffee" aria-hidden="true"></i>
                 </span>
                <span class=""> 
                     Agent
                </span>
            </a>
            <a href="tenants.html" class="">
                <span>
                    <i class="fa fa-users" aria-hidden="true"></i>
                </span>
                <span> 
                   Tenants
                </span>
            </a>
            <a href="houses.html">
                <span>
                     <i class="fa fa-home" aria-hidden="true"></i>
                 </span>
                <span class="active"> 
                      Homes
                </span>
            </a>
            <!-- <a href="#" class="">
                <span>
                     <i class="side fa fa-credit-card" aria-hidden="true"></i>
                </span>
                <span> 
                        Payment
                 </span>
            </a> -->
            <a href="message.php" class="active">
                <span>
                    <i class=" active fa fa-comments-o" aria-hidden="true"></i>
                  </span>
                <span> 
                      Complaints
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
            <a href="#" class="add ">+ Add</a>
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
                    <!-- <a href="#">Profile</a>
                    <a href="#">Link 2</a> -->
                    <a href="login.html">Logout</a>
                </div>
                <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div> -->
            </div>
        </div>
    </header>
    <section class="content__area ">
        <div class="heading container">
            <h1>Complaints</h1>
            <p> Complaint List</p>
        </div>
        <div class="container">
            <nav class="breadcrumb">
                <!-- <a class="breadcrumb-item" href="dashboard_1.html">Home</a> -->
                <!-- <a class="breadcrumb-item" href="#"></a> -->
                <span class="breadcrumb-item active">Complaints</span>
            </nav>
        </div>
        <div class="container">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>
                                Date
                            </th>
                            <th>
                                Title
                            </th>
                            <th>
                                Sender
                            </th>
                            <th>
                                Receipiant
                            </th>
                            <th>
                                Message
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <td><span class="user-img"></span> </td> -->
                            <td>05 Mar, 2018</td>
                            <td><button class="btn-resize  btn-primary">Tenants</button></td>
                            <td> Louis Sochi </td>
                            <td>Agent Musa</td>
                            <td>
                                <div class="form-group">
                                    <label for=""></label>
                                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                                </div>
                            </td>
                            <td><button class="btn-resize btn-outline-primary"><i class="fa fa-send-o"></i> Reply</button>|<button class="btn-resize btn-outline-danger"><i class="fa fa-trash-o"></i>Delete</button></td>
                        </tr>
                        <tr>
                            <!-- <td><span class="user-img"></span> </td> -->
                            <td>05 Mar, 2018</td>
                            <td><button class="btn-resize  btn-primary">Tenants</button></td>
                            <td> Louis Ore </td>
                            <td>Agent Anna</td>
                            <td>
                                <div class="form-group">
                                    <label for=""></label>
                                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                                </div>
                            </td>
                            <td><button class="btn-resize btn-outline-primary"><i class="fa fa-send-o"></i> Reply</button>|<button class="btn-resize btn-outline-danger"><i class="fa fa-trash-o"></i>Delete</button></td>
                        </tr>


                        <tr>
                            <!-- <td><span class="user-img"></span> </td> -->
                            <td>05 Mar, 2018</td>
                            <td><button class="btn-resize  btn-secondary">Agent</button></td>
                            <td> Agent Musa </td>
                            <td>Louis Sochi</td>
                            <td>
                                <div class="form-group">
                                    <label for=""></label>
                                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                                </div>
                            </td>
                            <td><button class="btn-resize btn-outline-primary"><i class="fa fa-send-o"></i> Reply</button>|<button class="btn-resize btn-outline-danger"><i class="fa fa-trash-o"></i>Delete</button></td>
                        </tr>

                        <tr>
                            <!-- <td><span class="user-img"></span> </td> -->
                            <td>05 Mar, 2018</td>
                            <td><button class="btn-resize  btn-danger">Admin</button></td>
                            <td> Admin </td>
                            <td>Agent Musa</td>
                            <td>
                                <div class="form-group">
                                    <label for=""></label>
                                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                                </div>
                            </td>
                            <td><button class="btn-resize btn-outline-primary"><i class="fa fa-send-o"></i> Reply</button>|<button class="btn-resize btn-outline-danger"><i class="fa fa-trash-o"></i>Delete</button></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
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