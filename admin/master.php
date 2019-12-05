<!doctype html>
<html class="no-js" lang="en">
    <!-- Mirrored from demo.admireadmin.com/admire_html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Dec 2018 04:31:45 GMT -->
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/logo1.ico" />

        <!--global styles-->
        <link rel="stylesheet" href="css/components.css" />
        <link rel="stylesheet" href="css/custom.css" />
        <!-- end of global styles-->
        <link rel="stylesheet" href="vendors/chartist/css/chartist.min.css" />
        <link rel="stylesheet" href="vendors/circliful/css/jquery.circliful.css">
        <link rel="stylesheet" href="css/pages/index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
    .wrapper{
        margin-top: 1.3%;
    }
</style>

    </head>
    <body>
        <div class="preloader" style="position: fixed; width: 100%; height: 100%; top: 0; left: 0; z-index: 100000; backface-visibility: hidden; background: #ffffff;">
            <div class="preloader_img" style="width: 200px; height: 200px; position: absolute; left: 48%; top: 48%; background-position: center; z-index: 999999">
                <img src="img/loader.gif" style=" width: 40px;" alt="loading...">
            </div>
        </div>
        <div id="wrap">
            <div id="top">
                <!-- .navbar -->
                <nav class="navbar navbar-static-top">
                    <div class="container-fluid m-0">
                        <a class="navbar-brand mr-0" href="index-2.html">
                            <h4 class="text-white"><img src="img/logow.png" class="admin_img" alt="logo"> Hii <?php echo $_SESSION['name']; ?></h4>
                        </a>
                        <div class="menu mr-sm-auto">
                            <span class="toggle-left" id="menu-toggle">
                                <i class="fa fa-bars text-white"></i>
                            </span>
                        </div>





                        <div class="btn-group">
                            <div class="user-settings no-bg">
                                <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                    <img src="img/admin.jpg" class="admin_img2 rounded-circle avatar-img" alt="avatar">
                                    <strong>Admin</strong>
                                    <span class="fa fa-sort-down white_bg"></span>
                                </button>
                                <div class="dropdown-menu admire_admin">
                                    <div class="popover-header"><?php echo $_SESSION['name']; ?></div>
                                    

                                    <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i>
                                        Log Out</a>
                                </div>
                            </div>
                        </div>

                        <!-- /.container-fluid -->
                </nav>
            </div>
            <!-- /.navbar -->
            <!-- /.head -->
        </div>
        <!-- /#top -->
        <div class="wrapper">
            <div id="left">
                <div class="menu_scroll">
                    <div class="media user-media">
                        <div class="user-media-toggleHover">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="user-wrapper">
                            <a class="user-link" href="#">
                                <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture" src="img/admin.jpg">
                                <p class="text-white user-info">Welcome <?php echo $_SESSION['name']; ?></p>
                            </a>

                        </div>
                    </div>

                    <!-- #menu -->
                    <ul id="menu">
                        <li>
                            <a href="dashboard.php">
                                <i class="fa fa-home"></i>
                                <span class="link-title menu_hide">&nbsp;Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="ngo_details.php">
                                <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                <span class="link-title menu_hide">&nbsp;NGO Details</span>
                            </a>
                        </li>

                        <li>
                            <a href="vol_details.php">
                                <i class="fa fa-user"></i>
                                <span class="link-title menu_hide">&nbsp;Volunteer Details</span>
                            </a>
                        </li>



                        <li>
                            <a href="donations.php">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <span class="link-title menu_hide">&nbsp;Transaction</span>
                            </a>
                        </li>

                        <li>
                            <a href="feedback.php">
                                <i class="fa fa-comments-o" aria-hidden="true"></i>
                                <span class="link-title menu_hide">&nbsp;Feedback</span>
                            </a>
                        </li>

                    </ul>
                    <!-- /#menu -->
                </div>
            </div>

            <!-- /#left -->






            <!-- Tab panes -->



            <!-- # right side -->


            <!-- /#wrap -->
            <!-- global scripts-->
            <script src="js/components.js"></script>
            <script src="js/custom.js"></script>
            <!--end of global scripts-->
            <!--  plugin scripts -->
            <script src="vendors/countUp.js/js/countUp.min.js"></script>
            <script src="vendors/flip/js/jquery.flip.min.js"></script>
            <script src="js/pluginjs/jquery.sparkline.js"></script>
            <script src="vendors/chartist/js/chartist.min.js"></script>
            <script src="js/pluginjs/chartist-tooltip.js"></script>
            <script src="vendors/swiper/js/swiper.min.js"></script>
            <script src="vendors/circliful/js/jquery.circliful.min.js"></script>
            <script src="vendors/flotchart/js/jquery.flot.js"></script>
            <script src="vendors/flotchart/js/jquery.flot.resize.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
            </script>
            <!--end of plugin scripts-->
            <script src="vendors/select2/js/select2.js"></script>
    <script src="vendors/datatables/js/jquery.dataTables.js"></script>
    <script src="js/pluginjs/dataTables.tableTools.js"></script>
    <script src="vendors/datatables/js/dataTables.colReorder.js"></script>
    <script src="vendors/datatables/js/dataTables.bootstrap.js"></script>
    <script src="vendors/datatables/js/dataTables.buttons.min.js"></script>
    <script src="js/pluginjs/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables/js/dataTables.rowReorder.min.js"></script>
    <script src="vendors/datatables/js/buttons.colVis.min.js"></script>
    <script src="vendors/datatables/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables/js/buttons.print.min.js"></script>
    <script src="vendors/datatables/js/dataTables.scroller.min.js"></script>
    <!-- end of plugin scripts -->
    <!--Page level scripts-->
    <script src="js/pages/datatable.js"></script>

            <script src="js/pages/index.js"></script>

    </body>

    <!-- Mirrored from demo.admireadmin.com/admire_html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Dec 2018 04:34:12 GMT -->

</html>