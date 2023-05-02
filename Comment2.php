<?php



$Name=$_POST['name'];
$comment= $_POST['comment'];
$type = $_POST['TYPEE'];
switch($type) {
case 1:
    $type = "อุปรกณ์เครื่องเขียน";
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

require "ConnectTest2.php";
$connect1 = $conn2;

if(!isset($_POST['name'])){
      
    echo "กรุณาตรวจสอบความถูกต้อง";

  }else {
      
$sql = "INSERT INTO `customer` (`Type_`, `Name_`, `Comment`) 
          VALUE ('$type','$Name','$comment')";}
    mysqli_query($connect1, $sql);
   
 
    

?>
<a href="Web.php"><h1>กลับหน้าเดิม</h1></a>