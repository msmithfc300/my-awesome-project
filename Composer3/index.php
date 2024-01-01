<?php

require_once 'vendor/autoload.php';

use CowSay\Cow;




$bessie = new Cow('Hello, Farm!');


$output = $bessie->say();
$bessie->setTongue();
echo $bessie;



