<?php
session_start();
include 'outheader.php';
$id = $_SESSION['id'];
$q = $d->select("payment_details AS p INNER JOIN ngo as n", "ngo_id='$id' AND p.ngo_id=n.id");
$result=mysqli_fetch_array($q);
$MERCHANT_KEY = $result['merchant_key'];
$SALT = $result['merchant_salt'];
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
// $PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>

  <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!--   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/">  -->
  <style>
        .formface{
            background: rgba(0, 0, 0, 0.5) url("img/changepass.jpg") center;
            background-size: cover;
            margin-top: 8%;
        }
        div.col-8{
          border: unset !important;
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
            background: transparent

        }
        input[type="text"]:focus{
            box-shadow: unset;
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
        .space{
            margin-top: 90px;
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
        .form-control{
            height: 34px !important;
        }
        div.col-8{
            z-index: 1;
            border: grey 1px solid;
        }
    </style>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <<div class="space">
      
  </div>
  <body onload="submitPayuForm()" class="pt-5 bg-light">
  <div class="container h-100 mt-5">
    <div class="h-100 justify-content-center align-items-center row">
        <div class="col-md-4 bg-light shadow-lg">
    <br/>
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm" class="mt-5 mb-5">
    <h3 class="text-warning text-center pb-5">Pay to <?php echo $result['name']; ?></h3>
                <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
                <input type="hidden" name="hash" value="<?php echo $hash ?>" />
                <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />


                <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-inr fa-lg"></i></span>
                    <input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" class="form-control" type="text" placeholder="Enter Amount" />
                    
                    <span class="focus-border">
                            <i></i>
                        </span>
                    <span class="focus-border"></span>
                </div><br>


                <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user "></i></span>

                    <input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>"
                        class="form-control" type="text" placeholder=" Enter Your Name" />
                  
                    <span class="focus-border">
                            <i></i>
                        </span>
                    <span class="focus-border"></span>
                </div><br>




                <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                    <input name="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" class=" form-control" type="text" placeholder="Enter Your Email" />
                   
                    <span class="focus-border">
                            <i></i>
                        </span>
                    <span class="focus-border"></span>
                </div><br>




                <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" class=" form-control" type="text" placeholder="Enter Your Phone Number" />
                    
                  <!--   <span class="focus-border">
                            <i></i>
                        </span>
                    <span class="focus-border"></span> -->
                </div><br>
                <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-home"></i></span>
                    <textarea name="productinfo" class=" form-control" type="text" placeholder="Enter Your Address"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea>
                    <!-- <label>Address</label> -->
                   <!--  <span class="focus-border">
                            <i></i>
                        </span>
                    <span class="focus-border"></span> -->
                </div><br>
                <input type="hidden" name="surl" value="http://localhost/ngo/success.php" size="64" />
                <input type="hidden" name="furl" value="http://localhost/ngo/failure.php" size="64" />
                <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                <button type="submit" class="btn btn-warning btn-lg btn-block text-uppercase font-weight-lighter">Pay Now</button>
            </form>
            </div>
    </div>
</div>
</body>
<?php
    include 'footer.php';
    ?>
