<?php

	//curl -u admin:admin http://localhost:8080/confluence/rest/api/content/3965072?expand=body.storage
	$url = 'https://yinghan.atlassian.net/wiki/rest/api/content?expand=body.storage';
	//  Initiate curl
	$ch = curl_init();
	// Disable SSL verification
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	// Will return the response, if false it print the response
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Set the url
	curl_setopt($ch, CURLOPT_URL,$url);
	// Execute
	$result = curl_exec($ch);
	// Closing
	curl_close($ch);
	// echo $result;
	// Will dump a beauty json :3
	print_r(json_encode($result, true));


?>