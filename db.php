<?php

$link = false;

function openDB()
{
    global $link;

    $link = mysqli_connect("localhost", "root", "", "golovan_portfolio");
    mysqli_query($link, "SET NAMES UTF8");
}
function closeDB()
{
    global $link;
    $link = false;
}
function getTable()
{
    global $link;
    openDB();

    $result = mysqli_query($link, "SELECT * FROM links");

    closeDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>