<?php
header("Access-Control-Allow-Origin: *");
header("Content-tpye: application/json; charset=utf-8");

$response = null;
if(isset($_GET['comment']))
{
    $today = date("y.m.d");
    $comment = $_GET['comment'];
    $comment = $today + ';' + $comment;
    $response = file_put_contents('../data/u_comments.cnt', $comment, FILE_APPEND);
}
?>