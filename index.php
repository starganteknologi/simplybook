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
"date_from"=>"2020-03-01",
"date_to"=>"2020-03-10",
//"booking_type"=>"cancelled",
//"event_id"=>"5",
"order"=>"start_date"
];

$bookings = $client->getBookings($params);

var_dump($bookings);

?>
