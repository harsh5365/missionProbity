<?php
session_start();

  $_SESSION['id'] = $_GET['id'];
  $_SESSION['email'] = $_GET['email'];

?>
<?php
if (isset($_SESSION['id'])) {
  include 'outheader.php';
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


    <style type="text/css" media="screen">
      .h3style {
        color: #fff;
        font-weight: bold;
        font-family: 'Playfair Display', serif;
        background-color: #f7b765;
        width: 100%;
        padding: 10px;
        font-size: 16px;
      }

      .space {
        padding-top: 160px;
      }

      table.w3-table-all {
        margin: 20px 0;
      }

      .w3-table,
      .w3-table-all {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        display: table;
      }

      .w3-table-all tr:nth-child(2n+1) {
        background-color: #fff;
      }

      .w3-bordered tr,
      .w3-table-all tr {
        border-bottom: 1px solid #ddd;
      }

      .w3-table td,
      .w3-table th,
      .w3-table-all td,
      .w3-table-all th {
        padding: 8px 8px;
        display: table-cell;
        text-align: left;
        vertical-align: top;
      }

      all td,
      .w3-table-all th {
        padding: 8px 8px;
        display: table-cell;
        text-align: left;
        vertical-align: top;
      }

      .w3-table-all tr:nth-child(2n) {
        background-color: #f1f1f1;
      }

      .w3-bordered tr,
      .w3-table-all tr {
        border-bottom: 1px solid #ddd;
      }
    </style>

  </head>

  <body>
    <!-- <header id="header" class="header-section">
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
                  <li><a href="gall.php?id=<?php echo $id; ?>">Wall</a></li>
                  <li><a href="donate.php?id=<?php echo $id; ?>">Donate Now</a></li>
                  <li><a href="volunteer.php?id=<?php echo $id; ?>">Become A Volunteer</a></li>
                </ul>

              </div>
            </div>
          </div>
        </div>

      </header> -->

    <div class="space"></div>
    <div class="container">
 <?php
            $id = $_SESSION['id'];
            $q = $d->select("ngo", "$id=id");
            $i = 0;
            while ($result = mysqli_fetch_array($q)) {
              $i++;
              $city = $result['city'];
              $q1 = $d->select("cities", "$city=city_id");
              $result1 = mysqli_fetch_array($q1);
              $ngo_id = $result['id'];
              $q2 = $d->select("members_ngo", "$ngo_id=ngo_id");
              $result2 = mysqli_fetch_array($q2);
              ?>

      <div class="row">
        <h3 class="h3style" style="text-align:center;"><span id="ngo_name_title"><?php echo $result['name']; ?></span></h3>
        <table style="border: 1px solid #ccc;border-collapse: collapse;border-spacing: 0;width: 100%; display: table;" class="w3-table-all notranslate">
          <tbody>
            <tr>
              <td>Unique Id of VO/NGO</td>
              <td><span id="UniqueID"><?php echo $result['reg_id'] ?></span></td>
            </tr>
          </tbody>
        </table>
        <h3 class="h3style">Registration Details</h3>
        <table style="border: 1px solid #ccc;border-collapse: collapse;border-spacing: 0;width: 100%;display: table;" class="w3-table-all notranslate">
          <tbody>
           
              <tr>
                <td>Type of NGO</td>
                <td id="ngo_type"><?php echo $result['ngo_type']; ?></td>
              </tr>
              <!-- <tr>
                <td>Registration No</td>
                <td id="ngo_regno"><?php echo $result['reg_id'] ?></td>
              </tr> -->

              <tr>
                <td>Pan NO</td>
                <td id="pc_upload"><?php echo $result['pan']; ?></td>
              </tr>

              <tr>
                <td>City of Registration</td>
                <td id="ngo_city_p"><?php echo $result1['city_name']; ?></td>
              </tr>
              <tr>
                <td>State of Registration</td>
                <td id="ngo_state_p"><?php echo $result1['state_name']; ?></td>
              </tr>
              <tr>
                <td>Date of Registration</td>
                <td id="ngo_reg_date"><?php echo $result['register_date']; ?></td>
              </tr>

            </tbody>
          </table>

          <h3 class="h3style">Members</h3>
          <table style="border: 1px solid #ccc;border-collapse: collapse;border-spacing: 0;width: 100%;display: table;" class="w3-table-all notranslate" id="member_table">
            <tbody>
              <tr>
                <td>Chairman</td>
                <td ><?php echo $result2['chairman']; ?></td>
              </tr>
              <tr>
                <td>President</td>
                <td ><?php echo $result2['president']; ?></td>
              </tr>
              <tr>
                <td>Secretary</td>
                <td ><?php echo $result2['secretary']; ?></td>
              </tr>

            </tbody>
          </table>

          <h3 class="h3style">Sector/ Key Issues</h3>
          <table style="border: 1px solid #ccc;border-collapse: collapse;border-spacing: 0;width: 100%;display: table;" class="w3-table-all notranslate">
            <tbody>
              <tr>
                <td>Key Issues</td>
                <td id="key_issues"><?php echo $result['sectors'] ?></td>
              </tr>
              <tr>
                <td>Operational Area-States</td>
                <td id="operational_states"><?php echo $result1['state_name']; ?></td>
              </tr>

              <tr>
                <td>Operational Area-District</td>
                <td id="operational_district"><?php echo $result1['city_name']; ?></td>
              </tr>
            </tbody>
          </table>




          <h3 class="h3style">Contact Details</h3>
          <table style="border: 1px solid #ccc;border-collapse: collapse;border-spacing: 0;width: 100%;display: table;" class="w3-table-all notranslate">
            <tbody>
              <tr>
                <td>Address</td>
                <td id="address"><?php echo $result['address']; ?></td>
              </tr>

              <tr>
                <td>City</td>
                <td id="city"><?php echo $result1['city_name']; ?></td>
              </tr>

              <tr>
                <td>State</td>
                <td id="state_p_ngo"><?php echo $result1['state_name']; ?></td>
              </tr>



              <tr>
                <td>Mobile No</td>
                <td id="mobile_n"><?php echo $result['mobile']; ?></td>
              </tr>


              <tr>
                <td>E-mail</td>
                <td id="email_n"><?php echo $result['email'] ?></td>
              </tr>
            <?php
          }
          ?>
          </tbody>
        </table>

      </div>
    </div>










  <?php
} else {
  header('location: index.php');
}
include 'footer.php';
?>