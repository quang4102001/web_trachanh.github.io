<?php
    if(isset($_GET['go'])){
        $str=$_GET['go'];
        switch($str){
            case 'home':
                include "./inc/home.php";
                break;
            case 'cart':
                include "./inc/cart.php";
                break;
            case 'login':
                include "./inc/login.html";
                break;
            case 'register':
                include "./inc/register.html";
                break;
            case 'product__detail':
                include "./inc/product__detail.php";
                break;
            case 'bill':
                include "./inc/bill.php";
                break;
            default:
                include "./inc/home.html";
                break;
        }
    }else{
        include "./inc/home.php";
    }
?>