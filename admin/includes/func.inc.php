<?php

function showArticles($link) {
    $query = "SELECT * FROM `article` WHERE id > 0";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);    
    
    $content = "";
    foreach ($data as $elem) {
        $content .= $elem['user'];
    }
    echo $content;
}
