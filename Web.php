<!DOCTYPE html>
<html>
<head>
<title>Shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" charset="UTF8"> 

<link a href ="bootstrap-5.1.3\css\bootstrap.css" rel="stylesheet"> 
<link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src ="bootstrap-5.1.3/js/bootstrap.js"></Script>
<script src ="bootstrap-5.1.3/js/bootstrap.bundle.js"></script>
<script src="https://ajax.googleapis.com/.../jquery/3.6.0/jquery.min.js"></script>
<script src = "https://code.jquery.com/jquery-3.6.0.min.js" ></script>

  

<link href ="SupWeb.css" rel="stylesheet">

<style type="text/css">
  div.wrap-product-box.added .btn-add-to-cart{
    display:none;
  }    
  div.wrap-product-box .btn-remove-from-cart{
    display:none;
  }  
  div#wrap-my-cart  .btn-remove-from-cart{
    display:inline-block;
  }

</style>  
<script Type= 'text/javascript'>

 


  
      

      $(document).on("click", "#onclick", function(e) {
    e.preventDefault();

    var $label = $(this).find('.text'),
        $badge = $(this).find('.badge'),
        count = Number($badge.text()),
        active = $(this).hasClass('active');

    $label.text(active ? 'Like' : 'Liked');
    $badge.text(active ? count - 1 : count + 1);
    $(this).toggleClass('active');
});
    </script>
</head>
<body>

<?php 
require "ConnectTest.php";
$connect =$conn;

?>


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

<div class="offcanvas offcanvas-start "  tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel"><u>ตะกร้าสินค้า</u> </h5>
      <br> <h6 class ="text-danger" > ยังไม่ได้ต่อเข้า ฐานข้อมูล</h6>
      <button type="button"} class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
    <form id="form_checkout" name="form_checkout" method="post" action="">
        <div id="wrap-my-cart">
        </div>
        
      </form>
     
      
    </div>
  </div>



<aside class="">
<h5><b>หมวดหมู่/ประเภทสินค้า</b></h5>
 
<div class ="group ">
<div class="row-cols-1">

<div class="Student col-lg-12 col-sm-12 col-xs-12 col-md-12 ">
<a href="#" id ="student"> <img src ="รูปตกแต่ง/books-ga4559b162_1280.jpg" height="100px" width="200px"></a>
</div>
<div class="foods col-lg-12 col-sm-12 col-xs-12 col-md-12">
  <a href ="#" id ="foods"> <img src ="รูปตกแต่ง/drinks-g2e8957ae8_1280.jpg" height="100px" width="200px"></a>
</div>
<div class="Technology col-lg-12 col-sm-12 col-xs-12 col-md-12">
  <a href="#" id="technology"> <img src ="รูปตกแต่ง/hands-gaf0b792f0_1280.jpg" height="100px" width="200px"></a>
</div>
<div class="Sports col-lg-12 col-sm-12 col-xs-12 col-md-12">
  <a href="#" id= "sports" > <img src ="รูปตกแต่ง/man-gd9b09da07_1280.jpg" height="100px" width="200px"></a>
</div>






</div>

</div>







</aside>
<section class ="">
  

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

$db3 ="SELECT * FROM tb_ WHERE Number_ =$Time2 ";
$result3 = mysqli_query($connect, $db3); 
$row3 = mysqli_fetch_array($result3);

$db4 ="SELECT * FROM tb_ WHERE Number_ =$Time3 ";
$result4 = mysqli_query($connect, $db4); 
$row4 = mysqli_fetch_array($result4);



?>
<article >
  <br>
  <br>
  <div class ="">
<h1 class="text-dark  " id ="">สินค้ามาใหม่</h1>
</div>
<div id="carouselExampleDark border-3" class="carousel carousel-dark slide " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" hidden></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2" hidden></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3" hidden></button>
  </div>

 
  <div class="carousel-inner ">

    <div class="carousel-item active "  id ='test1' data-bs-interval="3000">
      <img src="<?php echo $row2['Image']; ?>" class="image d-block w-25 h-65 " alt="..."  >
      <div class="carousel-caption d-none d-md-block">
        <h5 class ="" ><?php echo $row2['Name_'];?></h5>
        <p>.....<?php echo $row2['details'];echo "<h4 class ='text-danger'> ราคา ". $row2['Price'] ."</h4>"; echo " BATH";   ?></p>
        
 
       
    </div></div>
    <div class="carousel-item" data-bs-interval="3100">
      <img src="<?php echo $row3['Image']?>" class="image d-block w-25 h-65 " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $row3['Name_']?></h5>
        <p>......<?php   echo $row3['details'];echo "<h4 class ='text-danger'> ราคา ". $row3['Price'] ."</h4>"; echo " BATH";?></p>
        
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3200">
      <img src="<?php echo $row4['Image']?>" class="image d-block w-25 h-65" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $row4['Name_']?></h5>
        <p>....  <?php   echo $row4['details'];echo "<h4 class ='text-danger'> ราคา ". $row4['Price'] ."</h4>"; echo " BATH";?></p>
       
      </div>
    </div>
    
  </div>
  
</div>


<div class="modal fade" id="<?php echo "detaill".$row2['Number_']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Detail <?php echo $row2['Name_']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4 class = "text-dark" style ="text-shadow : 5px 5px 5px " >
        <?php 
          echo $row2['details'];
        ?>
        </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>


</article>
<footer class="bg-dark">




 <div class ="showhome bg-dark">
  <h1 class="labelshow text-white " id ="showhome1">สินค้าแนะนำ</h1>
  </div>
  
  
  <div class ="product1 bg-dark ">
   
  <div class="row row-cols-1 row-cols-md-4 g-5 " id="showhome">

      
   
  <?php



require "connectTest.php";
$connect = $conn;
$sHow =   " SELECT * FROM tb_ limit 4 ";
$result = mysqli_query($connect, $sHow); 







  while($row = mysqli_fetch_assoc($result))  {
  

    //ไปดูรายละเอียดที่ไฟล์category.php เพื่อแก้ใข
    echo "<div class='col '>";
    echo "<div class='card h-100'>";
            echo "<img src='".$row['Image']."' height='170px' widht='200px' class='card-img-top' alt='...'>";
            echo "<div class='wrap-product-box' data-proid='".$row['Number_']."'>";
        
          echo "<div class='card-body'>";
            echo "<h5 class='card-title text-warning'><b>".$row['Name_']."</b></h5>";
            
          echo "<div class 'card-body'>";
         echo " <div class ='btn-sm btn-warning '><b>ราคา :".$row['Price']." Bath</b></div>";
          echo "<div class ='btn-sm btn-warning'><b>จำนวน : ".$row['Stock_'] ." Pice</b></div>";
           echo "</div>";
           
           
          echo  "<div class='card-footer'>";
          echo "<input type ='number' name = '".$row['Name_']."' class = 'btn btn-outline-danger' value='1'>";

          
        
            ?>
          
          
        
        <p></p>
          
<button class ="btn btn-info" type = "submit" name ="submit" >
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                  </svg>
                  BUY
  </button>

  <button class="btn btn-danger btn-add-to-cart"  id = 'subbtnAdd1'> 
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
</svg>
  </button> 
  <button type="button" class="btn btn-primary btn-sm btn-remove-from-cart" id ='subbtnDelete1'>
          <i class="fas fa-cart-arrow-down fa-fw mr-2"></i>
          Remove</button> 
  
        <p>
        <?php  
         echo "</div></div>";
       
         echo "<a class='btn btn-outline-danger btn-sm'  
         data-bs-toggle='modal' data-bs-target= #detail".$row['Number_']."><b>รายละเอียดสินค้า</b></a></div>";
         

         echo "</div></div>";
        
         /*
        <form method = 'post' action = "<?$_PHP_SELF?>">
        <input type="checkbox" class="btn-check " id="btn-check" Value= "<?php echo $row['Number_'];?>">
<label class="btn btn-warning" for="btn-check"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg>
</label>
  </form>*/?>
       <div class="modal fade" id="<?php echo "detail".$row['Number_']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Detail <?php echo $row['Name_']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4 class = "text-dark" style ="text-shadow : 5px 5px 5px " >
        <?php 
          echo $row['details'];
        ?>
        </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
          

         <?php
         
      }

      mysqli_close($conn);
        ?>
        

        
        </div></div></div>

    <br><br><br><br><br><br>






    <div class ="studentshow bg-dark">
  <h1 class="labelshow text-white " id ="studentshow1">สินค้าอุปกรณ์เครื่องเขียน</h1>
  </div>
  
  
  <div class ="product1 bg-dark">
   
  <div class="row row-cols-1 row-cols-md-4 g-5" id="studentshow">
    
      
   
  <?php



require "connectTest.php";
$connect = $conn;
$sHow =   " SELECT * FROM tb_ WHERE id_ = 0001 ";
$result = mysqli_query($connect, $sHow); 

  while($row = mysqli_fetch_assoc($result))  {
  

    //ไปดูรายละเอียดที่ไฟล์category.php เพื่อแก้ใข
    echo "<div class='col'>";
   
        echo "<div class='card h-100'>";
            echo "<img src='".$row['Image']."' height='170px' widht='200px' class='card-img-top' alt='...'>";
            echo "<div class='wrap-product-box' data-proid='".$row['Number_']."'>";
          echo "<div class='card-body'>";
            echo "<h5 class='card-title text-warning'><b>".$row['Name_']."</b></h5>";
            echo "<div class 'card-body'>";
         echo " <div class ='btn-sm btn-warning '><b>ราคา :".$row['Price']." Bath</b></div>";
          echo "<div class ='btn-sm btn-warning'><b>จำนวน : ".$row['Stock_'] ." Pice</b></div>";
           echo "</div>";   
          echo  "<div class='card-footer'>";
        echo "<input  class='btn btn-outline-danger' type ='number' name = ".$row['Name_']." value ='1'>";

        ?>
        <p></p>
        


     

         
        
        </b></button>
        </button>
        <button class ="btn btn-info" type = "submit" name ="submit" >
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                  </svg>
                  BUY
  </button>
        <button class="btn btn-danger btn-add-to-cart"  > 
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
</svg>
  </button> 
  <button type="button" class="btn btn-primary btn-sm btn-remove-from-cart">
          <i class="fas fa-cart-arrow-down fa-fw mr-2"></i>
          Remove</button>   
        
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
        echo "</div></div>";
        echo "<a class='btn btn-outline-danger btn-sm'  data-bs-toggle='modal' data-bs-target= #detailS".$row['Number_']."><b>รายละเอียดสินค้า</b></a></div>";
          
        echo "</div></div>";
     ?>
        <div class="modal fade" id="<?php echo "detailS".$row['Number_']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Detail <?php echo $row['Name_']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4 class = "text-dark" style ="text-shadow : 5px 5px 5px " >
        <?php 
          echo $row['details'];
        ?>
        </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
     

     <?php
      }

      mysqli_close($conn);
        ?>
       
       


    </div>
 </div>
</div>
    


    <br><br><br><br><br><br>




    <div class ="foodsshows bg-dark">
  <h1 class="labelshow text-white " id="foodsshow1">สินค้าอุปโภคบริโภค</h1>
  </div>
  
  
  <div class ="product1 bg-dark">
   
  <div class="row row-cols-1 row-cols-md-4 g-5" id ="foodsshow">
    
      
   
  <?php



require "connectTest.php";
$connect = $conn;
$sHow =   " SELECT * FROM tb_ WHERE id_ = 0002 ";
$result = mysqli_query($connect, $sHow); 
$detail = 7;
  while($row = mysqli_fetch_assoc($result))  {
  

    //ไปดูรายละเอียดที่ไฟล์category.php เพื่อแก้ใข
    echo "<div class='col' id='foodsshow'>";
   
        echo "<div class='card h-100'>";
            echo "<img src='".$row['Image']."' height='170px' widht='200px' class='card-img-top' alt='...'>";
            echo "<div class='wrap-product-box' data-proid='".$row['Number_']."'>";
          echo "<div class='card-body'>";
            echo "<h5 class='card-title text-warning'><b>".$row['Name_']."</b></h5>";
           
          echo "<div class 'card-body'>";
         echo " <div class ='btn-sm btn-warning '><b>ราคา :".$row['Price']." Bath</b></div>";
          echo "<div class ='btn-sm btn-warning'><b>จำนวน : ".$row['Stock_'] ." Pice</b></div>";
           echo "</div>";   
          echo  "<div class='card-footer'>";
           echo "<input  class='btn btn-outline-danger' type ='number' name = ".$row['Name_']." value ='1'>";
       ?>
        <p></p>
        

       
         
        
       
       
        <button class ="btn btn-info" type = "submit" name ="submit" >
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                  </svg>
                  BUY
  </button>
        <button class="btn btn-danger btn-add-to-cart"  > 
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
</svg>
  </button> 
  <button type="button" class="btn btn-primary btn-sm btn-remove-from-cart" >
          <i class="fas fa-cart-arrow-down fa-fw mr-2"></i>
          Remove</button> 
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
        echo "</div></div>";
        echo "<a class='btn btn-outline-danger btn-sm'  data-bs-toggle='modal' 
        data-bs-target= #detailF".$row['Number_']."><b>รายละเอียดสินค้า</b></a></div>";
        echo "</div></div>";
        ?>
 <div class="modal fade" id="<?php echo "detailF".$row['Number_']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  
        <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Detail <?php echo $row['Name_']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4 class = "text-dark" style ="text-shadow : 5px 5px 5px"  >
        <?php 
          echo $row['details'];
        ?>
        </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

        <?php
      }

      mysqli_close($conn);
        ?>
       
       



       
</div>
 </div>
    </div>


    <br><br><br><br><br><br>

    <div class ="technologyshow bg-dark">
  <h1 class="labelshow text-white " id ="technologyshow1">สินค้าอิเล็คทรอนิกส์</h1>
  </div>
  
  
  <div class ="product1 bg-dark">
   
  <div class="row row-cols-1 row-cols-md-4 g-5" id ="technologyshow">
    
      
   
  <?php



require "connectTest.php";
$connect = $conn;
$sHow =   " SELECT * FROM tb_ WHERE id_ = 0003 ";
$result = mysqli_query($connect, $sHow); 
$detail = 1;
  while($row = mysqli_fetch_assoc($result))  {
  

    //ไปดูรายละเอียดที่ไฟล์category.php เพื่อแก้ใข
    echo "<div class='col' >";
   
        echo "<div class='card h-100'>";
            echo "<img src='".$row['Image']."' height='170px' widht='200px' class='card-img-top' alt='...'>";
            echo "<div class='wrap-product-box' data-proid='".$row['Number_']."'>";
          echo "<div class='card-body'>";
            echo "<h5 class='card-title text-warning'><b>".$row['Name_']."</b></h5>";
            
           
          echo "<div class 'card-body'>";
         echo " <div class ='btn-sm btn-warning '><b>ราคา :".$row['Price']." Bath</b></div>";
          echo "<div class ='btn-sm btn-warning'><b>จำนวน : ".$row['Stock_'] ." Pice</b></div>";
           echo "</div>";   
          echo  "<div class='card-footer'>";
       
          echo "<input  class='btn btn-outline-danger' type ='number' name = ".$row['Name_']." value ='1'><br>";


       ?>
         
         <p></p>
        </b>  
        
        <button class ="btn btn-info" type = "submit" name ="submit" >
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                  </svg>
                  BUY
  </button>
  <button class="btn btn-danger btn-add-to-cart"  > 
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
</svg>
  </button> 
  <button type="button" class="btn btn-primary btn-sm btn-remove-from-cart">
          <i class="fas fa-cart-arrow-down fa-fw mr-2"></i>
          Remove</button> 
     
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
        echo "</div></div>";
        echo "<a class='btn btn-outline-danger btn-sm'  data-bs-toggle='modal' 
        data-bs-target= #detailE".$row['Number_']."><b>รายละเอียดสินค้า</b></a></div>";
        echo "</div></div>";
       ?>
        <div class="modal fade" id="<?php echo "detailE".$row['Number_']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Detail <?php echo $row['Name_']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4 class = "text-dark" style ="text-shadow : 5px 5px 5px"  >
        <?php 
          echo $row['details'];
        ?>
        </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

       
       <?php
      }

      mysqli_close($conn);
        ?>
        
</div>
 </div>
    </div>
  

    <br><br><br><br><br><br>

    <div class ="sportsshow bg-dark">
  <h1 class="labelshow text-white " id ="sportsshow1">สินค้ากีฬา</h1>
  </div>
  
  
  <div class ="product1 bg-dark">
   
  <div class="row row-cols-1 row-cols-md-4 g-5" id="sportsshow">
    
      
   
  <?php



require "connectTest.php";
$connect = $conn;
$sHow =   " SELECT * FROM tb_ WHERE id_ = 0004 ";
$result = mysqli_query($connect, $sHow); 

  while($row = mysqli_fetch_assoc($result))  {
  

    //ไปดูรายละเอียดที่ไฟล์category.php เพื่อแก้ใข
    echo "<div class='col '>";
   
        echo "<div class='card h-100'>";
            echo "<img src='".$row['Image']."' height='170px' widht='200px' class='card-img-top' alt='...'>";
            echo "<div class='wrap-product-box' data-proid='".$row['Number_']."'>";
          echo "<div class='card-body'>";
            echo "<h5 class='card-title text-warning'><b>".$row['Name_']."</b></h5>";
          
          echo "<div class 'card-body'>";
         echo " <div class ='btn-sm btn-warning '><b>ราคา :".$row['Price']." Bath</b></div>";
          echo "<div class ='btn-sm btn-warning'><b>จำนวน : ".$row['Stock_'] ." Pice</b></div>";
           echo "</div>";   
          echo  "<div class='card-footer'>";
          echo "<input  class='btn btn-outline-danger' type ='number' name = ".$row['Name_']." value ='1'>";
          ?>
   
        <p></p>
        


        

         
        
        <button class ="btn btn-info" type = "submit" name ="submit" >
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                  </svg>
                  BUY
  </button>
  <button class="btn btn-danger btn-add-to-cart"  > 
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
</svg>
  </button> 
  <button type="button" class="btn btn-primary btn-sm btn-remove-from-cart">
          <i class="fas fa-cart-arrow-down fa-fw mr-2"></i>
          Remove</button> 
     
       
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
        echo "</div></div>";
        echo "<a class='btn btn-outline-danger btn-sm'  
        data-bs-toggle='modal' data-bs-target= #detailSP".$row['Number_']."><b>รายละเอียดสินค้า</b></a></div>";
        echo "</div></div>";
        ?>
<div class="modal fade" id="<?php echo "detailSP".$row['Number_']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Detail <?php echo $row['Name_']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4 class = "text-dark" style ="text-shadow : 5px 5px 5px"  >
        <?php 
          echo $row['details'];
        ?>
        </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<?php
      }

      mysqli_close($conn);
        ?>
        
</div>
 </div>
    </div>

    
</footer>

<div class ="canvas ">
<div class ="cart">

<div class = " position-absolute top-0 start-100 translate-middle bage  bg-danger text-white active " id ="cartsNumber" data-badge="0">  
    </div> 
<a class="btn btn-primary " data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
       
<svg xmlns = "http://www.w3.org/2000/svg" width ="32" height ="32" fill ="currentColor" class ="bi bi-cart4" viewBox = "0 0 16 16">
      <path d ="M0 2.5A.5.5 0 0 1.5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 01-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>
      </a>

</div>
</div>


</body>
<style>

#studentshow1{
  margin-top: -5%;
    }
#foodsshow1{
margin-top: -14%
  }
#technologyshow1{
    margin-top: -26%
  }
#sportsshow1{
    margin-top: -35%
  }

  
  </style>

<script>

$(".group").ready(function(){
$("#foodsshow").hide(700);
$("#foodsshow1").hide(700);
$("#technologyshow").hide(700);
$("#technologyshow1").hide(700);
$("#sportsshow").hide(700);
$("#sportsshow1").hide(700);
$("#studentshow").hide(700);
$("#studentshow1").hide(700);
});



$("#student").click(function(){
$("#showhome").hide(700);
$("#showhome1").hide(700);
$("#foodsshow").hide(700);
$("#foodsshow1").hide(700);
$("#technologyshow").hide(700);
$("#technologyshow1").hide(700);
$("#sportsshow").hide(700);
$("#sportsshow1").hide(700);
$("#studentshow").show(700);
$("#studentshow1").show(700);
});

$("#foods").click(function(){
  $("#sportsshow").hide(700);
$("#sportsshow1").hide(700);
$("#foodsshow").show(700);
$("#foodsshow1").show(700);
$("#technologyshow").hide(700);
$("#technologyshow1").hide(700);
$("#studentshow").hide(700);
$("#studentshow1").hide(700);
$("#showhome").hide(700);
$("#showhome1").hide(700);
});
$("#technology").click(function(){
  $("#studentshow").hide(700);
$("#studentshow1").hide(700);
$("#foodsshow").hide(700);
$("#foodsshow1").hide(700);
$("#technologyshow").show(700);
$("#technologyshow1").show(700);
$("#sportsshow").hide(700);
$("#sportsshow1").hide(700);
$("#showhome").hide(700);
$("#showhome1").hide(700);
});
$("#sports").click(function(){
  $("#studentshow").hide(700);
$("#studentshow1").hide(700);
$("#foodsshow").hide(700);
$("#foodsshow1").hide(700);
$("#technologyshow").hide(700);
$("#technologyshow1").hide(700);
$("#sportsshow").show(700);
$("#sportsshow1").show(700);
$("#showhome").hide(700);
$("#showhome1").hide(700);

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
<script type="text/javascript">

    
  
var cartnumber = 0;

if(cartnumber < 1){
  cartnumber = null;
 
}

$(function(){
       
    $(document.body).on("click",".btn-add-to-cart",function(){
       
         var nowOffsetX=$(this).parents("div.wrap-product-box").offset().left; // หาตำแหน่งสินค้า แกน x
        var nowOffsetY=$(this).parents("div.wrap-product-box").offset().top; // หาตำแหน่งสินค้า แกน y
        var moveOffsetX=$("div#wrap-my-cart").offset().left; // หาตำแหน่งตะกร้าสินค้า แกน x
        var moveOffsetY=$("div#wrap-my-cart").offset().top; // หาตำแหน่งตะกร้าสินค้า แกน y
    
        $(this).parents("div.wrap-product-box").addClass("added");  
       
        var nowObjPhoduct=$(this).parents("div.wrap-product-box").clone();       
        // จัดตำแปน่งไว้ที่เดิม แต่ซ้อนอยู่ด้านบน
        nowObjPhoduct.css({
            position:"absolute",
            left:nowOffsetX+"px",
            top:nowOffsetY+"px",
            "z-index":"900"
            
        });
       
        
        $(document.body).prepend(nowObjPhoduct); // แทรกลงไปในเว็บ
        // ย้ายตำแหน่ง ไปยังตะกร้าสินค้า
        nowObjPhoduct.animate({
            
            left:moveOffsetX+"px",
            top:moveOffsetY+"px",
            opacity:0
        },500,function(){
            // ฟังก์ชันเมื่อย้ายตำแหน่ง เสร็จต้องการให้ทำอะไร
            // สามารถนำไปประยุกต์ เพิ่มสินค้าในตะกร้าสินค้า ด้วย ajax
            nowObjPhoduct[0].style.cssText = "position: relative;opacity:1";
            cartnumber = cartnumber+1;
            document.getElementById("cartsNumber").innerHTML = cartnumber;   
            let obj = nowObjPhoduct[0];
            $("div#wrap-my-cart").prepend(obj.outerHTML);
            
            obj.remove();
           
        }
        
        );     
        return false;
       
        
    });
  
    $(document.body).on("click",".btn-remove-from-cart",function(){ // เมื่อคลิกที่ปุ่มลบรายการ
     
      let proid = $(this).parents("div.wrap-product-box").data("proid");
      $(this).parents("div.wrap-product-box").fadeOut(function(){
        $("[data-proid='"+proid+"']").removeClass("added");
        cartnumber = cartnumber-1;

        document.getElementById("cartsNumber").innerHTML = cartnumber;  
      },
      ); // ลบรายการที่เลือก
       
    });  
 
});








   
    
    
    </script>
</html>