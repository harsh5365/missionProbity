<?php
session_start();
include 'lib/dao.php';
$d = new dao();
if(isset($_SESSION['name'])){
include'master.php';
$email = $_SESSION['email'];            
?>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>

    <!--global styles-->
    
   

</head>
<body>
    <br>
<div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="m-t-5">
                                <i class="fa fa-home"></i>
                                Dashboard Hello <?php echo $_SESSION['name']; ?>
                            </h4>
                        </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">


                    <!--top section widgets-->
                    <div class="row widget_countup">
                        <div class="col-12 col-sm-6 col-xl-6">

                            <div id="top_widget1">
                                <div class="front">
                                    <div class="bg-primary p-d-15 b_r_5">
                                        <div class="float-right m-t-5">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <div class="user_font">NGOs</div>
                                        <?php $q = $d->select_row("ngo");
                                        $ngo = mysqli_fetch_array($q);?>
                                        <div id="widget_countup12">
                                        <?php
                                        echo $ngo['num_rows'];
                                        ?>
                                        </div>
                                        <div class="previous_font">Total NGOs</div>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="bg-white b_r_5 section_border">
                                        <div class="p-t-l-r-15">
                                            <div class="float-right m-t-5">
                                                <i class="fa fa-users text-primary"></i>
                                            </div>
                                            <div id="widget_countup12"><?php
                                        echo $ngo['num_rows'];
                                        ?></div>
                                            <div>NGOs</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="visitsspark-chart" class="spark_line"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-6 media_max_573">
                            <div id="top_widget2">
                                <div class="front">
                                    <div class="bg-success p-d-15 b_r_5">
                                        <div class="float-right m-t-5">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                        <div class="user_font">Total Donations</div>
                                        <?php
                                        $q = $d->sum("transaction_history", "amount");
                                        $money = mysqli_fetch_array($q);?>
                                        <div id="widget_countup22"><?php echo $money['total']; ?> Rupees</div>
                                        <div class="tag-white">
                                            <span id="percent_count2">60</span>%
                                        </div>
                                        <div class="previous_font">Sales per month</div>
                                    </div>
                                </div>

                                <div class="back">
                                    <div class="bg-white b_r_5 section_border">
                                        <div class="p-t-l-r-15">
                                            <div class="float-right m-t-5 text-success">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                            <div id="widget_countup22"><?php echo $money['total']; ?> Rupees</div>
                                            <div>Sales</div>

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="salesspark-chart" class="spark_line"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-sm-6 col-xl-6 mt-5 media_max_1199">
                            <div id="top_widget3">
                                <div class="front">
                                    <div class="bg-warning p-d-15 b_r_5">
                                        <div class="float-right m-t-5">
                                            <i class="fa fa-handshake-o"></i>
                                        </div>
                                        <div class="user_font">Volunteers</div>
                                        <?php $q = $d->select_row("vol_details");
                                        $vol = mysqli_fetch_array($q);
                                        ?>
                                        <div id="widget_countup32"><?php echo $vol['num_rows']; ?></div>
                                        <div class="tag-white ">
                                            <span id="percent_count3">30</span>%
                                        </div>
                                        <div class="previous_font">Monthly comments</div>
                                    </div>
                                </div>

                                <div class="back">
                                    <div class="bg-white b_r_5 section_border">
                                        <div class="p-t-l-r-15">
                                            <div class="float-right m-t-5 text-warning">
                                                <i class="fa fa-handshake-o"></i>
                                            </div>
                                            <div id="widget_countup32"><?php echo $vol['num_rows']; ?></div>
                                            <div>Comments</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="mousespeed" class="spark_line"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-sm-6 col-xl-6 mt-5 media_max_1199">
                            <div id="top_widget4">
                                <div class="front">
                                    <div class="bg-danger p-d-15 b_r_5">
                                        <div class="float-right m-t-5">
                                            <i class="fa fa-comments-o"></i>
                                        </div>
                                        <div class="user_font">Feedback</div>
                                        <?php $q = $d->select_row("contact_us");
                                        $feed = mysqli_fetch_array($q);?>
                                        <div id="widget_countup42"><?php echo $feed['num_rows']; ?></div>
                                        <div class="tag-white">
                                            <span id="percent_count4">80</span>%
                                        </div>
                                        <div class="previous_font">Total Feedbacks </div>
                                    </div>
                                </div>

                                <div class="back">
                                    <div class="bg-white section_border b_r_5">
                                        <div class="p-t-l-r-15">
                                            <div class="float-right m-t-5 text-danger">
                                                <i class="fa fa-comments-o"></i>
                                            </div>

                                            <div id="widget_countup42"><?php echo $feed['num_rows']; ?></div>
                                            <div>Rating</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span id="rating" class="spark_line"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    </body>
                    <?php
}
else{
    header('Location: index.php');
}
                    ?>