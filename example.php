<?php

include('JOL.php');

$string_with_quotes = "'quotes'";

$object = new \stdClass();
$object->string = '"String example with" ' . $string_with_quotes;
$object->boolean = true;
$object->integer = 42;
$object->array = array(1, 2, 3);
$object->object = new \stdClass();

$jol = new \slopjong\JOL();
$val = $jol->encode($object);

// should output
//  {string:'\"String example with\" \'quotes\'',boolean:true,integer:42,array:[1,2,3],object:{}}
print_r($val);