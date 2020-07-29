<?php

$query = "SELECT * FROM future_comments ORDER by id DESC";

if ($result = $mysqli->query($query)) {
    echo "<div class='content'>";
    foreach($result as $row){
        echo "<form class='comment' action='' method='POST'>
            <div class='row'>
            <div class='name'>" . $row['name'] . "</div>
            <div class='datetime'>" . date('H:m  d-m-Y', strtotime($row['datetime'])) . "</div></div>
            <div class='row'>
            <div class='comment_text'>" . $row['comment'] . "</div>
            <input type='hidden' name='task_id' value=" . $row['id'] . " /></div></form>";
    }
    echo "</div>";
}