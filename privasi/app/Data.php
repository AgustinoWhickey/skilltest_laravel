<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    $curl = curl_init();
	
	curl_setopt_array($curl, array(CURLOPT_URL => "http://static.scash.bz/test_programmer.php",
									CURLOPT_RETURNTRANSFER => true,
									CURLOPT_ENCODING => "",
									CURLOPT_TIMEOUT => 30000,
									CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
									CURLOPT_CUSTOMREQUEST => "GET",
									CURLOPT_HTTPHEADER => array(
										'Content-Type: application/json',
									),
					 ));
	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);
	
	if($err){
		echo "Curl Error #: ".$err;
	}else{
		print_r(json_decode($response))
	}
}
