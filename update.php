<?php
require "ConnectTest.php";
require "Transistion.php";

// ติดต่อฐานข้อมูล
$connect=$conn;

$sql = "UPDATE `Sattawutุ6421512630`SET type='' WHERE id='' ";
 if (mysqli_query($conn, $sql)) {
  echo "แก้ไขข้อมูลลงฐานข้อมูลเรียบร้อย";
 } else {
  echo "ข้อผิดพลาดการแก้ไขข้อมูล: " . mysqli_error($conn);
 }


// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);
 
?>