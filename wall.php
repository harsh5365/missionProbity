<?php
include 'get_state.php';
session_start();
$_SESSION['id'] = $_GET['id'];
$id = $_SESSION['id'];
?>
<?php
        if (isset($_SESSION['id'])) {
            ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="WowThemez">

  <title>Charitify || NGO/Charity/Fundraising Template</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.css">


  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <!-- Font Awesome Icons CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Themify Icons CSS -->
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- Elegant Font Icons CSS -->
  <link rel="stylesheet" href="css/elegant-font-icons.css">
  <!-- Elegant Line Icons CSS -->
  <link rel="stylesheet" href="css/elegant-line-icons.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Venobox CSS -->
  <link rel="stylesheet" href="css/venobox/venobox.css">
  <!-- OWL-Carousel CSS -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <!-- Slick Nav CSS -->
  <link rel="stylesheet" href="css/slicknav.min.css">
  <!-- Css Animation CSS -->
  <link rel="stylesheet" href="css/css-animation.min.css">
  <!-- Nivo Slider CSS -->
  <link rel="stylesheet" href="css/nivo-slider.css">
  <!-- Main CSS -->
  <link rel="stylesheet" href="css/main.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="css/responsive.css">

  <link href="css/showhide.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="js/showhide.js"></script>
  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.js"></script>

  <style>
    body{
    background-color:#eeeff3;
    text-align:center
    }
    #main{
    position:relative;
    margin-top:15px
    }
    
    #first{
    width:450px;
    margin-top:0;
    padding:28px 25px;
    background-color:#fff;
    border:1px solid #000;
    border-radius:5;
    position:absolute;
    left:50%;
    margin-left:-180px;
    top:0
    }
    #second{
    width:450px;
    margin-top:0;
    padding:28px 25px;
    background-color:#fff;
    display:none;
    border:1px solid #000;
    border-radius:5;
    position:absolute;
    left:50%;
    margin-left:-180px;
    top:0
    }
    h3{
    margin-top:0
    }
    input[type=text],[type=password]{
    padding:4px;
    width:96%;
    height:40px  !important;
    margin-top:15px;
    font-size:14px

    }
    input[type=button]{
    background:linear-gradient(to bottom,#f8b864 5%,#36caf0 100%);
    box-shadow:inset 0 1px 0 0 #7bdcf4;
    border:1px solid #0F799E;
    color:#fff;
    width:385px;
    height:40px;
    margin-top:15px;
    font-size:18px;
    font-weight:700;
    cursor:pointer;
    text-shadow:0 1px 0 #13506D
    }
    input[type=button]:hover{
    background:linear-gradient(to bottom,#36caf0 5%,#22abe9 100%)
    }
    a{
    text-decoration:none;
    color:#6495ed
    }
    p#two{

    amargin-bottom: 0px;
    margin-right: 00px;
    padding-top: 0px;
  
    }
    p#one
    {
           float: left;
           margin-bottom: 0px;
           amargin-left: 60px;
    }
    .modal {
    display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
    }
    .modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%;
    padding-bottom: 30px;
    }
    /* The Close Button (x) */
    .close {
    position: absolute;
    right: 2px;
    top: -2px;
    color: #000;
    font-size: 35px;
    font-weight: bold;
    }
    .close:hover,.close:focus {
    color: red;
    cursor: pointer;
    }
    /* Add Zoom Animation */
    .animate {
    animation: zoom 0.6s
    }
    .imgcontainer
    {
    height: 50px;
    background-color:#f8b864;
    text-align: center;
    font-size: 10px;
    width: 448.5px;
    position: relative;
    padding-top: 3px;
    margin-top: -28px;
    margin-left: -25px;
    
    }

    #main .signup-btn
    {
      
      float: right;
            font-family: "proxima_novasemibold", sans-serif;
            padding: 3px 15px;
            border-radius: 5px;
            background: #f2f2f2;
            color: #ffff;
            cursor: pointer;
            text-decoration: none;
            margin-top: 20px;
            font-size: 16px;
    }

    .imgcontainer h1
    {
      font-size: 25px;
    }

    .modal
    {
      margin-left: 0px !important;
    }

    select
    {
      padding:4px;
    width:96%;
    height:40px  !important;
    margin-top:15px;
    font-size:14px
    }


    form h2
    {
      line-height: 0px !important;
    }
    </style>
</head>
<body>
<header id="header" class="header-section">
  <div class="top-header">
    <div class="container">
      <div class="top-content-wrap row">
        <div class="col-sm-8">
          <ul class="left-info">
            <li><a href="#"><i class="ti-email"></i>pjay5095@gmail.com</a></li>
            <li><i style="color: white" class="ti-mobile"></i>(+91)7359446501</li>
          </ul>
        </div>
        <div class="col-sm-4 d-none d-md-block">
          <ul class="right-info">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-header">
    <div class="container">
      <div class="bottom-content-wrap row">
        <div class="col-sm-4">
          <div class="site-branding">
            <img src="img/NGGGO.jpg" alt="Brand">
          </div>
        </div>
        <div class="col-sm-8 text-right text-left">
          <ul id="mainmenu" class="nav navbar-nav nav-menu">
                    <li class="active"> <a href="profile.php?id=<?php echo $id; ?>">Profile</a></li>
            <li><a href="wall.php?id=<?php echo $id; ?>">Wall</a></li>
            <li><a href="paymentgateway.php?id=<?php echo $id; ?>">Donate Now</a></li>
            <li><a href="volunteer.php?id=<?php echo $id; ?>">Become A Volunteer</a></li>
          </ul>

        </div>
      </div>
    </div>
  </div>

</header>
<div class="container pt-5">
    <div class="gallery mt-5 pt-3">
  <?php
  $q = $d->select("doc_upload", "ngo_id='$id'");
            $i = 0;
            while ($result = mysqli_fetch_array($q)) {
                $i++; ?>
            <a href="uploadimg/<?php echo $result['docFile']; ?>" data-fancybox="group" data-caption="<?php echo $result["description"]; ?>" >
                <img src="uploadimg/<?php echo $result['docFile']; ?>" alt="" style="height:200px !important; width:300px;">
            </a>
        <?php 
        } ?>
    </div>
</div>

<?php
        }else{
      header('location: index.php');
    }
include 'footer.php';
?>
<script type="text/javascript">
    $("[data-fancybox]").fancybox({ });
</script>
      </body>