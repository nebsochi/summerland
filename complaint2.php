<?php
    session_start();
    include 'includes/database.php';
    if(isset($_POST['submit'])){
        $tenantID = $_SESSION['tenantID'];
        $dateNow = date('y-m-d');
        $date = date('incidentDate');
        echo $date;
        // $complaintDate = $_POST['complaintDate'];
        // $incidentDate = $_POST['incidentDate'];
        $complaint = $_POST['complaint'];
        $complaintSql = "INSERT INTO complaints (tenantID, complaint, date) VALUES ($tenantID,'$complaint','$dateNow')";
        // mysqli_query($conn,$complaintSql);
        if(mysqli_query($conn,$complaintSql) === true){
            echo "Property Has Been Added Succsessfully";
          }
          else{
            echo "Property Was Not Added";
          }
}

?> 
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
            <a href="dashboard2.php" class="">
                <span>
                                <i class="fa fa-product-hunt" aria-hidden="true"></i>
                        </span>
                <span> 
                            Profile
                        </span>
            </a>

            <a href="houses_1.html">
                <span>
                            <i class=" active fa fa-home" aria-hidden="true"></i>
                        </span>
                <span class="active"> 
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
            <a href="complaint2.php" class="active">
                <span>
                            <i class=" active fa fa-comment-o" aria-hidden="true"></i>
                          </span>
                <span class="active"> 
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
            <a href="complaint2.php" class="add "data-toggle="modal" data-target="#exampleModalCenter">+ Add</a>
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
            <h1>My Message Board</h1>
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
                            <td><button class="btn-resize btn-outline-primary"><i class="fa fa-send-o" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"></i> Reply</button>|<button class="btn-resize btn-outline-danger"><i class="fa fa-trash-o"></i>Delete</button></td>
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
                            <td><button class="btn-resize btn-outline-primary"><i class="fa fa-send-o" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"></i> Reply</button>|<button class="btn-resize btn-outline-danger"><i class="fa fa-trash-o"></i>Delete</button></td>
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
                            <td><button class="btn-resize btn-outline-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-send-o"></i> Reply</button>|<button class="btn-resize btn-outline-danger"><i class="fa fa-trash-o"></i>Delete</button></td>
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
                            <td><button class="btn-resize btn-outline-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@Admin"><i class="fa fa-send-o"></i> Reply</button>|<button class="btn-resize btn-outline-danger"><i class="fa fa-trash-o"></i>Delete</button></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">My Prfile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div> -->
                <div class="modal-body">
                    <div class=" col-xs-12 col-md-12 col-lg-12 ">
                        <div class="card form__card" style="border:transparent">
                            <!-- <h3>Welcome!</h3>
                                        <div class="user-img"></div> -->
                            <h3>Complaint Form</h3>
                            <p>Please Send us details of any issues you might be experiencing, Our complaint center will analyze your complaint and take the appropriate measures that you complaints will not happen again in future</p>
                            <form action="" method="POST">
                                <label for="">Date of Complaint</label>
                                <div class="form-group">
                                    <input name="complaintDate" type="text" class="form-control" id="" aria-describedby="" placeholder="Full Name" value="<?php echo date('y-m-d'); ?>">
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                                <div class="form-group">
                                    <label for="">Date of Incident</label>
                                    <input  type="date" name="incidentDate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                </div>
                                <div class="form-group">
                                    <label for="">Complaint Details</label>
                                    <textarea  name="complaint"  class="form-control" id="landing__textarea" aria-describedby="" placeholder=""></textarea>

                                </div>
                                <div class="">
                                    <button type="submit" name="submit" class="btn btn-white submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <footer class=" footer fixed-bottom">
        <ul class="dashboard__footer__list ">
            <li class="dashboard__footer__left">
                <P>&copy copyright 2018 Summerland all right reserved</P>
            </li>
        </ul>
    </footer>

    <script>
        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
    </script>
    <script src=" assets/pluggins/jquery.min.js "></script>
    <script src="assets/pluggins/popper.min.js "></script>
    <script src="assets/pluggins/bootstrap/js/bootstrap.min.js "></script>

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