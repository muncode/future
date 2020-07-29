<?php

require_once 'db.php';

if(!empty($_POST['comment_text'])) {
    $comment = $mysqli->real_escape_string($_POST['comment_text']);
    $name = $mysqli->real_escape_string($_POST['name']);
    $ip = $_SERVER['REMOTE_ADDR'];
    $datetime = date('Y-m-d H:i:s');

    $mysqli->query("INSERT INTO future_comments (comment, datetime, name, ip) VALUES ('$comment','$datetime','$name','$ip')");
    echo json_encode(array('success' => 1));
} else {
    echo json_encode(array('success' => 0));
}
