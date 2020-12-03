<?php
require ('number.php');
require ('three.php');
require ('five.php');
require ('tester.php');

$tester = new tester(new three(), new five());

for ($i = 1; $i <= 15; $i++){
    $result = $tester->executeTests($i);
    $display = implode('And',$result);
    print $display.PHP_EOL;
}
