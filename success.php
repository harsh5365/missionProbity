<?php
include 'lib/dao.php';
include 'lib/model.php';
$d = new dao();
$m = new model();
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];

$q = $d->select("payment_details", "merchant_key='$key'");
$result=mysqli_fetch_array($q);
$ngo_id = $result['ngo_id'];
$salt= $result['merchant_salt'];

//ngo name call
$q = $d->select("ngo", "id='$ngo_id'");
$result=mysqli_fetch_array($q);
$ngo_name = $result['name'];

//data store
      $m->set_data("ngo_id", "$ngo_id");
      $m->set_data("ngo_name", "$ngo_name");
      $m->set_data("amount", "$amount");
      $m->set_data("donor_name", "$firstname");
      $m->set_data("email", "$email");
      $m->set_data("address", "$productinfo");
      $m->set_data("transaction_id", "$txnid");

      $a = array('ngo_id' =>$m->get_data(test_input('ngo_id')),
      'ngo_name' =>$m->get_data(test_input('ngo_name')),
      'amount' =>$m->get_data(test_input('amount')),
      'donor_name' =>$m->get_data(test_input('donor_name')),
      'email' =>$m->get_data(test_input('email')),
      'address' =>$m->get_data(test_input('address')),
      'transaction_id' =>$m->get_data(test_input('transaction_id')),
);
      $q = $d->insert("transaction_history", $a);
// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   } else {
          echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
		   }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>jQuery TableHTMLExport Plugin Examples</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/minty/bootstrap.min.css">
<style>
body { background-color: #fafafa; }
.container { margin: 150px auto; }
</style>

</head>
<body>
<div class="container">
<h1>Payment Receipt</h1>
    <table class="table" id="example">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Your Name</th>
      <th scope="col">Your Email</th>
      <th scope="col">Your Address</th>
      <th scope="col">Amount</th>
      <th scope="col">NGO Name</th>
      <th scope="col">Transaction Id</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $firstname; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $productinfo; ?></td>
      <td><?php echo $amount; ?></td>
      <td><?php echo $ngo_name; ?></td>
      <td><?php echo $txnid; ?></td>
    </tr>
    
  </tbody>
</table>
<p class="lead"><button id="json" class="btn btn-primary">TO JSON</button> <button id="csv" class="btn btn-info">TO CSV</button>  <button id="pdf" class="btn btn-danger">TO PDF</button></p>
  </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
<script src="js/tableHTMLExport.js"></script>
<script>
  $('#json').on('click',function(){
    $("#example").tableHTMLExport({type:'json',filename:'sample.json'});
  })
  $('#csv').on('click',function(){
    $("#example").tableHTMLExport({type:'csv',filename:'sample.csv'});
  })
  $('#pdf').on('click',function(){
    $("#example").tableHTMLExport({type:'pdf',filename:'sample.pdf'});
  })
  </script>
</body>