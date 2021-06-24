<?php
function getPost()
{
    // Create databses connection
    $conn = db_connect();
    // define empty array posts
    $posts = [];
    // define sql
    $getPostsSQL = "
    SELECT * FROM `post`
    ORDER BY
    `postId`
    ASC
    ";
    // run / execute query
    // this will result in a result ser or
    $result = $conn->query($getPostsSQL) or die($conn->error);
    // fetch the result to an associative array
    $posts = $result->fetch_all(MYSQLI_ASSOC);
    // return the array
    return $posts;
}
?> 