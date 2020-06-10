<?php
header("Access-Control-Allow-Origin: *");
// header("Content-tpye: application/json; charset=utf-8");

$response = null;

if(isset($_POST['comment']))
{
    $comment = $_POST['comment'];
    $today = date("Y-m-d");
    $comment = $today.';'.$comment."\r\n";
    $response = file_put_contents('../data/u_comments.cnt', $comment, FILE_APPEND);
}

echo json_encode($response, JSON_UNESCAPED_UNICODE);
?>