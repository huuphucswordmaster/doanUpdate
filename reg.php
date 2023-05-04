<?php
require 'db/conect.php';
if(isset($_POST['btn-reg'])){
    $fullname = $_POST['fullname']; 
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    if(!empty($username)&&!empty($fullname)&&!empty($email)&&!empty($phone)&&!empty($password)){
    $sql = "INSERT INTO `tbl_users` (`fullname`,`email`,`username`,`phone`,`password`) VALUE('$fullname','$email','$username','$phone','$password')";
    if($conn->query($sql)===TRUE){
        echo "Lưu dữ liệu thành công";
    }
    else{
        echo "lỗi {$sql}".$conn->error;
    }
    }
    else{
        echo "Bạn cần nhập đầy đủ trước khi đăng ký";
    }
}

?>
