<?php

require "Category.php";
require "connectTest.php";
require "connectTest2.php";
$connect1 = $conn;
$connect2 = $conn2;
$Buy = $Buy;
$Number = $Number;
$sql = "UPDATE `tb_` SET Stock_=$Buy, Where Number_ = $Number";
mysqli_query($connect1, $sql);

   $sql2 = "UPDATE `tb_` SET  "






   ?>