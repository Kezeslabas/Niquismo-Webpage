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
else if (isset($_POST['from']))
{
    $from = $_POST['from'];
    $response = [
        "start" => 0,
        "end" => 0,
        "sent" => 0,
        "data" => []
    ];
    $data = file("../data/articles.cnt");
    $length = count($data);
    $start = $length - $from;
    $end = $start - 4;
    if($end<0)$end=0;
    $response['start'] = $start;
    $response['end'] = $end;
    for($i = $start-1; $i>=$end; $i--)
    {
        $response['data'][] = $data[$i];
        $response['sent'] = $response['sent'] + 1;
    }
}

echo json_encode($response, JSON_UNESCAPED_UNICODE);
?>