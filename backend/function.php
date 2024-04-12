<?php

     function show_data($sql){
        global $conn;
      
   return mysqli_query($conn, $sql); 
}
function save_data($sql){
   global $conn;
   // Thực hiện truy vấn SQL
   $result = mysqli_query($conn, $sql);
   // Kiểm tra kết quả truy vấn
   if ($result) {
       $data = array();
       // Lặp qua từng hàng và lưu vào mảng
       while ($row = mysqli_fetch_assoc($result)) {
           $data[] = $row;
       }
       // Trả về mảng chứa kết quả
       return $data;
   } else {
       // Trả về false nếu truy vấn thất bại
       return false;
   }
}



   
    ?>