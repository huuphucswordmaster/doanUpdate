<?php
 $username=$_POST['username'];
 $password=$_POST['password'];

 $conn = new mysqli('localhost','root','','phuc-store-data');
 $sql="SELECT *from tbl_users where username = '$username'";
 $result = $conn->query($sql)->fetch_assoc();
 if($result['password']==$password){
    header("Location: gioithieu.html");
 } else {
    echo "Sai tên đăng nhập hoặc mật khẩu!";
    echo "<meta http-equiv='refresh' content='2;url=index.php'>";
}
?>
