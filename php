<?php

    $date = "2022-12-01";

    //validation if match date format('Y-m-d') then do 1 year calculation and update end date(update_post_meta): of end date
	if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) {
	    // return true;
	    echo 'matched'.'<br>';
	    $newDate = date('Y-m-d', strtotime($date. ' + 1 years'));
	    echo $newDate;
	} else {
	    // return false;
	    echo 'Date format not match';
	}

// echo date('Y-m-d');
?>
