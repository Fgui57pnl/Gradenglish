<?php

     function show_data($sql){
        global $conn;
      
   return mysqli_query($conn, $sql); 
}
function per($sql){
   
}
function admin_check() {
   // Kiểm tra xem phiên làm việc đã được bắt đầu chưa
   if (session_status() == PHP_SESSION_NONE) {
       session_start();
   }

   // Kiểm tra xem người dùng đã đăng nhập chưa và vai trò của họ
   if ( trim($_SESSION['role']) != 'Admin') {
       // Nếu không phải là admin hoặc chưa đăng nhập, chuyển hướng đến trang đăng nhập và thông báo
       echo "<script>alert('Bạn không có quyền truy cập vào trang này!');</script>";
       session_destroy();
       echo "<script>window.location.assign('http://localhost/gradenglish/public/login.php');</script>";
       exit; // Kết thúc luồng thực thi sau khi chuyển hướng
   }
}
function getSimpleQuery($sql_query) {
    global $conn;
    $result = $conn->query($sql_query);
    if ($result === false) {
        // Query failed
        return false;
    } else {
        // Fetch the first row as an associative array
        return $result->fetch_assoc();
    }
}




   
    ?>