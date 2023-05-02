<!DOCTYPE html>

<html>
<head>
<meta charset="UTF8">
<link a href ="bootstrap-5.1.3/css/bootstrap.css" rel="stylesheet"> 
<link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src ="bootstrap-5.1.3/js/bootstrap.js"></Script>
<script src ="bootstrap-5.1.3/js/bootstrap.bundle.js"></script>
<script src = "https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link a href ="supC.css" rel="stylesheet">
<script src ="supJs.js"></script>
<link a href ="SuperforconnectmySql.css" rel="stylesheet"> 
<?php
require "ConnectTest.php";


?>


<script>

setInterval(myTimer, 1000);
  function myTimer() {
    const d = new Date();
    document.getElementById("Time").innerHTML = d.toLocaleTimeString();
              }
              </script>
                  <?php
                  
                  
                   $color = "rgb(0, 0, 255)";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
          $color = test_input($_POST["color"]);
       }
       function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
        
      ?>
              <style>
body{
    padding: 7%;
    padding-top: 2%;
    background-color: <?php

echo "$color";
?>;
         }
         

         
</style>

</head>

<?php
/*รูปภาพรอแก้ ก๊อปปี้สำเนา 
 $_SERVER['PHP_SELF'];
 copy($_POST[file]$_POST['name],

 )
 
*/?>

<body>
<?php
      
      ?>
<header>
  
<div class ="tabbar">
    <nav class=" navbar navbar-light bg-light ">
        <div class="container-fluid">
          <a class="navbar-brand text-dark " href="#"><a href ="Web.php">
           <h3> <img class="rounded-circle" src="Image/OIP.jpg"  aria-hidden="true" alt="" width="60" height="40" class="d-inline-block align-text-top">
            SHOPING</h3>
              <h4>เข้าสู่หน้าร้านค้า</h4></a>
          </a>
          <form action ="search.php" method = "post" class="d-flex">

            <input class="form-control me-1 align-content-between " type="text" name="search" placeholder="Search" aria-label="Search">
            
            
            <button class="btn btn-outline-danger" type="submit"><b>Search</b></button>
          </form><h5 class ="text-primary"><b> ปฎิทิน : <?php echo date('d/m/y<br>');?> </h5>
          <form method = "post" action = "<?php $_PHP_SELF ?>">
      <input type="color" name="color" class="form-control form-control-color" id="exampleColorInput" value="#0d6efd" title="Choose your color">
       
        <input class ="btn-primary"type = "submit" name = "submit" value = "เลือกสีพื้นหลัง"> 
        </form>
  
       
     
        </div>
      </nav>
      </div>
</header>

<article>
  <span class ="profileshow">
    <h5><center><font color="white">Manage </font></center><Br>
    <font color ="red"> e-commerce</font><br>
    <font color="white">นาย ศาสตราวุธ </font><br><font color="darkblue"  >ตั้งอำพลสุกใส</font></h5>
    <Div class ="timer">
      <font color ="white"><center>
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
      <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
      <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 
      16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924
       0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
      </svg></font>
      <font color ="red">
    <H5 id ="Time" ></h5></center></font>
    

      </Div>
  </span>
<?php
$connect =$conn;

$sql = "SELECT id_ FROM tb_ ORDER BY id_  DESC LIMIT 1 ";
$sql2 = "SELECT Number_ FROM tb_ ORDER BY Number_   ";

$result2 = mysqli_query($connect, $sql); 
$row = mysqli_fetch_array($result2);
$group = $row['id_']*1;


$result3 = mysqli_query($connect, $sql2); 

$roww = 0;
while($row2 = mysqli_fetch_assoc($result3)){
 $roww = $row2['Number_'];

}
$Buy = "SELECT * FROM customer ";

$result16 = mysqli_query($connect, $Buy);

$Monney = 0; 
while($row6 = mysqli_fetch_assoc($result16)){
  $Mo = $row6['Price']*$row6['Number'];
  $Monney = $Mo+$Monney;
 
  }
 
?>
  
    <div class="tabshow row">
      <div class="col-sm-5 col-md-3 col-lg-3" id="co">
       <a href="#">
        <h4> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
            <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
          </svg>
          ประเภทสินค้า:<?php echo $group;   ?> Group</h4>
        </a>
        </div>
        <div class="col-sm-5 col-md-3 col-lg-3" id="co">
            <a href="#" onclick = "menu()">
            <h4><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
              </svg>รายการสินค้า: <?php  echo $roww;   mysqli_close($conn);  ?> Pices</h4>
              </a>
          </div>
          <?php
          require "connectTest2.php";
             $connect=$conn2;
             $Buy = "SELECT * FROM customer ";

               $result16 = mysqli_query($connect, $Buy);

               $Monney = 0; 
               while($row6 = mysqli_fetch_assoc($result16)){
                 $Mo = $row6['Price']*$row6['Number'];
                 $Monney = $Mo+$Monney;
                
                 }
                


           
                 
             ?>
          
            <div class="col-sm-5 col-md-3 col-lg-3"id="co">
                <a href="#">
                <h4><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.0re58-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                  </svg>ยอดขาย   <?php echo $Monney; ?> Bath</h4>
                  </a>
              </div>
              
                
</div>
<?php 
require "connectTest2.php";
$connect = $conn2;
$No001 = "SELECT * FROM customer Where id_=0001;";
$No0=0;
$result10 = mysqli_query($connect, $No001);
while($row3 = mysqli_fetch_assoc($result10)){
  $No1 = $row3['Number'];
  $No0 = $No1+$No0;
}
$No002 = "SELECT * FROM customer Where id_=0002;";
$No2=0;
$result11 = mysqli_query($connect, $No002);
while($row4 = mysqli_fetch_assoc($result11)){
  $No3 = $row4['Number'];
  $No2 = $No3+$No2;
}
$No003 = "SELECT * FROM customer Where id_=0003;";
$No4=0;
$result12 = mysqli_query($connect, $No003);
while($row5 = mysqli_fetch_assoc($result12)){
  $No5 = $row5['Number'];
  $No4 = $No5+$No4;
}
$No004 = "SELECT * FROM customer Where id_=0004;";
$No6=0;
$result13 = mysqli_query($connect, $No004);
while($row6 = mysqli_fetch_assoc($result13)){
  $No7 = $row6['Number'];
  $No6 = $No7+$No6;}
  $No7 = $No0+$No2+$No4+$No6;
  
  /*$list = array(
		'No.1'=>$No0,
		'No.2'=>$No2,
		'No.3'=>$No4,
    'No.4'=>$No6
	);
	echo json_encode($list);

// ตรวจสอบข้อมูลในฐานข้อมูลที่จะแสดงผล




<script >
function Tojs(){
    var data = {'product_id':1
    };
    $.ajax({
	url: "e-com.php",
	type: 'POST',
	data: data,
	dataType:'json', // datatype เป็นแบบ son 
	success: function(obj) { // success คือ callback ฟังก์ชั่น
		console.log(JSON.stringify(obj)); // แสดงข้อมูลที่คืนค่ามาในหน้าต่าง console
	}
    });
}
RequestProductList(); // เรียกใช้งานฟังก์ชั่น
</script>*/
?>
<div class ="Ghraf w-25  row-cols-12 ">
<h5 class = "btn btn-dark">สินค้าที่ขายได้ทั้งหมด</h5>
  <canvas class="chart1 " id="myChart" width="200px" height="200px" ></canvas>
  <?php
  echo "<script>";
   echo  "const ctx = document.getElementById('myChart');";
echo "const myChart = new Chart(ctx, {";
 echo "type: 'doughnut',";
 echo "data : data= {";
echo "labels: ['เครื่องเขียน $No0','กีฬา$No6 ','อาหาร/เครื่องดืม $No2','อิเล็ททรอนิกส์ $No4','ทั้งหมด $No7'],";
echo "datasets: [{";
 echo "label: '',";
 echo "data: [".$No0.",".$No6.",".$No2."," .$No4."," . $No7 ."],";
 echo "backgroundColor: ['rgb(255, 99, 132)','rgb(54, 162, 235)','rgb(255, 255, 30)','rgb(12,255,111)','rgb(255, 205, 86)'],hoverOffset: 5";
echo "}]";
echo "}});";


echo "</script>";
?>
<?php 

require "ConnectTest.php";
$connect = $conn;
$db ="SELECT Number_ FROM tb_ ORDER BY Number_  DESC LIMIT 1 ";
$result = mysqli_query($connect, $db); 
$row = mysqli_fetch_array($result);
$Max = $row['Number_'];

$db = "SELECT * FROM tb_";


$result2 = mysqli_query($connect, $db); 

$max = "100%";

$No0= 0;
/* 
for( $i = 0; $i<=$Max; $i++ ) {
    $No0 = $No0+$No1;
    echo "$No0";
 }*/
 while($row2 = mysqli_fetch_assoc($result2)){
    $No1 = $row2['Stock_'];
    $No0 = $No0+$No1;
 }


 $db2 = "SELECT * FROM tb_ where id_= 0001";
 $result3 = mysqli_query($connect, $db2); 
$No2 =0;
while($row3 = mysqli_fetch_assoc($result3)){
  $No3 = $row3['Stock_'];
  $No2 = $No3+$No2;
}

$No001 =($No2/$No0)*100;


$db3 = "SELECT * FROM tb_ where id_= 0002";
 $result4 = mysqli_query($connect, $db3); 
$No4 =0;
while($row3 = mysqli_fetch_assoc($result4)){
  $No5 = $row3['Stock_'];
  $No4 = $No5+$No4;
}

$No002 =($No4/$No0)*100;

$db4 = "SELECT * FROM tb_ where id_= 0003";
 $result5 = mysqli_query($connect, $db4); 
$No6 =0;
while($row3 = mysqli_fetch_assoc($result5)){
  $No7 = $row3['Stock_'];
  $No6 = $No7+$No6;
}
$No003 =($No6/$No0)*100;

$db5 = "SELECT * FROM tb_ where id_= 0004";
 $result6 = mysqli_query($connect, $db5); 
$No8 =0;
while($row3 = mysqli_fetch_assoc($result6)){
  $No9 = $row3['Stock_'];
  $No8 = $No9+$No8;
}
$No004 =($No8/$No0)*100;



?><br>
<button class="btn btn-primary" id ="numberrr">ดูสินค้าที่เหลือ</button>
<button class ="btn btn-danger" id ="numberrrr">กลับ</button>
<br>
<div class ='numberrr'>
<center><h6 class ="text-primary"><b><u>จำนวนสินค้าที่เหลือทั้งหมด</u> </h6></center>
<p class ="text-primary" > กีฬา :<?php echo $No004;?></p>
<p class ="text-success"> อิเล็คทรอนิกส์ :<?php echo $No003;?></p>
<p class ="text-info "> อาหาร/บริโภค :<?php echo $No002;?></p>
<p class ="text-warning"> อุปกรณ์การเรียน :<?php echo $No001;?></p>
<p class = "text-danger"> ทั้งหมด :<?php echo $No0;?></p>
<div class="progress"><p>จำนวน</p>
  <div class="progress-bar progress-bar-striped" role="progressbar"  style="width: <?php echo $No004; ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div><br>

<div class="progress"><p>จำนวน</p>
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?php echo $No003; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div><br>

<div class="progress">จำนวน
  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width:<?php echo $No002; ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div><br>

<div class="progress">จำนวน
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: <?php echo $No001; ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div><br>

<div class="progress">จำนวน
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: <?php echo "$max";?>" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<?php mysqli_close($connect);?>
</div>
</div>
    
</article>
<aside>
    <a href ="#"><h4>Menu</h4></a>
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active w-100" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-types" type="button" role="tab" aria-controls="v-pills-types" aria-selected="true">
            <h5><b>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
              </svg>
            ประเภทสินค้า
            </b></h5>
    





          </button>
          <button class="nav-link w-100" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Product" type="button" role="tab" aria-controls="v-pills-Product" aria-selected="false">
            <h5><b>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
            </svg>
            รายการสินค้า
          </b></h5>
            </button>
          <button class="nav-link w-100" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Sell" type="button" role="tab" aria-controls="v-pills-Sell" aria-selected="false">
            <h5><b>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
              </svg>
            ยอดขาย
            </b></h5>
           </button>
         
            <button class="nav-link w-100" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Settings" type="button" role="tab" aria-controls="v-pills-Settings" aria-selected="false">
              <h5><b>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
              </svg>
                จัดการสินค้า/โพสประกาศขาย
              </b></h5>
             </button>
             <button class="nav-link w-100" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Comment" type="button" role="tab" aria-controls="v-pills-Comment" aria-selected="false">
              <h5><b>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-square" viewBox="0 0 16 16">
                  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                </svg>
               Comment
              </b></h5>
             </button>


        </div>

        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-types" role="tabpanel" aria-labelledby="v-pills-home-tab">
         
         
         
         
         
          <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
    <button class="nav-link active"  id="Students-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
    <h5><b> เครื่องเขียนและหนังสือ</h5></b>
    </button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="Foods-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
    <h5><b> อาหาร/บริโภค  </h5></b>
    
    </button>
  </li>
  <li class="nav-item " role="presentation">
    <button class="nav-link " id="technology-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
    <h5><b>อุปกรณ์อิเล็คทรอนิกส์ </h5></b>
    </button>
  </li>
  <li class="nav-item" role="presentation">
  <button class="nav-link" id="sports-tab" data-bs-toggle="tab" data-bs-target="#content" type="button" role="tab" aria-controls="home" aria-selected="true">
  <h5><b>กีฬา </h5></b>
    </button>
</li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="Students-tab">
  <div class="row row-cols-1 row-cols-md-4 g-5">
  <?php

require "Students.php";

while($row = mysqli_fetch_assoc($result))  {
  

    echo "<div class='col'>";
        echo "<div class='card h-100'>";
            echo "<img src='".$row['Image']."' height='170px' class='card-img-top' alt='...'>";
          echo "<div class='card-body'>";
            echo "<h5 class='card-title text-warning'><b>".$row['Name_']."</b></h5>";
            echo "<p class='card-text'>".$row['details']."</p></div>";
          
         echo " <button class ='btn-sm btn-warning '><b>ราคา :".$row['Price']." Bath</b></button>";
          echo "<button class ='btn-sm btn-warning'><b>จำนวน : ".$row['Stock_'] ." Pice</b></button>";
          echo  "<div class='card-footer'>";
          echo "<small class='text-muted'>Last updated <br>".$row['Date']."ago<br> No.".$row['Number_']."</small>";
        echo "</div>";
        echo "</div></div>";
         
      
      if ($row['Name_'] > 4){
        echo "<br>";
      }
    }
        ?>

 </div>
 
 
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="Foods-tab">
  <div class="row row-cols-1 row-cols-md-4 g-5">
  
  <?php

require "food.php";

while($row = mysqli_fetch_assoc($result))  {
  

    echo "<div class='col'>";
        echo "<div class='card h-100'>";
            echo "<img src='".$row['Image']."' height='170px' class='card-img-top' alt='...'>";
          echo "<div class='card-body'>";
            echo "<h5 class='card-title text-info'><b>".$row['Name_']."</b></h5>";
            echo "<p class='card-text'>".$row['details']."</p></div>";
          
         echo " <button class ='btn-sm btn-info text-white  '><b>ราคา :".$row['Price']." Bath</b></button>";
          echo "<button class ='btn-sm btn-info text-white'><b>จำนวน : ".$row['Stock_'] ." Pice</b></button>";
          echo  "<div class='card-footer'>";
          echo "<small class='text-muted'>Last updated <br>".$row['Date']."ago <br> No.".$row['Number_']."</small>";
        echo "</div>";
        echo "</div></div>";}
        ?>

 </div> 
</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="techonologo-tab">
  <div class="row row-cols-1 row-cols-md-4 g-5">
  <?php

require "electro.php";

while($row = mysqli_fetch_assoc($result))  {
  

    echo "<div class='col'>";
        echo "<div class='card h-100'>";
            echo "<img src='".$row['Image']."' height='170px' class='card-img-top' alt='...'>";
          echo "<div class='card-body'>";
            echo "<h5 class='card-title text-success'><b>".$row['Name_']."</b></h5>";
            echo "<p class='card-text'>".$row['details']."</p></div>";
          
         echo " <button class ='btn-sm btn-success text-white'><b>ราคา :".$row['Price']." Bath</b></button>";
          echo "<button class ='btn-sm btn-success text-white'><b>จำนวน : ".$row['Stock_'] ." Pice</b></button>";
          echo  "<div class='card-footer'>";
          echo "<small class='text-muted'>Last updated <br>".$row['Date']."ago<br> No.".$row['Number_']."</small>";
        echo "</div>";
        echo "</div></div>";}
        ?>

 </div>

</div>
  <div class="tab-pane fade" id="content" role="tabpanel" aria-labelledby="sports-tab">
  <div class="row row-cols-1 row-cols-md-4 g-5">
  <?php

require "Sport.php";

while($row = mysqli_fetch_assoc($result))  {
  

    echo "<div class='col'>";
        echo "<div class='card h-100'>";
            echo "<img src='".$row['Image']."' height='170px' class='card-img-top' alt='...'>";
          echo "<div class='card-body'>";
            echo "<h5 class='card-title text-primary'><b>".$row['Name_']."</b></h5>";
            echo "<p class='card-text'>".$row['details']."</p></div>";
          
         echo " <button class ='btn-sm btn-primary text-white  '><b>ราคา :".$row['Price']." Bath</b></button>";
          echo "<button class ='btn-sm btn-primary text-white'><b>จำนวน : ".$row['Stock_'] ." Pice</b></button>";
          echo  "<div class='card-footer'>";
          echo "<small class='text-muted'>Last updated <br>".$row['Date']."ago<br> No.".$row['Number_']."</small>";
        echo "</div>";
        echo "</div></div>";}
        ?>

 </div> 


  </div>
</div>
         

         
      

          </div>

          
          <div class="tab-pane fade" id="v-pills-Product" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          
          <table class="table bg-danger ">
          <thead>
      <tr>
      <th scope ="col">No.</th>
        <th scope ="col">หมายเลขสินค้า</th>
        <th scope="col ">กลุ่ม/ประเภท</th>
        <th scope="col">ชื่อสินค้า</th>
        <th scope="col">ราคา(บาท)</th>
        <th scope="col">จำนวน</th>
        <th scope="col">รายละเอียดสินค้า</th>
        <th scope="col">ตัวอย่างสินค้า</th>
        <th scope="col">วัน/เดือน/ปี</th>
      </tr>
    </thead>
          <?php
                  
                  require "All.php";

                  
                

                  while($row = mysqli_fetch_assoc($result)) {
                    echo "<tbody>";
                    echo "<tr class ='table-info'>";
                    echo "<td>".$row['id_']."</td>";
                    echo "<td>".$row['Number_']."</td>";
                    echo "<td>".$row['Type_']."</td>";
                    echo "<td>".$row['Name_']."</td>";
                    echo "<td>".$row['Price']."</td>";
                    echo "<td>".$row['Stock_']."</td>";
                    echo "<td>".$row['details']."</td>";
                    echo "<td><img src='".$row['Image']."' width='100px' height='100px'></td>";
                    echo "<td>".$row['Date']."</td>";
                    
                    echo "</td></tr>";}
                       
                   
                  
       ?>

      <a href ="All2.php" class ="All "><h5>ดูสินค้าทั้งหมด</h5></a>
      


    </tbody>
  </table>











          </div>
          <div class="tab-pane fade" id="v-pills-Sell" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            <h5 class ="text-danger">สินค้าที่ขายได้</h5>
          <table class="table bg-out-light-primary ">
          <thead>
      <tr>
        
        <th scope="col ">กลุ่ม/ประเภท</th>
        <th scope="col">ชื่อสินค้า</th>
        <th scope="col">ราคา(บาท)</th>
        <th scope="col">จำนวน</th>
        
        
        
      </tr>
    </thead>
          <?php
 require "connectTest2.php";
 $connect = $conn2;
$All = "SELECT * FROM customer ";
$result22 = mysqli_query($connect, $All);
            require "All.php";
            while($row = mysqli_fetch_assoc($result22)) {
      echo "<tbody>";
     echo "<tr class ='table-info'>";
     
        echo "<td>".$row['Type_']."</td>";
        echo "<td>".$row['Name_']."</td>";
        echo "<td>".$row['Price']."</td>";
        echo "<td>".$row['Number']."</td>";
       
      
        
      
    echo "</td></tr>";
  }
    
    
      ?>

    
      </tbody>
  </table>
          </div>
         


          <div class="tab-pane fade" id="v-pills-Settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
        
              <h3 class ="text-warning">กรุณากดปุ่ม </h3>
                  <div class=" col-lg-12 col-sm-12 col-md-12 col-xs-12" >
                  <button type="button" class="btn btn-outline-danger border-3 " id="Add"><b>เพิ่ม</b></button>

                   <button type="button" class="btn btn-outline-primary border-3 " id="Delete"><b>ลบ</b></button>

                  <button type="button" class="btn btn-outline-warning border-3 " id="Edite"><b>แก้ใข</b></button>

                   </div>
                   <div class ="A">  <h1>ADD </h1> 
                   <div class ="formCreate">
           <form  action = "Transistion.php" method ="post" enctype ="multipart/form-data">
           
         <table>
         <tr>
               <td><h5 class ="text-danger">Group/กลุ่มสินค้า:</h5></td> 
               <td><select name="TYPEE" class =" bg-danger ">
                 <option value ="1" class ="text-white">อุปรกณ์เครื่องเขียน</option>
                 <option value ="2">อาหาร/บริโภค</option>
                 <option value ="3">อุปกรณ์อิเล็คทรอนิกส์</option>
                 <option value ="4">อุปกรณ์กีฬา</option>
               </select>
               </td>
            </tr>
            <tr>
               <td><h5 class ="bg-white text-dark border-2 ">Name/ชื่อสินค้า:</h5></td> 
               <td><input class="bg-white text-dark" type = "text" name = "name" ></td>
            </tr>
            
            <tr>
               <td><h5 class ="text-primary">Price/ราคา:</h5></td>
               <td><input class ="bg-primary" type = "number"  name = "price" onclick ="Number();"></td>
            </tr>
            
            <tr>
               <td><h5 class ="bg-white text-dark border-2 ">Number/จำนวน:</h5></td>
               <td><input class="bg-white text-dark" type = "number" name = "Stock"></td>
            </tr>
            
            <tr>
               <td><p class ="text-danger">details/รายละเอียดสินค้า:</p></td>
               <td><textarea  class =" bg-danger " name = "details" rows = "5" cols = "40"></textarea></td>
            </tr>
            <tr>
               <td><h5 class ="text-primary">Image</h5></td>
               
               <td><input   type ="file" name ="filetoupload" id ="filetoupload" ></td>
            </tr>
            <tr>
               <td><h5 class ="text-success">ชื่อผู้โพส</h5></td>
               <td><input class="bg-white text-dark" type = "text" name = "" ></td>
            </tr>
           
            
            <tr>
               <td>
                  <input class ="btn-lg btn-primary" type = "submit" name = "submit" value = "Submit" ></button> 
               </td>
            </tr>
         </table>
            </form>
           </div>








          </div>
                  
                  
                 

                   <div class ="D">
                     
                   <br><center> <h1 class ="text-primary "> <u>Delete </u></center></h1> 
                  
                   <form method = "post" action ="Delete.php">
           
           <table>
           <tr>
           <td><h5 class ="text-danger">Group/กลุ่มสินค้า:</h5></td> 
               <td><select name="TYPEE" class =" bg-danger ">
                 <option value ="1" class ="text-white">อุปรกณ์เครื่องเขียน</option>
                 <option value ="2">อาหาร/บริโภค</option>
                 <option value ="3">อุปกรณ์อิเล็คทรอนิกส์</option>
                 <option value ="4">อุปกรณ์กีฬา</option>
               </select>
               </td>
              <tr>
                 <td><h5 class =" text-dark border-2 ">Name/ชื่อสินค้า:</h5></td> 

                 <td><input type ="text" class ="border-4 border-dark btn btn-light " value=" " name ="name"></td>
              </tr>
              <tr>
                 
            </table>
              <input class ="btn-lg btn-primary" type = "submit" name = "submit" value = "Submit" ></button> 
                    </form>

                  
                  </div>



                   <div class ="E">  
                     
                   
                   <br><center> <h1 class ="text-primary "> <u>Edite </u></center></h1>
                   <form method = "post" action = "edite.php">
                  
                   <h5 class = "text-dark">ชื่อสินค้า:</h5>
                   <input type ="text" class ="border-4 border-dark btn btn-light " value="" name ="name">
                   <div class ="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                     <br><br>
                   <input class ="btn-lg btn-primary border-3 col-5" id="subEdite" type = "submit" name = "submit" value = "เลือก" ></button> 
                   <input class ="btn-lg btn-danger border-3 col-6" id="" type = "reset" name = "reset" value = "ยกเลิก" ></button>
                    </div> 
                  
                      

                   </form>
            </div>
            </div>
                        <?php /*
                     <div class ="Edite2">
                  <?php
                    


                
                      $type =$_POST['Type'];
                      $name= $_POST['Name'];
                      // ให้เลือกใช้งาน SQL1 หรือ SQL2
                    // SQL1. เลือกข้อมูลในตารางทั้งหมด
                    
                    $edite = "SELECT * FROM tb_ where Name_= 0002";
                    
                    
                    // ตรวจสอบข้อมูลในฐานข้อมูลที่จะแสดงผล
                    
                    $result = mysqli_query($connect, $edite);
                    
                    if (!$result){
                    echo "กรุณาตรวจสอบ ประเภท และ รายการสินค้าให้ถูกต้อง";
                    
                    }else{
                        echo "";
                    }
                       $sports="";
                       if (mysqli_num_rows($result) > 0) {
                           echo "";}
                           else{
                               echo "กรุณาตรวจสอบ ประเภท และ รายการสินค้าให้ถูกต้อง";
                           }


while($row = mysqli_fetch_assoc($result))  {
 

    echo "<div class='col'>";
        echo "<div class='card h-100'>";
        
        echo "<form method = 'post' action = ' '>";
        echo "<input type ='file' name ='image'>";
        
            echo "<img src='\Image/อัพโหลด.PNG' height='170px' class='card-img-top' alt='...'>";
          echo "<div class='card-body'>";
            echo "<h5 class='card-title text-success'><b><input type ='text' name ='name' value = '".$row['Name_']."'></b></h5>";
            echo "<p class='card-text'><textarea  class =' bg-danger ' name = 'comment' rows = '5' cols = '40' value = ".$row['details']."></textarea></p></div>";
          
         echo " <button class ='btn-sm btn-success text-white'><b><input class='bg-white text-dark' type = 'number' name = 'price' value ='ราคา ".$row['price']." BATH'></b></button>";
          echo "<button class ='btn-sm btn-success text-white'><b><input class='bg-white text-dark' type = 'number' name = 'Stock' value = 'จำนวน ".$row['Stock']  ."'></b></button>";
          echo  "<div class='card-footer'>";
          echo "<small class='text-muted'>Last updated <br>".$row['Date']."ago</small>";
        echo "</div>";
        echo "</div></div>";}
        ?>                  


               </form>                 
</div>
                  
                  </div>

*/
?>
        
         <div class="tab-pane fade" id="v-pills-Comment" role="tabpanel" aria-labelledby="v-pills-settings-tab">...
         <table class="table bg-out-light-primary ">
          <thead>
      <tr>
        
        <th scope="col ">จากสินค้า</th>
        <th scope="col ">ความคิดเห็น</th>
        
        
      </tr>
    </thead>
          <?php
 require "connectTest2.php";
 $connect = $conn2;
$All = "SELECT * FROM feedback_ ";
$result22 = mysqli_query($connect, $All);
            require "All.php";
            while($row = mysqli_fetch_assoc($result22)) {
      echo "<tbody>";
     echo "<tr class ='table-info'>";
     echo "<td>".$row['Name_']."</td>";
        echo "<td>".$row['Comment_']."</td>";
       
       
      
        
      
    echo "</td></tr>";
  }
    
    
      ?>

    
      </tbody>
  </table>
       </div>
        </div>
      </div>

</aside>

    <footer>
<div class="row col-12">
<div class ="col-lg-3 col-xl-3 col-sm-3 ">
  
 <h4> E-commer</h4>
 <h5>ส่วนประกอบ</h5>
  <p>ประเภทสินค้า </p>
  <p>รายการสินค้า</p>
  <p>ยอดขายสินค้า</p>
  </div>
  <div class ="col-lg-3 col-xl-3 col-sm-3 ">
  <p>รายชื่อผู้ใช้</p>
  <p>ความคิดเห็น</p>
  <p>Feedback</p>
  <h4> เครื่องมือ </h4>
  <p>Html,css,Javascript,php</p>
  <p>jquery bootstrap chart</p>
  <p>Mysql</p>
</div>
<div class ="col-lg-3 col-xl-3 col-sm-3 ">
  
  

 
</div>
<div class ="col-lg-3 col-xl-3 col-sm-3 ">
  <h4>ข้อมูลติดต่อ</h4>
  <p>Facebook :</p><a href="https://www.facebook.com/profile.php?id=100076436141292">นาย ศาสตราวุธ ตั้งอำพล</a>
  <p> Line : 0638767955</p> 
  <p> เบอร์ติดต่อ : 0638767955</p>
</div>





</div>
    </footer>
</body>
<script>




  $(".article").ready(function(){
$(".numberrr").hide(500);
$("#numberrrr").hide(500);
});


$('#numberrr').click(function(){
  $(".numberrr").show(500);
  $("#numberrrr").show(500);
  $("#numberrr").hide(500);});


 $("#numberrrr").click(function(){
  $(".numberrr").hide(500);
$("#numberrrr").hide(500);
$("#numberrr").show(500);

 }) ;










  $("#v-pills-Settings").ready(function(){
    $(".A").hide(500); 
   $(".D").hide(500); 
   $(".E").hide(500); 
   });

  
  $("#Add").click(function(){
   $(".A").show(1000); 
   $(".D").hide(500); 
   $(".E").hide(500); 
  });
  $("#Delete").click(function(){
   $(".A").hide(500); 
   $(".D").show(1000); 
   $(".E").hide(500); 
  });
  $("#Edite").click(function(){
   $(".A").hide(500); 
   $(".E").show(1000); 
   $(".D").hide(500); 
  });

  /*
  $("#subEdite").click(function(){
    $(".A").hide(500); 
   $(".Edite2").show(500); 
   $(".D").hide(500); 
  });
  $(".E").ready(function(){
   $(".Edite2").hide(500);
    
  });*/
  

</script>

</html>