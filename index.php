<?php
    session_start();
?>
<?php
    include "./db_connection.php";
    $conn=Opencon();
?>
<?php
if(!isset($_SESSION['giohang'])){
    $_SESSION['giohang']=[];
}
if(isset($_POST['addcart'])){
    $du_id=$_POST['douong_id'];
    $du_name=$_POST['douong_name'];
    $du_img=$_POST['douong_img'];
    $du_price=$_POST['douong_price'];
    $du_number=$_POST['douong_number'];
    $sp=[$du_id,$du_name,$du_img,$du_price,$du_number];
    $tg=0;
    for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
       if($sp[0]==$_SESSION['giohang'][$i][0]){
            $_SESSION['giohang'][$i][4] += 1;
            $tg=1;
            break;
       }
    }
    if($tg==0){
        $_SESSION['giohang'][]=$sp;
    }
}
?>
<?php
    if(isset($_POST['removecart'])){
        $du_id=$_POST['douong_id'];
        for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
            if($du_id==$_SESSION['giohang'][$i][0]){
                unset($_SESSION['giohang'][$i]);
                $_SESSION['giohang']=array_values($_SESSION['giohang']);
                break;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Praise&display=swap" rel="stylesheet">
    <script src="./js/all.min.js"></script>
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/chung.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="./css/product__detail.css">
    <link rel="stylesheet" href="./css/cart.css">
    <title>Trà chanh bụi phố</title>
</head>

<body>
    <?php
        include "./inc/header__chung.php";
    ?>
    <div id="main">
        <?php
            include "./url.php";
            // include "./inc/test.php";
            include "./inc/footer.html";
        ?>
    </div>
    <a href="#header" id="btn__scroll-header">
        <i class="fas fa-chevron-up"></i>
    </a>
</body>

</html>
<?php
    CloseCon($conn);
?>