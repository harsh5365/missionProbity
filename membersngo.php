<?php
session_start();
 $id = $_SESSION['id'];
 if (isset($_SESSION['pan'])) {
include 'inheader.php';
// include 'lib/dao.php';
?>
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
    #LoginForm {
        padding-top: 120px;
        background-image: url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        
    }

    .form-heading {
        color: #fff;
        font-size: 23px;
    }

    .panel h2 {
        color: #444444;
        font-size: 18px;
        margin: 0 0 8px 0;
    }

    .panel p {
        color: #777777;
        font-size: 14px;
        margin-bottom: 30px;
        line-height: 24px;
    }

    .login-form .form-control {
        background: #f7f7f7 none repeat scroll 0 0;
        border: 1px solid #d4d4d4;
        border-radius: 4px;
        font-size: 14px;
        height: 50px;
        line-height: 50px;
    }

    .main-div {
        background: #ffffff none repeat scroll 0 0;
        border-radius: 2px;
        margin: 10px auto 30px;
        max-width: 38%;
        padding: 50px 70px 70px 71px;
    }

    .login-form .form-group {
        margin-bottom: 10px;
    }

    .login-form {
        text-align: center;
    }

    .forgot a {
        color: #777777;
        font-size: 14px;
        text-decoration: underline;
    }

    .login-form .btn.btn-primary {
        background: #f0ad4e none repeat scroll 0 0;
        border-color: #f0ad4e;
        color: #ffffff;
        font-size: 14px;
        width: 100%;
        height: 50px;
        line-height: 50px;
        padding: 0;
    }

    .forgot {
        text-align: left;
        margin-bottom: 30px;
    }

    .botto-text {
        color: #ffffff;
        font-size: 14px;
        margin: auto;
    }

    .login-form .btn.btn-primary.reset {
        background: #ff9900 none repeat scroll 0 0;
    }

    .back {
        text-align: left;
        margin-top: 10px;
    }

    .back a {
        color: #444444;
        font-size: 13px;
        text-decoration: none;
    }
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<body>
<div id="LoginForm">
    <div class="container mt-5">
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                    <h2>Key People</h2>
                </div>
                <form id="Login" method="post" action="controller.php">

                    <div class="form-group">
                        <input type="text" name="chairman" class="form-control" placeholder="Chairman">
                    </div>

                    <div class="form-group">
                        <input type="text" name="president" class="form-control" placeholder="President">
                    </div>
                    <div class="form-group">
                        <input type="text" name="secretary" class="form-control" placeholder="Secretary">
                    </div>
                    <input type="hidden" name="ngo_id" value="<?php echo $_SESSION['id']; ?>">

                    <input type="submit" name="keypeople" class="btn btn-primary" value="Submit">
                    <div class="text-center">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
include 'footer.php';
 }
 else{
     header('Location: login.php');
 }
?>
</body>

