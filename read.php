<!DOCTYPE html >
<html>
<head>
<meta charset="utf8">
<title>Readdb</title>
</head>
<body>
<?php
require "ConnectTest.php";
//require "Transistion.php";

 // ติดต่อฐานข้อมูล
 $connect=$conn;


// ตรวจสอบการเชื่อมต่อฐานข้อมูล
 if (!$connect) {
  die("ติดต่อข้อผิดพลาด: " . mysqli_connect_error());
 }


// ให้เลือกใช้งาน SQL1 หรือ SQL2
// SQL1. เลือกข้อมูลในตารางทั้งหมด
$sql = "SELECT * FROM producttion";


// ตรวจสอบข้อมูลในฐานข้อมูลที่จะแสดงผล
$result = mysqli_query($connect, $sql);

?>
<body>
  <center><table>
   <h3 style="border:2px solid ">ฐานข้อมูล</h3>
     <tr><h4>

<?php
 if (mysqli_num_rows($result) > 0) {
  // loop while แสดงข้อมูลในแต่ละชุดข้อมูล
 
  while($row = mysqli_fetch_assoc($result)) {
// ดึงข้อมูลขึ้นมาแสดงผล ให้เลือกใช้งาน 1 หรือ 2
					
// 2. แสดงผลแยกบรรทัด

echo "<td style='border:2px solid'> No./รายการที่: " . $row["id_"]. "</td>";
echo "<td style='border:2px solid'> ประเภท: " . $row["Type_"]. "</td>";
echo "<td style='border:2px solid'> รายการ: " . $row["Name_"]. "</td>";
echo "<td style='border:2px solid'> ราคา: " . $row["Price"]. "</td>";
echo "<td style='border:2px solid'> รูปภาพสินค้าตัวอย่าง: " . $row["image"]. "</td>";
echo "<td style='border:2px solid'> จำนวนสินค้าที่มี: " . $row["Stock_"]. "</td>";
echo "</tr></h4>";

}
 } else {
 ?>
 
    <table>
        <h3><caption style="border:2px solid ">ฐานข้อมูล</caption></h3>
         <tr ><h4>
           <td style="border:2px solid"> No.รายการ </td> 
           <td style="border:2px solid"> ประเภท </td>
           <td style="border:2px solid"> รายการ </td> 
           <td style="border:2px solid"> ราคา </td>
           <td style="border:2px solid"> รูปภาพสินค้าตัวอย่าง </td> 
           <td style="border:2px solid"> จำนวนสินค้าที่มี </td>
        </tr></h4>
        <tr>
          <td colspan="6" style="border:2px solid"><center><h1>ยังไม่มีข้อมูล</h1></center></td>
       </tr>


 <?php
 
 }
?>
</table></center>
<?php

// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($connect);
 
?>

</body>
</html>