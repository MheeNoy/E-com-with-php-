
    <?php
  require "ConnectTest.php";



if (!$_FILES["filetoupload"]){
   echo 'ไม่เปลี่ยนแปลงรูปภาพ';
}else{

  $target_dir = "Image/";
  $image = $target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  // Check if image file is a actual image or fake image
  //if(isset($_POST["submit"])) {
    //$check = getimagesize($_FILES["filetoupload"]["tmp_name"]);
    //if($check !== false) {
      //echo "File is an image - " . $check["mime"] . ".";
      //$uploadOk = 1;
    //} else {
     // echo "File is not an image.";
     // $uploadOk = 0;
   // }
  //}
  
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
}



$Name = $_POST['name'];
$pice = $_POST['price'];
$stock =$_POST['stock'];
$Number =$_POST['number'];
$details = $_POST['comment'];


$date = date("d/m/y<br>");
$sql = "UPDATE `tb_` SET Name_='$Name', Image ='$image', Price =$pice, Stock_=$stock, details = '$details', Date = '$date'   Where  Number_ = $Number ";
 if (mysqli_query($conn, $sql)) {
  echo "แก้ไขข้อมูลลงฐานข้อมูลเรียบร้อย";
 } else {
  echo "ข้อผิดพลาดการแก้ไขข้อมูล: " . mysqli_error($conn);
 }


// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);
echo "<h1><a href ='e-com.php'>กลับหน้าเดิม</a></h1>";
?>
