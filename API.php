<?php
//cho phep truy cap full control
header('Access-Control-Alow-Origin:*');
//khai bao thong tin server
$s="localhost"; $u="root"; $p=""; $db="a1";
//thuc hien ket noi
$conn= new mysqli($s,$u,$p,$db);
//truy van du lieu
$result = $conn->query("select * from sanpham");
//doc ket qua
while($row[]=$result->fetch_assoc())//line.readline
{
    $json=json_encode($row);//chuyen sang json
}
echo '{"products":'.$json.'}'; //system.out.print
$conn->close();//dong ket noi
//de chay API nay thi can cai XAMPP
//copy file nay vao thu muc: C:\xampp\htdocs
//goi: http://localhost/API.php
?>