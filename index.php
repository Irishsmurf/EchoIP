<?php

$ip = getenv('REMOTE_ADDR');

function getIP($query, $json) {
	if($json) {
		$data = array("ip" => $query);
		return json_encode($data);
	} else {
		return $query;
	}
}

echo getIP($ip, isset($_GET['json']));

?>
