<?php
require "connectTest.php";
$connect = $conn;
mysqli_set_charset($connect,'utf8');

$Number4 = "";
$Stock =0;
if(!$_POST['Name_']){
    echo "<h1>กรุณาเลือกสินค้าก่อน</h1>";
    
    }
    else{
        $Number4 = $_POST['Name_'];
    
    }
if($_POST['Name_'] < 0){
    echo "<h1>กรุณาใส่สินค้า อย่างน้อย 1 ชิ้น</h1>";
    
    }
    else {
    
        $Stock=$_POST['Name_'];
    }
    


mysqli_set_charset($connect,'utf8');
$Buyy = "SELECT * FROM tb_ where Number_= $Number4 ";
$result = mysqli_query($connect, $Buyy);
$row = mysqli_fetch_assoc($result);
$Stock2 = $row['Stock_'];
$Buy = $Stock2-$Stock;

if($Stock >= $Stock2){
echo "<h1>สินค้ามีไม่พอ</h1>";

}
$id_=$row['id_'];
$Type_=$row['Type_'];
$Name_=$row['Name_'];
$Price=$row['Price'];

echo "เรียบร้อยแล้ว จะใส่ที่อยู่หรือโอนจ่าย ก็ได้ครับ เพิ่มแบบฟอร์ม";





$sql = "UPDATE `tb_` SET Stock_=$Buy, Where Number_ = $Number4";
mysqli_query($connect, $sql);

require "connectTest2.php";
$connect1 = $conn2;
$num1 = 0;
$Buyy = "SELECT * FROM customer where Name_ = $Name_";

$result4 = mysqli_query($connect1, $Buyy);
if(!$result4){
    
    $sql2 ="INSERT INTO 'customer'(	id_,Type_,Name_,Price,Number,Comment)
VALUE ('$id_','$Type_','$Name_','$Price','$Number4')";
    $result5 = mysqli_query($connect1, $sql2);
  
    

}else{
    $row5 = mysqli_fetch_assoc($result4);
    $Num =$row5['Number'];
    $num1=$Num+$Stock;
}

     
    






$sql = "UPDATE `customer` SET Stock_=$Buy, Where Number_ = $num1";
mysqli_query($connect1, $sql);




?>
<a href="Web.php"><h1>กลับหน้าเดิม</h1></a>