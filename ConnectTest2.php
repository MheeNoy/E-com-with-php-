<?php/*
// ตั้งค่าตัวแปรข้อมูลสำหรับติดต่อฐานข้อมูล
 $servername = "localhost:3306"; // ติดต่อ Server
 $username = "csai"; // ชื่อผู้ใช้ เข้าใช้งานฐานข้อมูล MySQL
 $password = "Cru1234!"; // รหัสผ่าน เข้าใช้งานฐานข้อมูล MySQL
 $dbname = "csai"; // ชื่อฐานข้อมูล MySQL


if(mysqli_connect($servername, $username,$password,$dbname)){

    echo "";
}
else{
    echo "เชื่อมต่อไม่ได้";
}
 // ติดต่อฐานข้อมูล
*/
?>

<?php 

// ตั้งค่าตัวแปรข้อมูลสำหรับติดต่อฐานข้อมูล
 $servername = "localhost"; // ติดต่อ Server
 $username = "root"; // ชื่อผู้ใช้ เข้าใช้งานฐานข้อมูล MySQL
 $password = ""; // รหัสผ่าน เข้าใช้งานฐานข้อมูล MySQL
 $dbname = "producttion"; // ชื่อฐานข้อมูล MySQL
if(mysqli_connect($servername, $username,$password,$dbname)){

    echo "";
}
else{
    echo "เชื่อมต่อไม่ได้";
    
}
 // ติดต่อฐานข้อมูล
 $conn2 = mysqli_connect($servername, $username,$password,$dbname);
 ?>
