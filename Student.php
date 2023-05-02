
<!DOCTYPE html>
<html>
<head>
<title>Shop</title>
<meta name="viewport" content="width=device-width,initial-scale=1" charset="UTF8">
<link a href ="bootstrap-5.1.3\css\bootstrap.css" rel="stylesheet"> 
<link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src ="bootstrap-5.1.3/js/bootstrap.js"></Script>
<script src ="bootstrap-5.1.3/js/bootstrap.bundle.js"></script>
<script src="https://ajax.googleapis.com/.../jquery/3.6.0/jquery.min.js"></script>
<script src = "https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<link href ="SupWeb.css" rel="stylesheet">


</head>
<body>
  <div class ="menu visually-hidden" onmousedown="HomeMenuclose();">
    <p id="HomeC">HOME</p>
  </div>
<header class ="bg-dark">
  <div class ="logo">
            <a class=" " href="#" onload="a();"><h4>SHOP</h4></a>
            </div>
            <div class ="menu hidden-sm ">
                <a class="" id="Home"aria-current="page" href="Web.php" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                        <p id="p1 " hidden>1. Computer Science and Artificial Intelligent</p>
                       <p class ="A"  >หน้าหลัก</p></svg>
                    </a>
                   
                  
             
                <a class="" id="admin" href="e-com.php">  <p class="B w-50" >จัดการสินค้า</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-hand-index-thumb" viewBox="0 0 16 16">
                        <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 0 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 1 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.118a.5.5 0 0 1-.447-.276l-1.232-2.465-2.512-4.185a.517.517 0 0 1 .809-.631l2.41 2.41A.5.5 0 0 0 6 9.5V1.75A.75.75 0 0 1 6.75 1zM8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v6.543L3.443 6.736A1.517 1.517 0 0 0 1.07 8.588l2.491 4.153 1.215 2.43A1.5 1.5 0 0 0 6.118 16h6.302a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5.114 5.114 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.632 2.632 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046l-.048.002zm2.094 2.025z"/>
                   
                      </svg>
                   </a>
                 
             
                <a class="" id="Sell" href="Comment.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>
                         <p class="c w-50" >พูดคุยแสดงความคิดเห็น</p>
                        </a>
             
              
              
            
          
        </nav>
        <div class="Profile ">

          <div>
          <button type="button" class="btn btn-dark dropdown-toggle  " data-bs-toggle="dropdown" aria-expanded="false">
            <img class="rounded-circle" src="Image/OIP.jpg"  aria-hidden="true" alt="" width="30" height="30" class="d-inline-block align-text-top">
         <b> PROFILE</b>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-dark" href="Web.php"><b>Home</b></a></li>
            <li><a class="dropdown-item text-dark" href="Comment.php"><b>Comment</b></a></li>
            
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="e-com.php"><b>จัดการสินค้า</b></a></li>
          </ul>
        
        
        
      </div>

     
</header>

<aside class="">
<h5><b>หมวดหมู่/ประเภทสินค้า</b></h5>
 
<div class ="group ">
<div class="row-cols-1">

<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 ">
<a href="Student.php" > <img src ="รูปตกแต่ง/books-ga4559b162_1280.jpg" height="100px" width="200px"></a>
</div>
<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
  <a href ="foods.php" > <img src ="รูปตกแต่ง/drinks-g2e8957ae8_1280.jpg" height="100px" width="200px"></a>
</div>
<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
  <a href="Technology.php"> <img src ="รูปตกแต่ง/hands-gaf0b792f0_1280.jpg" height="100px" width="200px"></a>
</div>
<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
  <a href="Sports.php" > <img src ="รูปตกแต่ง/man-gd9b09da07_1280.jpg" height="100px" width="200px"></a>
</div>






</div>

</div>







</aside>
<section class ="bg-dark">
  

  <div class ="category row-cols-12  w-50 ">

</section>
<?php 

require "ConnectTest.php";
$connect = $conn;
$db ="SELECT Number_ FROM tb_ ORDER BY Number_  DESC LIMIT 1 ";
$result = mysqli_query($connect, $db); 
$row = mysqli_fetch_array($result);
$Time = $row['Number_'];
$Time2 = $Time-1;
$Time3 = $Time-2;

/*เอาไว้เพื่อต้องการดึงขอมูล หรือจะ while ก็ได้ */
$db2 ="SELECT * FROM tb_ WHERE Number_ =$Time ";
$result2 = mysqli_query($connect, $db2); 
$row2 = mysqli_fetch_array($result2);



?>
<article >
  <br>
  <br>
  <div class ="bg-dark">
<h1 class="text-white  ">สินค้ามาใหม่</h1>
</div>
<div id="carouselExampleDark border-3" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

 
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="<?php echo $row2['Image']; ?>" class="d-block w-25 h-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $row2['Name_'];?></h5>
        <p>.....<?php echo $row2['details'];echo $row2['Price'] ; echo "BATH";   ?></p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="1100">
      <img src="Image/โน๊ตบุ้ค1.jpg" class="d-block w-25" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Note book</h5>
        <p>This is Designt For You Working to Future Togeter Smrat Tab Smart Life..</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="1200">
      <img src="Image/ปากกา.jpg" class="d-block w-25" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>ปากกาเขียนดี</h5>
        <p>ปากกาเขียนดี ลื่น สบายมือ คมชัดทุกเส้น หมึกแท้อย่างดี.</p>
      </div>
    </div>
    
  </div>
  
</div>

</article>
<footer class="bg-dark">
 <div class ="student">
  <h1 class="text-white ">อุปกรณ์เครื่องเขียน/หนังสือ</h1>
  </div>
  
  
  <div class ="product1 bg-dark">
    <h2 class ="text-white">เลือกสินค้าที่ละ 1 อย่าง</h2>
  <div class="row row-cols-1 row-cols-md-4 g-5">
    
      
   
  <?php

require "connectTest.php";
$connect = $conn;
$sHow = "SELECT * FROM tb_  Where id_ = 0001";
$result = mysqli_query($connect, $sHow); 

  while($row = mysqli_fetch_assoc($result))  {
  
  
    echo " <form method = 'post' action = 'Category.php'>";
    echo "<div class='col'>";
    echo "<input type='radio' name ='name' value=".$row['Number_']."><b class ='text-white'>เลือกสินค้า";
        echo "<div class='card h-100'>";
            echo "<img src='".$row['Image']."' height='170px' widht='200px' class='card-img-top' alt='...'>";
          echo "<div class='card-body'>";
            echo "<h5 class='card-title text-warning'><b>".$row['Name_']."</b></h5>";
            echo "<p class='card-text'>".$row['details']."</p></div>";
          echo "<div class 'card-body'>";
         echo " <button class ='btn-sm btn-warning '><b>ราคา :".$row['Price']." Bath</b></button>";
          echo "<button class ='btn-sm btn-warning'><b>จำนวน : ".$row['Stock_'] ." Pice</b></button>";
           echo "</div>";
          echo  "<div class='card-footer'>";?>
          <p class ="text-primary">จำนวนสินค้า </p>
          <input type ="number" name ="Number" class ="btn btn-primary btn-sm" value ="01">
        <p></p>
          <button class ='btn-sm btn-danger '><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
</svg>
        </svg>
        </b></button>
        
        <Input type="reset" class ='btn-sm btn-primary'><b>  </b></button></form>
        <p>
            
        <?php 
        /*
        <form method = 'post' action = "<?$_PHP_SELF?>">
        <input type="checkbox" class="btn-check " id="btn-check" Value= "<?php echo $row['Number_'];?>">
<label class="btn btn-warning" for="btn-check"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg>
</label>
  </form>*/?>
      <?php
        echo "</div>";
        echo "</div></div>";
        
      }

      mysqli_close($conn);
        ?>
</div>
 </div>

  
</footer>
</body>
<script>
  $("#Home").ready(function(){
   $(".A").hide(1000); 
  });
  $("#Home").hover(function(){
   $(".A").show(1000); 
  });
  $("#Home").mouseleave(function(){
  $(".A").hide(1000); 
 });       
 $("#admin").ready(function(){
   $(".B").hide(1000); 
  });   
  $("#admin").hover(function(){
     $(".B").show(1000); 
  });
  $("#admin").mouseleave(function(){
     $(".B").hide(1000); 
  });
  $("#Sell").ready(function(){
   $(".c").hide(1000); 
  });
  $("#Sell").hover(function(){
     $(".c").show(1000); 
  });
  $("#Sell").mouseleave(function(){
     $(".c").hide(1000); 
  });
  $("#Category").ready(function(){
   $(".D").hide(1000); 
  });
  $("#Category").hover(function(){
     $(".D").show(1000); 
  });
  $("#Category").mouseleave(function(){
     $(".D").hide(1000); 
  });
  
  
  </script>

</html>