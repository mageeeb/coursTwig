<?php
////require_once ('./courPoo/Paypal/cart.php');
////require_once('./courPoo/Paypal/payment.php');
////require_once('./courPoo/stripe/payment.php');
////require_once ('./courPoo/user/user.php');
//
//
//use \courPoo\Paypal\Payment as PaypalPayment;
//use \courPoo\stripe\Payment as PaymentStripe;
//
//$paymentPaypal = new PaypalPayment();
////$paymentStripe= new PaymentStripe();
//var_dump($paymentPaypal);
////
////$voiture = new Voiture(25,7000,"toyota","red");
////$voiture->setPrice(8500);
////$voiture->setModel('Mercedez');
////$voiture->promo(10);
////var_dump($voiture->getModel());


require_once ('./courPoo/personnage.php');
require_once ('./courPoo/Archer.php');

$merlin = new Personnage('Merlin');
$harry = new Personnage('Harry');
$archer = new Personnage('Archer');

//if($harry->mort()){
//    echo 'Harry is dead :(';
//}else{
//    echo 'Harrry live avec '.$harry->vie.'points de vie :)';
//}
var_dump($merlin,$harry,$archer);

//require_once ('./courPoo/form.php');
//require_once ('./courPoo/text.php');

//$form = new Form (array(
//    'username'=>'Roger'
//));
//
////die();
//echo $form->input('username');
//echo $form->input('password');
//echo $form->submit();
//var_dump($form);
//die();
//$form = new Form();
//echo $form->input('hbh');
//echo $form->input('hgg');
//echo $form->input('hbh');
//echo $form->input('hgg');
//echo $form->submit();

//$form = new Form($_POST);
//

//$form = new Form($_POST);
//var_dump(Text::withZero(10));
//
//?>
<!---->
<!--<form action="#" method="post">-->
<!--      --><?php
//      echo $form->input('username');
//      echo $form->input('password');
//      echo $form->submit();
//?>
<!---->
<!--</form>-->





