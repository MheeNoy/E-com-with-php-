<!DOCTYPE html>

<html>
<head>
<meta charset="UTF8">
<link a href ="bootstrap-5.1.3\css\bootstrap.css" rel="stylesheet"> 
<link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src ="bootstrap-5.1.3/js/bootstrap.js"></Script>
<script src ="bootstrap-5.1.3/js/bootstrap.bundle.js"></script>

</head>
<body>
<?php

require "ConnectTest.php";



$connect = $conn;



                      
                      $name =$_POST['name'];
                    
                      // ให้เลือกใช้งาน SQL1 หรือ SQL2
                    // SQL1. เลือกข้อมูลในตารางทั้งหมด
                    
                    $edite = "SELECT * FROM tb_ where  Name_='$name' ";
                    
                    
                    // ตรวจสอบข้อมูลในฐานข้อมูลที่จะแสดงผล
                    
                    $sql= mysqli_query($connect, $edite);
                    
                    if (!$sql){
                    echo "กรุณาตรวจสอบ ประเภท และ รายการสินค้าให้ถูกต้อง";
                    
                    }else{
                        echo "";
                    }
                    
                  
     $clear = '';
                  echo "<div class='row row-cols-1 row-cols-md-4 g-5'>";
while($row = mysqli_fetch_assoc($sql))  {
    if (!$row['Image']){
      $clear ="Image/อัพโหลด.PNG"; 
    }
    else { $clear = $row['Image'];}

    echo "<div class='col'>";
        echo "<div class='card h-100'>";


        ?>

<form  action = "edite2.php" method ="post" enctype ="multipart/form-data">
        
  <?php
       echo  '<tr>
        <td><h5 class ="text-danger">Group/กลุ่มสินค้า:</h5></td> 
            <td><select name="TYPEE" class =" bg-danger ">
              <option value ="1" class ="text-white">อุปรกณ์เครื่องเขียน</option>
              <option value ="2">อาหาร/บริโภค</option>
              <option value ="3">อุปกรณ์อิเล็คทรอนิกส์</option>
              <option value ="4">อุปกรณ์กีฬา</option>
            </select>
            </td>
           <tr>';
           echo "<h5> ชื่อรายการสินค้า</h5>";
        echo "<input type ='text' name ='name'>";


        echo "<h5 class='card-title text-success'><b>";
        
                   echo "<h5>เปลี่ยนรูปภาพ</h5>";

                   
          echo "<input   type ='file' name ='filetoupload' id ='filetoupload' ></b>";

   
        
      echo "</h5>";
            echo "<img src=' ".$clear."' height='170px' class='card-img-top' alt='...'>";
          echo "<div class='card-body'>";
       
            echo "<p class='card-text'>
            <h5> รายละเอียดสินค้า:</h5>
            <textarea  class =' bg-danger ' name = 'comment' rows = '5' cols = '40' value = '".$row['details']." รายละเอียดสินค้า เกี่ยวกับสินค้า'></textarea></p></div>";
           echo "<h5><b>ราคา : </h5>";
         echo "<b><input class='bg-white text-dark' type = 'number' name = 'price' value ='ราคา :".$row['Price']." BATH'></b>";
         echo "<h5><b>จำนวนสินค้า :</h5>" ;
         echo "<b><input class='bg-white text-dark' type = 'number' name = 'stock' value = 'จำนวน : ".$row['Stock_'] ." Pice' ></b>";
         echo "<h2><b>หมายเลขสินค้า สำหรับยืนยันการเปลี่ยนแปลงแก้ใข (ใส่หลายเลข ดังเดิม ตั้งแต่ตอนสร้าง[์Number_]):</h2>"; 
         echo "<b><input class='bg-white text-dark' type = 'number' name = 'number' value = 'จำนวน :' ></b>";
         
         echo  "<div class='card-footer'>";
          echo "<small class='text-muted'>Last updated <br>".$row['Date']."ago</small>";
        echo "</div>";
       
        echo "</div></div>";}
        echo "<div class ='row col-lg-6 col-sm-6 col-md-6 col-xs-6'>";
        echo "<input class ='col-3 btn-lg btn-primary border-3  h-25' id='subEdite' type = 'submit' name = 'submit' value = 'เลือก' ></button>" ;
       echo  "<input class ='col-3 btn-lg btn-danger border-3 h-25' id=''  type = 'reset' name = 'reset' value = 'ยกเลิก' ></button>";
       echo  "</form></div></div>";
        mysqli_close($connect);
// ติดต่อฐานข้อมูล
?>

</body>
</html>