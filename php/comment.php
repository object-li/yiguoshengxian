<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header('Access-Control-Allow-Headers:x-requested-with,content-type');

$mysqli = new Mysqli('localhost', 'root', '123456', 'meilele');

$sql = "select * FROM comments";
$result = $mysqli->query($sql);

while($comment = $result->fetch_assoc()){
    $comments[] = $comment; 
}

echo json_encode($comments) 
 
?>