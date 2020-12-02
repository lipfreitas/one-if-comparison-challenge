<?php
require('test.php');
require('three.php');
require('five.php');
require('builder.php');

for($i = 1; $i <= 15; $i++){
    $builder = new builder();
    print $builder->render();
}