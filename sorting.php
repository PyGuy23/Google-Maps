<?php

$job_id = array('Payments Due', 'Payment Waiting', "Payment Error");
$schedule_id = array(1001, 1002, 1003, 1004);
$scheduler = array(04546, 25555, 23344);

array_multisort($job_id, SORT_ASC,$schedule_id, SORT_DESC, $scheduler, SORT_ASC);

for($i = 0; $i < count($job_id); $i++){
	echo "{$job_id[$i]}, {$schedule_id[$i]}, {$scheduler[$i]}\n";
}

//calculate difference between arrays

$job_finished = array("DONE_OK", "DONE_NETWORK_ERROR", "DONE_CANCEL");
$scheduler_id = array("DONE_OK", "DONE_WITH_ERROR", "DONE_ERROR");

$difference = array_diff($job_finished, $schuler_id);

print_r($difference);

//passing string offsets
//use isset to change behavior of values not to be NULL or nil
//with PHP 5.4
//$string_to_pass = 'some_value';
//var_dump(isset($string_to_pass['Payments Due']));
//var_dump(isset($string_to_pass['1002']));

var_dump(isset($job_id['Payments Due']));

var_dump(array_key_exists('Payments Due', $job_id));



?>