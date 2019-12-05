<?php
require 'lib/dao.php';
require 'lib/model.php';
$d = new dao();
$m = new model();
extract($_POST);
if (isset($_POST['reg_ngo'])) {
        $m->set_data("name","$name");
    $m->set_data("reg_id","$reg_id");
    $m->set_data("email","$email");
    $m->set_data("mobile","$mobile");
    $m->set_data("pan","$pan");
    $m->set_data("address","$address");
    $m->set_data("sectors",$sectors);
    $m->set_data("state",$state);
    $m->set_data("city",$city);
    $m->set_data("ngo_type",$ngo_type);
    $m->set_data("password",$password);
   }
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
    $q = $d->insert("ngo",$a);
    header('location:index.php');

    ?>