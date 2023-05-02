<html>
<!DOCTYPE html>

<head>
<meta charset="UTF8">
<link a href ="bootstrap-5.1.3/css/bootstrap.css" rel="stylesheet"> 
<link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src ="bootstrap-5.1.3/js/bootstrap.js"></Script>
<script src ="bootstrap-5.1.3/js/bootstrap.bundle.js"></script>
<script src = "https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>
<form action ="<?=$_SERVER['PHP_SELF'];?>" method = "post" class="d-flex">

<input class="form-control me-1 align-content-between w-50" type="text" name="search" placeholder="Search" aria-label="Search">


<button class="btn btn-outline-danger" type="submit"><b>Search</b></button>
</form>
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
isset($_POST['search']) ? $search = $_POST['search'] : $search = "";
if(!empty($search)){
    $dd = mysqli_connect("localhost","root","","producttion");
    mysqli_query($dd , "SET NAME UTF8");
    $sqll = "SELECT * FROM tb_ WHERE Name_ LIKE'%".$search."%'";
    $q = mysqli_query($dd ,$sqll);   
  while($Re = mysqli_fetch_assoc($q)){
    echo "<tbody>";
    echo "<tr class ='table-info'>";
    echo "<td>".$Re['id_']."</td>";
    echo "<td>".$Re['Number_']."</td>";
       echo "<td>".$Re['Type_']."</td>";
       echo "<td>".$Re['Name_']."</td>";
       echo "<td>".$Re['Price']."</td>";
       echo "<td>".$Re['Stock_']."</td>";
       echo "<td>".$Re['details']."</td>";
       echo "<td><img src='".$Re['Image']."' width='100px' height='100px'></td>";
       echo "<td>".$Re['Date']."</td>";
     
   echo "</td></tr>";
  }          
  
 
}




?>
</table>
<a href="e-com.php"><h1>กลับหน้าเดิม</h1></a>
</body>
</html>