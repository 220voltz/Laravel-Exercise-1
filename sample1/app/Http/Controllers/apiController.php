<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Curls;

class apiController extends Controller
{
    function fnOne(){
    	$url = 'https://restcountries.eu/rest/v2/callingcode/63';

    	//file_get_content
    	echo "**file_get_content<br/><br/>";
    	$apiValue = file_get_contents($url);
    	print_r(json_decode($apiValue));

    	//curl
    	echo "<br/><br/>**curl<br/><br/>";
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, $url);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    	$output = curl_exec($ch);
    	curl_close($ch);
        echo "<pre>";
        print_r(json_decode($output));
        echo "</pre>";
    }
}
