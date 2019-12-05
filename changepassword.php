<!DOCTYPE html>
<html lang="en">
<?php
session_start();
// include 'inheader.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .formface{
            background: rgba(0, 0, 0, 0.5) url("img/changepass.jpg") center;
            background-size: cover;
            margin-top: 8%;
        }
        :focus {
            outline: none;
        }
        input[type="text"] {
            font: 15px/24px "Lato", Arial, sans-serif;
            color: #333;
            width: 100%;
            box-sizing: border-box;
            letter-spacing: 1px;
        }
        .effect-20 {
            border: 1px solid #ccc;
            padding: 7px 14px;
            transition: 0.4s;
            background: transparent;
        }
        .effect-20~.focus-border:before,
        .effect-20~.focus-border:before,
        .effect-20~.focus-border:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #3399FF;
            transition: 0.3s;
        }
        .effect-20~.focus-border:after {
            top: auto;
            bottom: 0;
            left: auto;
            right: 0;
        }
        .effect-20~.focus-border i:before,
        .effect-20~.focus-border i:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 2px;
            height: 0;
            background-color: #3399FF;
            transition: 0.4s;
        }
        .effect-20~.focus-border i:after {
            left: auto;
            right: 0;
            top: auto;
            bottom: 0;
        }
        .effect-20:focus~.focus-border:before,
        .effect-20:focus~.focus-border:after,
        .has-content.effect-20~.focus-border:before,
        .has-content.effect-20~.focus-border:after {
            width: 100%;
            transition: 0.3s;
        }
        .effect-20:focus~.focus-border i:before,
        .effect-20:focus~.focus-border i:after,
        .has-content.effect-20~.focus-border i:before,
        .has-content.effect-20~.focus-border i:after {
            height: 100%;
            transition: 0.4s;
        }
        .effect-20~label {
            position: absolute;
            left: 14px;
            width: 100%;
            top: 7px;
            color: #aaa;
            transition: 0.3s;
            z-index: -1;
            letter-spacing: 0.5px;
        }
        .effect-20:focus~label,
        .has-content.effect-20~label {
            top: -18px;
            left: 0;
            font-size: 12px;
            color: #3399FF;
            transition: 0.3s;
            z-index: 1;
        }
        div.col-8{
            z-index: 1;
            border: grey 1px solid;
        }
        input[type="password"]{
            background-color: transparent;
            border: none;
            margin: 0;
        }
        input[type="password"]:focus{
            box-shadow: unset;
        }
    </style>
</head>

<body class="w-100 h-100 position-absolute">
    <div class="formface">
    <div class="container h-100 w-100 d-flex align-items-center">
        <div class="row w-100 mt-5 mb-5">
            <form class="p-3 bg-white shadow pt-4 pb-4 col-4 m-auto" action="controller.php" method="POST">
                <h3 class="text-warning text-center pb-5">Change Your Password<?php echo $_SESSION['id']; ?></h3>
                <div class="input-effect col-8 m-auto">
                    <input type="password" class="effect-20 border-0" name="oldpassword" placeholder="" autofocus>
                    <label for="oldpassword">Old Password</label>
                    <span class="focus-border">
                            <i></i>
                        </span>
                </div><br>
                <div class="input-effect col-8 m-auto">
                    <input type="password" class="effect-20 border-0" name="password" placeholder="">
                    <label for="password">New Password</label>
                    <span class="focus-border">
                            <i></i>
                        </span>
                </div><br>
                <div class="input-effect col-8 m-auto">
                    <input type="password" class="effect-20 border-0" name="cpassword" placeholder="">
                    <label for="cpassword">Confirm New Password</label>
                    <span class="focus-border">
                            <i></i>
                        </span>
                </div><br>
                <input type="submit" class="btn btn-block btn-success rounded-0 col-8 m-auto" value="Change Password" name="changepassword">
                <div class="text-center">
                    <p class="mt-3"><span class="font-weight-light">Don't Want To Change?</span><a href="login.php" class="text-success">Login Here</a></p>
                </div>
            </form>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        // JavaScript for label effects only
        $(document).ready(function(){
            $(".input-effect input").val("");

            $(".input-effect input").focusout(function () {
                if ($(this).val() != "") {
                    $(this).addClass("has-content");
                } else {
                    $(this).removeClass("has-content");
                }
            })
        });
    </script>
    <?php
    include 'footer.php';
    ?>
</body>
</html>