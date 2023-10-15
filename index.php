<?php
require_once './vendor/autoload.php';

use CowSay\Cow;

$vache = new Cow('Ouah la vacheuh');
$vache->setTongue('U');
$vache->setEyes('Xx');
$vache->setPoop('Oo•.');
echo $vache->say();