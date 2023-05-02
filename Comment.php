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

<form method = "post" action ="Comment2.php">
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
            </tr>  </tr>
         </table>
    <p class ="text-dark"><b>Comment/แสดงความคิดเห็น:</p></td>
    <textarea  class =" bg-danger border-3 " name = "comment" rows = "6" cols = "100"></textarea>
    <br>
    <input class ="btn-lg btn-primary" type = "submit" name = "submit" value = "ตกลง" >
    <input class ="btn btn-danger" type="reset" value ="ยกเลิก">
</form>
<a href="Web.php"><h1>กลับหน้าเดิม</h1></a>


</body>
</html>