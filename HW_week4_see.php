<meta charset="UTF-8">
<?php


$name = $_POST["name"];
$birth = $_POST["birth"];
$gender = $_POST["gender"];
$id = $_POST["id"];
$phone = $_POST["phone"];
$address1 =  $_POST["address1"];
$address2 =  $_POST["address2"];

echo "姓名：".$name.'<br>';
echo "生日：".$birth.'<br>';
echo "性別：".$gender.'<br>';
echo "身分證：".$id.'<br>';
echo "電話：".$phone.'<br>';
echo "地址：".$address1;
echo $address2.'<br>';
