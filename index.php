<?php

$ip = getenv('REMOTE_ADDR');

if(isset($_GET['json']))
{
	$data = array("ip" => $ip);
	echo json_encode($data);
} else
{
	echo $ip; 
}
?>
