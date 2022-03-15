<?php
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-with');
header('Access-Control-Allow-Methods: GET');
header('Content-Type: application/json');


require_once('./db.php');
require_once('./mysql.php');
require_once('./utils.php');

$mysql = new MySQL($conn);


$id = isset($_GET['id']) ? clean($_GET['id']) : '0';

if ($id === '0') {
    $response = array(
        'status' => 400,
        'message' => 'Post do not exist'
    );

    http_response_code(400);
    echo json_encode($response);
    die;
}

$sql = "DELETE from `postses` where id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param( "s", $id);
$mysql->MySQLExecuteStatement($stmt);

echo json_encode(array(
    'message' => 'Post was deleted successfully',
    'status' => 200
));