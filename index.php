<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title></title>
    <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
</head>

<body>
	<script src="app.js"></script>
</body>

<?php

	


	// function CallAPI($method, $url, $data = false)
	// {
	//     $curl = curl_init();

	//     switch ($method)
	//     {
	//         case "POST":
	//             curl_setopt($curl, CURLOPT_POST, 1);

	//             if ($data)
	//                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	//             break;
	//         case "PUT":
	//             curl_setopt($curl, CURLOPT_PUT, 1);
	//             break;
	//         default:
	//             if ($data)
	//                 $url = sprintf("%s?%s", $url, http_build_query($data));
	//     }

	//     // Optional Authentication:
	//     //curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	//     //curl_setopt($curl, CURLOPT_USERPWD, "wangx6@gmail.com:xhgk9qey");

	//     curl_setopt($curl, CURLOPT_URL, $url);
	//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	//     $result = curl_exec($curl);

	//     curl_close($curl);

	//     return $result;
	// }

	// $a = CallAPI('GET', 'https://yinghan.atlassian.net/wiki/rest/api/content?expand=body.storage');
	// var_dump($a);

?>

</html>
