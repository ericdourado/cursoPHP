<?php

require __DIR__."/vendor/autoload.php";
use src\Email;
use src\Mensageiro;
use src\Sms;

echo "<br/>";
$msg = new Mensageiro(new Email());
$msg->enviarToken();
echo "<br/>";
// ------------------------------

// $msg2 = new Mensageiro(new Sms());
// $msg2->setCanal("sms");
// $msg2->enviarToken();
// echo "<br/>";