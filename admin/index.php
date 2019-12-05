<?php
session_start();
if(isset($_SESSION['sucess']))
{
    echo "";
}?>
<html>

<!-- Mirrored from demo.admireadmin.com/admire_html/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Dec 2018 04:36:31 GMT -->
<head>
    <title>Login 2 | Admire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!--Global styles -->
    <link rel="stylesheet" href="css/components.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="vendors/wow/css/animate.css"/>
    <!--End of Plugin styles-->
    <link rel="stylesheet" href="css/pages/login2.css"/>
</head>
<body class="login_background">
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="img/loader.gif" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="row">
                <div class="col-lg-4  col-md-8 col-sm-12  mx-auto login_image login_section login_section_top">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center text-white">
                            <img src="img/logow2.png" alt="josh logo" class="admire_logo">
                        </h3>
                    </div>
                    <div class="row m-t-20">
                        <div class="col">
                            <a class="text-success m-r-20 font_18">LOG IN</a>
                        </div>
                    </div>
                    <div class="m-t-15">
                        <form action="controller.php" id="login_validator" method="post">
                            <div class="form-group">
                                <label for="email" class="col-form-label text-white"> E-mail</label>
                                <input type="text" class="form-control b_r_20" id="email" name="email" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label text-white">Password</label>
                                <input type="password" class="form-control b_r_20" id="password" name="password" placeholder="Password">
                            </div>
                           <?php
                            if(isset($_SESSION['error']))
{
    echo "<b style='color:red'>".$_SESSION['error']."</b><br>";
    unset($_SESSION['error']);
}
else{
    echo"";
}?>
                            <div class="row m-t-15">
                                <div class="col">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input form-control">
                                        <span class="custom-control-indicator"></span>
                                        <a class="custom-control-description text-white">Keep me logged in</a>
                                    </label>
                                </div>
                            </div>
                            <div class="text-center login_bottom">
                                <button type="submit" name="btn" class="btn btn-mint btn-block b_r_20 m-t-10 m-r-20">LOG IN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- end of global js-->
<!--Plugin js-->
<script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script src="vendors/wow/js/wow.min.js"></script>
<script src="vendors/jquery.backstretch/js/jquery.backstretch.js"></script>
<!--End of plugin js-->
<script src="js/pages/login2.js"></script>

</body>


<!-- Mirrored from demo.admireadmin.com/admire_html/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Dec 2018 04:36:38 GMT -->
</html>