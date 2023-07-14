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

$merlin = new Personnage(80,20,"Merlin");
$harry = new personnage(60,20,"Harry");
$merlin->nom= 'Merlin';
$harry->nom = 'Harry';
//$harry->regenerer();
//$merlin->regenerer(5);
$merlin->attaque($harry);
if($harry->mort()){
    echo 'Harry is dead :(';
}else{
    echo 'Harrry live avec '.$harry->vie.'points de vie :)';
}
//var_dump($merlin);
//var_dump($harry);
//var_dump($harry->mort());