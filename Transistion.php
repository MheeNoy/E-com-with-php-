<!DOCTYPE html>

<html>
<head>
<meta charset="UTF8">
<link a href ="bootstrap-5.1.3\css\bootstrap.css" rel="stylesheet"> 
<link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src ="bootstrap-5.1.3/js/bootstrap.js"></Script>
<script src ="bootstrap-5.1.3/js/bootstrap.bundle.js"></script>
</head>
<?php
require "ConnectTest.php";
$connect =$conn;




$target_dir = "Image/";
$img = $target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["filetoupload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["filetoupload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["filetoupload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}





$id ="";
$price ="";
$Stock ="";
$Name ="";
$Image = "";
$sql ="";
$DATE = date("d/m/y<br>");
$Number = 


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


if(!$_POST['name']){
    echo "<h1>กรุณาใส่ชื่อ</h1>";
    
    }else{
        $Name = $_POST['name'];
    
    }
if($_POST['price'] < 0){
echo "<h1>กรุณาใส่ราคาอย่างหน่อย 1 บาท  เช่น 1หรือ 1.0</h1>";

}else{
    $price = $_POST['price'];

}
if($_POST['Stock'] < 0){
echo "<h1>กรุณาใส่สินค้า อย่างน้อย 1 ชิ้น</h1>";

}
else {

    $Stock=$_POST['Stock'];
}
$details = $_POST['details'];



        
    
    
    if(!isset($_POST['name'])){
      
      echo "กรุณาตรวจสอบความถูกต้อง";

    }else {

        $Number1 = "SELECT * FROM tb_  ";
        $Number2 = mysqli_query($connect, $Number1); 
      
       $Number5 = 0;

        while($Number3= mysqli_fetch_assoc($Number2)){
            $Number4 = $Number3['Number_'];
            $Number5 = $Number4+1;
            }
            

    


        $sql = "INSERT INTO `tb_` (`id_`,`Type_`, `Name_`, `Price`, `Stock_`, `Image`, `details`, `Date`,`Number_`) 
        VALUE ('$id','$type','$Name','$price','$Stock','$img','$details','$DATE','$Number5')";
        }

        //  $sql = "INSERT INTO `tb_` (`id_`,`Type_`, `Name_`, `Price`, `Stock_`, `Image`, `details`, `Date`,`Use_`) 
        //VALUE ('$id','$type','$Name','$price','$Stock','$img','$details','$DATE','$use')";






// ตรวจสอบการบันทึกลงฐานข้อมูล
if (mysqli_query($connect, $sql)) {
  echo "";
 } else {
  echo "ข้อผิดพลาด ไม่สามารถเข้าถึงฐานข้อมูล: " . $sql . "<br>" . mysqli_error($conn);
 }




 $Model = "SELECT * FROM tb_ where Name_= '$Name'";


 // ตรวจสอบข้อมูลในฐานข้อมูลที่จะแสดงผล
 
 $result2 = mysqli_query($connect, $Model);
 
 
    $sports="";
    if (mysqli_num_rows($result2) > 0) {
        echo "";}
        else{
            echo "ติดต่อฐานข้อมูลไม่ได้";
        }

        while($row = mysqli_fetch_assoc($result2))  {
  
            echo "<center><h3>สินค้าตัวอย่าง</h3></center>";
             echo "<div class='row row-cols-1 row-cols-md-4 g-5'>";
            echo "<div class='col'>";
                echo "<div class='card h-100'>";
                    echo "<img src='".$row['Image']."' height='170px' class='card-img-top' alt='...'>";
                  echo "<div class='card-body'>";
                    echo "<h5 class='card-title text-primary'><b>".$row['Name_']."</b></h5>";
                    echo "<p class='card-text'>".$row['details']."</p></div>";
                  
                 echo " <button class ='btn-sm btn-primary text-white  '><b>ราคา :".$row['Price']." Bath</b></button>";
                  echo "<button class ='btn-sm btn-primary text-white'><b>จำนวน : ".$row['Stock_'] ." Pice</b></button>";
                  echo  "<div class='card-footer'>";
                  echo "<small class='text-muted'>Last updated <br>".$row['Date']."ago</small>";
                echo "</div>";
                echo "</div></div></div></div>";}



// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($connect);
echo "<h1><a href ='e-com.php'>กลับหน้าเดิม</a></h1>";




  



?>
</html>