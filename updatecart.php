<?php
session_start();
$itemId = isset($_GET['itemId']) ? $_GET['itemId'] : "";
echo $itemId;
?>