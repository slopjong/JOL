<?php

include('JOL.php');

$object = new \stdClass();
$object->string = "value";
$object->boolean = true;
$object->integer = 42;
$object->array = array(1, 2, 3);
$object->object = new \stdClass();

$jol = new \slopjong\JOL();
$val = $jol->encode($object);

// should output
//  {string:'value',boolean:true,integer:42,array:[1,2,3],object:{}}
print_r($val);