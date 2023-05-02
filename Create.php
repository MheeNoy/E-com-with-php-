<?php
// ตั้งค่าตัวแปรข้อมูลสำหรับติดต่อฐานข้อมูล
require "ConnectTest.php";
require "Transistion.php";
$connect =$conn;
// SQL แทรกชุดข้อมูลลงในตาราง
	$Id = $Id;
  $Type = $Type;
  $Name = $Name;
  $Price = $Price;
  $Stock = $Stock;
  $img = $Img;
  $comment = $comment;
  $Date = date("d/m/y<br>"); 
  /*
$sql = "INSERT INTO `Sattawutุ6421512630` (id_,Type_name,Product_name,Date_time,Price,Image,Stock_Number)
 VALUES ('00002','test02','test02','0000-00-00','0000.00','image/test.png','000')";
*/
$sql ="INSERT INTO 'tb_'(	id_,Type_,Name_,Price,Stock_,Image,details,Date)
VALUE ('$Id','$Type','$Name','$Price','$Stock','$img','$comment','$Date')";
// ตรวจสอบการบันทึกลงฐานข้อมูล
if (mysqli_query($connect, $sql)) {
  echo "บันทึกข้อมูลลงฐานข้อมูลเรียบร้อย";
 } else {
  echo "ข้อผิดพลาด: " . $sql . "<br>" . mysqli_error($conn);
 }


// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($connect);
 
?>