<?php 
$num_one = 1;
$num_two = 2;
$num_three = "3";
$num_four = 4;

//writing functions
var_dump( $num_one );//outputs int(1)
var_dump ( $num_two );//outputs int(2)
var_dump ( $num_three );//outputs string(1)"3"
var_dump ( $num_one + $num_two + $num_three );//still outputs 6 when ran
var_dump ( $num_one + $num_two + $num_four );//outputs 7

?>