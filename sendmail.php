<?php 
if ((isset($_POST)) || (isset($_POST['quote'])))  {
include("includes/connection.php");
$body_att = 'colspan="2" align="left" style="background-color:#fff;color:#E84704;text-align: center;"';
$body_att1 = 'colspan="2" align="left" style="background-color:#fff;color:#fff;"';

// Get data
$data = (isset($_POST['inquiry'])) ? $_POST['inquiry'] : $_POST['quote'];

$all = ip_info($_SERVER["REMOTE_ADDR"]);

$data['country'] = $all['country'];
$data['ip'] = $_SERVER["REMOTE_ADDR"];
$data['state'] = $all['state'];
$data['city'] = $all['city'];
$actual_link = $_SERVER['HTTP_REFERER'];
$data['ref'] = $actual_link;
// Set template

// Client email
// $to = "test-z19or5b8u@srv1.mail-tester.com";
$to = "info@globaldesignsagency.com";

// test email

$subject = (isset($_POST['inquiry'])) ? "Inquiry - Form Alert" : "Quote - Form";

//send third party message
// thirdparty_send($data);

//echo $file;
//exit;
//echo "file moved";
//exit;
$inputs = '';
foreach ($data as $key => $value) {
    $inputs .= "<tr>
            <td width='14%' align='left'>".$key."</td>
            <td width='14%' align='left'>" . $value . "</td>
        </tr>";
}

$message = "
<html>
<head>
<title>Inquiry - Form</title>
</head>
<body>

<div style='margin-top:-10px'>
        <table width='70%' border='1' cellpadding='6' cellspacing='5' style='font-family:Verdana;font-size:12px; border-collapse:collapse'>
            <tr>
                <td border='0' colspan='2' " . $body_att . ">
                    <img src='https://globaldesignsagency.com/assets/images/logo.png' width='190' alt='globaldesignsagency' />
                </td>
            </tr>

        ".$inputs."
        </table>
    </div>";

  
    
$message.= "</body></html>";


    
    if (mysqli_connect_errno()){  
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }else{ 
        $sql = "Insert into form (email,form_data,status) values ('".$data['email']."','".serialize($data)."',1)";
        mysqli_query($con,$sql);
        mysqli_close($con);
    }
    

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
// $headers .= 'From: Website Maisters  <asaddev123@gmail.com>' . "\r\n";
$headers .= 'From: Global Designs Agency  <form@globaldesignsagency.com>' . "\r\n";
// $headers .= 'Bcc: ericwalter.developer@gmail.com' . "\r\n";
// $headers .= 'Bcc: support@strongmamas.com' . "\r\n"; // ADDED by BH 28-12-2022

if(mail($to,$subject,$message,$headers)){
   // echo "1";
    $parm['status'] = 1;
   echo json_encode($parm);
}
else{
    $parm['status'] = 1;
    echo json_encode($parm);
}
}

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
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
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode,
						"ip"=>@$ip
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
?>