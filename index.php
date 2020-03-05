<?php
namespace Simplybook;
include 'JsonRpcClient.php';
use Simplybook\JsonRpcClient;

$loginClient = new JsonRpcClient('https://user-api.simplybook.me' . '/login');
$token = $loginClient->getUserToken('stargan', 'admin', 'P@ssw0rdsimplybook.com');
var_dump($token);


$client = new JsonRpcClient('https://user-api.simplybook.me' . '/admin/', array(
'headers' => array(
'X-Company-Login: ' . 'stargan',
'X-User-Token: ' . $token
)
));

$params =[
"date_from"=>"2015-12-29",
"date_to"=>"2015-12-29",
"booking_type"=>"cancelled",
"event_id"=>"5",
"order"=>"start_date"
];

$bookings = $client->getBookings($params);

?>
