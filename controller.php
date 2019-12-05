<?php
session_start();
require 'lib/dao.php';
require 'lib/model.php';
$d = new dao();
$m = new model();
extract($_POST);
    if (isset($_POST['signin'])) {
        $password = sha1($password);
        $q=$d->select("ngo", "email='$email' AND password='$password'");
        $result=mysqli_fetch_array($q);
        if ($result > 0) {
            $_SESSION['email']=$email;
            $_SESSION['id']=$result['id'];
             $_SESSION['pan']=$result['pan'];
            header('location:up_gallary.php');
        } else {
            $_SESSION['error']='invalid details';
            header('location:log_ngo.php');
        }
    } elseif (isset($_POST['reg_ngo'])) {
         $password = sha1($password);
        $m->set_data("name", "$name");
        $m->set_data("reg_id", "$reg_id");
        $m->set_data("email", "$email");
        $m->set_data("mobile", "$mobile");
        $m->set_data("pan", "$pan");
        $m->set_data("address", "$address");
        $m->set_data("sectors", $sectors);
        $m->set_data("state", $state);
        $m->set_data("city", $city);
        $m->set_data("ngo_type", $ngo_type);
        $m->set_data("password", $password);
   
        $a = array('name' =>$m->get_data(test_input('name')),
       'reg_id' =>$m->get_data(test_input('reg_id')),
       'email' =>$m->get_data(test_input('email')),
       'mobile' =>$m->get_data(test_input('mobile')),
       'pan' =>$m->get_data(test_input('pan')),
       'address' =>$m->get_data(test_input('address')),
       'sectors' =>$m->get_data(test_input('sectors')),
       'state' =>$m->get_data(test_input('state')),
       'city' =>$m->get_data(test_input('city')),
       'ngo_type' =>$m->get_data(test_input('ngo_type')),
       'password' =>$m->get_data(test_input('password')));
        $q = $d->insert("ngo", $a);
        header('location:index.php');
    } elseif (isset($_POST['vol'])) {
        $m->set_data("name", $name);
        $m->set_data("email", $email);
        $m->set_data("mobile", $mobile);
        $m->set_data("sex", $sex);
        $m->set_data("address", $address);
        $m->set_data("state", $state);
        $m->set_data("city", $city);
        $m->set_data("occupation", $occupation);
        $m->set_data("bday", $bday);
        $m->set_data("rel_ngo", $rel_ngo);
    
        $a = array('name' =>$m->get_data(test_input('name')),
            'email' =>$m->get_data(test_input('email')),
            'mobile' =>$m->get_data(test_input('mobile')),
            'sex' =>$m->get_data(test_input('sex')),
            'address' =>$m->get_data(test_input('address')),
            'state' =>$m->get_data(test_input('state')),
            'city' =>$m->get_data(test_input('city')),
            'occupation' =>$m->get_data(test_input('occupation')),
            'bday' =>$m->get_data(test_input('bday')),
            'rel_ngo' =>$m->get_data(test_input('rel_ngo')));
        $q = $d->insert("vol_details", $a);
        header('location:volunteer.php');
    } elseif (isset($_POST['contact'])) {
        $m->set_data("name", $name);
        $m->set_data("email", $email);
        $m->set_data("message", $message);

        $a = array('name' =>$m->get_data(test_input('name')),
                'email' =>$m->get_data(test_input('email')),
                'message' =>$m->get_data(test_input('message')));
        $q = $d->insert("contact_us", $a);
        header('location:contact.php');
    }
    if(isset($_POST['keypeople'])){
        $m->set_data("chairman", "$chairman");
        $m->set_data("president", "$president");
        $m->set_data("secretary", "$secretary");
        $m->set_data("ngo_id", "$ngo_id");
   
        $a = array('chairman' =>$m->get_data(test_input('chairman')),
       'president' =>$m->get_data(test_input('president')),
       'secretary' =>$m->get_data(test_input('secretary')),
       'ngo_id' =>$m->get_data(test_input('ngo_id')));
        $q = $d->insert("members_ngo", $a);
        header('location: membersngo.php');
    }

         if (isset($_POST['Uploadimg'])) {
             $count=0;
             $errors = array();
             $extension = array("jpg","jpeg","png");
             $ext = pathinfo($_FILES["imgFile"]["name"], PATHINFO_EXTENSION);
             if(!in_array($ext, $extension))
             {

                 $count++;
                 $_SESSION['errorFile']="File type is invalid, Please select jpg, jpeg or png only.";

             }
             if($count == 0)
             {
                 $temp = $_FILES["imgFile"]["name"];
                 $imgFile = round(microtime(true)).".".$temp;

                 move_uploaded_file($_FILES["imgFile"]["tmp_name"], "uploadimg/" . $imgFile);
                 //$m->set_data("definationName",$definationName);
                 $m->set_data("imgFile",$imgFile);
                 $ngo_id=$_SESSION['id'];
                 $m->set_data("ngo_id",$ngo_id);
                 $m->set_data("description",$description);
                 $a = array('docFile'=>$m->get_data(test_input('imgFile')),
                    'ngo_id'=>$m->get_data(test_input('ngo_id')),
                    'description'=>$m->get_data(test_input('description')));

                 $q = $d->insert("doc_upload",$a);
                 $_SESSION['success']="Image is inserted";

                 header("Location:up_gallary.php");
             }
             else{
                 echo "could not add";
                 header("Location:up_gallary.php");
             }
            }


        if (isset($_POST['changepassword'])) {
            $oldpassword = sha1($oldpassword);
            $password = sha1($password);
            $cpassword = sha1($cpassword);
            $id = $_SESSION['id'];
            $q=$d->select("ngo", "id='$id'");
            $data=mysqli_fetch_array($q);
            $datOldPassword = $data['password'];

            if ($datOldPassword==$oldpassword) {
                $id = $_SESSION['id'];
                if ($password==$cpassword) {
                    $m->set_data('password', $password);
                    $a1= array('password'=> $m->get_data('password'));
                    $q=$d->update("ngo", $a1, "id='$id'");
                    if ($q==true) {
                        session_destroy();
                        header("Location: login.php");
                    } else {
                        header("Location: changepassword.php");
                    }
                } else {
                    echo "Strings don't match";
                    header("Location: 404.php");
                }
            } else {
                echo "entered wrong current password";
                //*Put the error here* header("Location: wrongPassword.php");
            }
        }
        if (isset($_POST['submitpaymentdetails'])){
            $m->set_data("merchant_key", "$merchant_key");
        $m->set_data("merchant_salt", "$merchant_salt");
        $m->set_data("ngo_id", "$ngo_id");
   
        $a = array('merchant_key' =>$m->get_data(test_input('merchant_key')),
       'merchant_salt' =>$m->get_data(test_input('merchant_salt')),
       'ngo_id' =>$m->get_data(test_input('ngo_id')));
        $q = $d->insert("payment_details", $a);
        if ($q==true) {
            header('Location:addbankdetail.php');
            echo "<h2>Added Successfully</h2>";
        }
        }
