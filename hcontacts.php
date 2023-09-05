<?php 
 //$url = "http://46.175.243.2/get_hcontacts.php";
 //$opts = [
 //'http' => [
 //"method" => "GET",
 //    "header" => "User-Agent: klientskoe prilogenie\r\n".
 //                "id: dc8431b8-4b47-4b9f-9e4a-c896e44c2c03\r\n".
//		 "token: lOUObkmZPeBLmWXsf+amHL6iCk5lG4xltNm5GstuRg60Iexg3Ff0Orim68/Mt7hlewPxQGDkPFBylC9ru8lpF342G/n72Y2spLLmOfVIwpchHf7QprQTM1Tz1A0TqWcnZdhTw+/+nIos5L5fBHShKCV3Fjm8kT0n8vwW/st79YWkAxVRzWT30QRUkWGT6JIrI6nEEG/PUtdMbPXt88qWB+upTbUbJ2hKaqPysNUTp71sXMj0LOEQTjmaJGbeiv8=\r\n".
//		 "Content-Type: application/json;charset=cp1251\r\n"
//         ]
//	 , "ssl"=> [
//           "verify_peer"=>false,
//           "verify_peer_name"=>false]   
//]; 
// $context = stream_context_create($opts);
// $stream = file_get_contents($url, false, $context);
// echo $stream;
//---------

//  $host = 'localhost';
//  $user = "nets_Daniels";
//  $password = "ptktystLTYMUB10";
//  $db='nets_hc';

  $arr=array();
  $chekError=90;
  $userFIO = 'Daniel';

//  date_default_timezone_set('Europe/Kiev');
//$mysqli = new mysqli("localhost", $user, $password, $db);
//if ($mysqli->connect_errno) {
//    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//}
//echo $mysqli->host_info . "\n";

// Производим попытку подключения к серверу MySQL:
//$dbh = mysql_connect('', $user, $password) or die("Не могу соединиться с MySQL:".mysql_error());

//if ($link=mysql_connect($host, $user, $password) and 
//      mysql_select_db($db, $link))
//{
//  $chekError=90;
//   mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
//   mysql_query("SET CHARACTER SET 'utf8'");

//   $line="SELECT * FROM user";
//   $result = mysql_query($line);
//   $chekError = -40;
//   while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    //$id_users = $row[0];
//   }

//  mysql_close($link);
//} else $otvet=-49;

  $arr[] = array('userChekError' => $chekError,
                        'userJW' => 1,
                        'userSPEZ' => "holodilnik",
                        'userTerritory' => "Zaporoje",
                        'userPhone' => "068 44 66 801",
                        'userRating' => 0,
                        'userFIO' => 'FIO_1');
  $arr[] = array('userChekError' => $chekError,
                        'userJW' => 0,
                        'userSPEZ' => "computer",
                        'userTerritory' => "Dnepr",
                        'userPhone' => "068-450-23-45; 093-079-86-58",
                        'userRating' => 1,
                        'userFIO' => 'FIO_2');
  $arr[] = array('userChekError' => $chekError,
                        'userJW' => 1,
                        'userSPEZ' => "smartfon",
                        'userTerritory' => "Odessa",
                        'userPhone' => "096-109-16-43",
                        'userRating' => 2,
                        'userFIO' => 'FIO_3');
  $arr[] = array('userChekError' => $chekError,
                        'userJW' => 0,
                        'userSPEZ' => "videonabludenie",
                        'userTerritory' => "Kyiv",
                        'userPhone' => "068-183-10-36; 063-484-18-84",
                        'userRating' => 3,
                        'userFIO' => 'FIO_4');
echo json_encode($arr);
?>