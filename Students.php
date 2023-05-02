<?php
require "ConnectTest.php";


$connect = $conn;


   mysqli_set_charset($connect,'utf8');

  
  // ให้เลือกใช้งาน SQL1 หรือ SQL2
// SQL1. เลือกข้อมูลในตารางทั้งหมด

$Students = "SELECT * FROM tb_ where id_= 0001";


// ตรวจสอบข้อมูลในฐานข้อมูลที่จะแสดงผล

$result = mysqli_query($connect, $Students);

if (!$result){
echo "ติดต่อฐานข้อมูลไม่ได้ table";

}else{
    echo "";
}
   $sports="";
   if (mysqli_num_rows($result) > 0) {
       echo "";}
       else{
           echo "ติดต่อฐานข้อมูลไม่ได้";
       }
       


   
   





// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);
?>