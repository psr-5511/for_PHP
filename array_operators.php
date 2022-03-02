<?php

// array is a collection of multiple data elements

$stu_rec = array(10.01,20,30,40); // syntax 1
$stu_cls=["4"=>10,"2"=>20,'30',40,10]; // syntax 2

// two types arrays are there :
//indexed array -> array itself decides it's index
// operator '+' in case of array works as a union
$stu_out = $stu_rec + $stu_cls;
print_r($stu_out);


// equality operator




?>
