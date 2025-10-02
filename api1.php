<?php
//tên biên luôn bắt đầu bằng ký tự $
//truy câp vào đối tương, dùng dấu mũi tên ->
//nối chuỗi: dùng dấu +
//hiển thị dữ liệu lên màn hình: echo
//những cái khá => giống java
header('Access-Control-Allow-Origin: *');//cho truy cập full quyền
$s="localhost"; $u="root"; $p=""; $db="a1";//khai bao thong tin ket noi CSDL
$conn = new mysqli($s,$u,$p,$db);//ket noi csdl
$result = $conn->query("select * from mytable");//truy van du lieu
while($row[]=$result->fetch_assoc()){//doc tung dong
    $json = json_encode($row);//chuyen sang json
}
echo '{"products":'.$json.'}';//in ket qua
$conn->close();//dong ket noi