<?php

// ตั้งค่าตัวแปรข้อมูลสำหรับติดต่อฐานข้อมูล
require "ConnectTest.php";

$connect =$conn;
/*
$number = $_POST['number'];
$name=$_POST['name'];
$use=$_POST['use'];
$sql = "SELECT Distinct Use_ FROM producttion where Use_ = $use and Name_ = $name ";
$result = mysqli_query($connect, $sql);
if (mysqli_query($connect, $sql)) {
  echo "ลบข้อมูลจากฐานข้อมูลเรียบร้อย";
 } else {
  echo "ข้อผิดพลาดการลบข้อมูล: " . mysqli_error($connect);

 }
$dbarr = mysqli_fetch_array($result);
if($use == $dbarr['Use_']){
// SQL ลบข้อมูลในตารางโดยเลือกจากข้อมูลที่ต้องการ
*/
$name= $_POST['name'];
$type = $_POST['TYPEE'];
switch($type) {
case 1:      
    $type = "อุปกรณ์เครื่องเขียน";
    $id = "0001";
    
    break;
case 2:
    $type = "อาหาร/บริโภค";
   $id = "0002";
  
    break;
case 3:
    $type = "อุปกรณ์อิเล็คทรอนิกส์";
    $id ="0003";
 
    break;
case 4:
    $type = "อุปกรณ์กีฬา";
    $id = "0004";
   
    break;

}


$sql2 = "DELETE FROM `tb_` WHERE Type_ = '$type' AND Name_ = '$name' ";


if (mysqli_query($connect, $sql2)) {
  echo "ลบข้อมูลจากฐานข้อมูลเรียบร้อย";
 } else {
  echo "ข้อผิดพลาดการลบข้อมูล: " . mysqli_error($connect);

 }

 

 echo "<h1><a href ='e-com.php'>กลับหน้าเดิม</a></h1>";
// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($connect);
 
?>