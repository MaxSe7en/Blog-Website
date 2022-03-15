<?php
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-with');
header('Access-Control-Allow-Methods: POST');
header('Content-Type: application/json');


require_once('./db.php');
require_once('./mysql.php');
require_once('./utils.php');

$mysql = new MySQL($conn);


$request = json_decode(file_get_contents("php://input"));


if(!isset($request->title)){
    $response = array(
        'status' => 400,
        'message' => 'Post must have a title'
    );

    http_response_code(400);
    echo json_encode($response);
    die;
}


if(!isset($request->body)){
    $response = array(
        'status' => 400,
        'message' => 'Post must have a title'
    );

    http_response_code(400);
    echo json_encode($response);
    die;
}

$title = clean($request->title);
$body = clean($request->body);

$sql = "INSERT INTO `postses` (`title`, `body`) VALUES(?, ?)";


$stmt = $conn->prepare($sql);
$stmt->bind_param( "ss", $title, $body);
$mysql->MySQLExecuteStatement($stmt);

echo json_encode(array(
    'message' => 'Post was added successfully',
    'status' => 200
));