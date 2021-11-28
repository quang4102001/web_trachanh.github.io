<?php
    if(isset($_GET['go'])){
        $str=$_GET['go'];
        switch($str){
            case 'home':
                include "./inc/home.html";
                break;
            case 'cart':
                include "./inc/cart.html";
                break;
            case 'login':
                include "./inc/login.html";
                break;
            case 'register':
                include "./inc/register.html";
                break;
            case 'product__detail':
                include "./inc/product__detail.html";
                break;
            default:
                include "./inc/home.html";
                break;
        }
    }else{
        include "./inc/home.html";
    }
?>