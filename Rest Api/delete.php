<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: DELETE');
header('Access-Control-Allow-Headers:Content-Type,  Access-Control-Allow-Methods, Authorization, X-Requested-With');

include('function.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == "DELETE"){
    $deleteuser = deleteuser($_GET);
    echo $deleteuser;
}else {
    $data = [
        'status'=> 405,
        'message'=> $requestMethod. 'Method Not Allowed',
    
    ];
    header("HTTP/1.1 405 Method Not Allowed");
    echo json_encode($data);
}


?>