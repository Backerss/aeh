<?php
session_start();
include "include/include_db_oo.php";

$email = $_POST["email"];
$password = $_POST["password"];

$sql_mail = "SELECT * 
                FROM users
                WHERE users_mail = '$email'";

$result_mail = get_data($conn,$sql_mail);

if(count($result_mail)> 0){

foreach ($result_mail as $row){
    $row_password = $row["users_password"];

}  
    if(password_verify($password, $row_password))
    {
            $_SESSION["users_id"] = $row["users_id"];
            echo"เข้าสู่ระบบสำเร็จ";
            header("Location: index.php");
        } 
    else{ 
            echo "กรุณากรอกข้อมูลให้ถูกต้อง";
    }
}
else{
    echo "กรุณาตรวจสอบอีเมลของท่าน";
    
}






?>