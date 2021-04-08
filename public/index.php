<?php

require_once '../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

$greet = new Hello();
$greet->talk();
echo SayHello::world();


?>