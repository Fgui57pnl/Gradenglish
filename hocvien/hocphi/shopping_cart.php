<?php 
require_once '../../backend/config.php';
require_once '../../backend/session_check.php';

if(isset($_POST['add_cart'])){
    $id = $_GET['id']; // This is vulnerable to SQL injection, consider sanitizing it
    $sql = "SELECT * FROM `khoa_hoc` WHERE id='$id' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row){
        $new_product = array(
        
            'course_name' => $row['Ten_Khoa_Hoc'],
            'lesson' => $row['So_tiet'],
            'fee' => $row['Hoc_Phi'],
            'start_date' => $row['Ngay_BD'],// You might want to consider the correct key here
            'end_date' => $row['Ngay_KT'],
        
             
        );

        if(isset($_SESSION['cart'])){
            // Check if the item already exists in the cart
            $item_exists = false;
            foreach($_SESSION['cart'] as $cart_item){
                if($cart_item['id'] == $id){
                    $item_exists = true;
                    break;
                }
            }

            if(!$item_exists){
                // Add new product to cart
                $_SESSION['cart'][] = $new_product;
            }
        } else {
            // If cart is empty, add new product directly
            $_SESSION['cart'][] = $new_product;
        }
        
        header('location: ' . STU_URL . 'hocphi');
        exit(); // Make sure to exit after header redirect
    }
}

// If something goes wrong or the product doesn't exist, redirect back to the previous page
//header('location: ' . $_SERVER['HTTP_REFERER']);
//exit();
?>
