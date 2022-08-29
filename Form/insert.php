<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("header.php")
    ?>
<center><?php
include("config.inc.php");

$firstname = $_POST['txt_Firstname'];
$name = $_POST['name'];
$lastname = $_POST['lastName'];
$sex = $_POST['gender'];
$date = $_POST['txt_birthdate'];
$address = $_POST['txt_address'];
$tell = $_POST['call'];
$email = $_POST['email'];
$sql = "INSERT INTO tbl_member (id, firstname, name, lastname, sex, birthday, address, tel, email) VALUES ('', '$firstname','$name','$lastname','$sex','$date','$address','$tell','$email')";

    if (mysqli_query($conn, $sql)) 
    {
        echo "เพิ่มข้อมูลสำเร็จ";
    }else
    {
        echo "เพิ่มข้อมูลไม่สำเร็จ";
    }
    $conn -> close();
/*
echo $firstname;
echo $name;"       ";
echo "&nbsp;&nbsp;&nbsp;",$lastname;
echo "<br/>";
echo "เพศ =:",$sex;
echo "<br/>";
echo "วันเกิด =",$date;
echo "<br/>";
echo "เบอร์ =:",$tell;
echo "<br/>";
echo "ที่อยู่ =",$address;
echo "<br/>";
echo "อีเมล์ =:",$email;
echo "<br/>";
*/
?></center>

<?php
  include("footer.php")
  ?>
</body>
</html>


