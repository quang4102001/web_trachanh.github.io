<?php
    function total__price_cart(){
        $total=0;
        for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
            $total+=$_SESSION['giohang'][$i][3]*$_SESSION['giohang'][$i][4];
        }
        echo"$total";
    }
?>
<?php
    function showCart(){
        if(!isset($_SESSION['giohang']) || sizeof($_SESSION['giohang'])<1 || !is_array($_SESSION['giohang'])){
            echo"
                <div class='header__cart-box header__cart-box--no-item'>
                    <span class='header__cart-box__text-no-item'>Không có sản phẩm nào cả</span>
                </div>
            ";
        }else {
            echo"
                <div class='header__cart-box header__cart-box--have-item'>
                    <div class='header__cart-box--have-item-box'>
                        <div class='header__cart-box__heading'>Giỏ hàng:</div>
                        <ul class='header__cart-box__list'>";
                            for( $i=0; $i < sizeof($_SESSION['giohang']);$i++){
                                echo"
                                    <li>
                                        <a href='?go=cart' class='header__cart-box__item'>
                                            <img src='".$_SESSION['giohang'][$i][2]."' alt='".$_SESSION['giohang'][$i][1]."' class='header__cart-box__item-img'>
                                            <div>
                                                <p class='header__cart-box__item-name'>".$_SESSION['giohang'][$i][1]."</p>
                                                <p class='header__cart-box__item-price'>Giá: ".$_SESSION['giohang'][$i][3]." vnđ</p>
                                                <span class='header__cart-box__item-number'>Số lượng: ".$_SESSION['giohang'][$i][4]."</span>
                                            </div>
                                        </a>
                                        <span>
                                            <form action='#header' method='POST'>
                                                <i class='table-product__container-item-icon fas fa-times'></i>
                                                <input type='submit' name='removecart' value=''>
                                                <input type='hidden' name='douong_id' value='".$_SESSION['giohang'][$i][0]."'>
                                            </form>
                                        </span>
                                    </li>
                                ";
                            }
                        echo"
                        </ul>
                        <div class='header__cart-box__footer'>
                            <div class='header__cart-box__footer-total-box'>
                                <span class='header__cart-box__footer-total-text'>Tổng cộng:</span>
                                <span class='header__cart-box__footer-total-number'>
                                ";
                                total__price_cart();
                                echo"
                                vnđ</span>
                            </div>
                            <div class='header__cart-box__footer-box-btn'>
                                <a href='?go=cart' class='btn btn--primary'>
                                Tiến hành thanh toán
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
    }
?>
<header id="header">
    <div class="header__contact-account">
        <div class="grid wide">
            <div class="row header__contact-account-box">
                <ul class="header__contact-list">
                    <li><a href="tel:0961701540" class="header__contact-item"><i class="header__contact-item-icon fas fa-phone-alt"></i>0961701540</a></li>
                    <li><a href="mailto:mdc011646069@gmail.com" class="header__contact-item"><i class="header__contact-item-icon far fa-envelope"></i>mdc011646069@gmail.com</a></li>
                </ul>
                <ul class="header__account-list">
                    <li>
                        <a href="?go=login" class="header__account-item header__account-item--login">
                            <i class="header__account-item-icon fas fa-unlock"></i> Đăng nhập
                        </a>
                    </li>
                    <li>
                        <a href="?go=register" class="header__account-item header__account-item--register">
                            <i class="header__account-item-icon fas fa-user"></i> Đăng kí
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="grid wide">
        <div class="row header__logo-box">
            <div class="col l-3">
                <div class="header__logo">
                    <a href="?go=home"><img src="./img/logo.png" alt="logo-trachanh" class="header__logo-img"></a>
                </div>
            </div>
            <div class="col l-9">
                <div class="header__logo-list">
                    <div class="row">
                        <div class="col l-4">
                            <div class="header__logo-item">
                                <div class="header__logo-item__icon">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                                <div class="header__logo-item__text-box">
                                    <span class="header__logo-item__text-heading">Giao hàng miễn phí!</span>
                                    <span class="header__logo-item__text-title">Cho hóa đơn trên X đồng</span>
                                </div>
                            </div>
                        </div>
                        <div class="col l-4">
                            <div class="header__logo-item">
                                <div class="header__logo-item__icon">
                                    <i class="fas fa-recycle"></i>
                                </div>
                                <div class="header__logo-item__text-box">
                                    <span class="header__logo-item__text-heading">Nguyên liệu "xanh"!</span>
                                    <span class="header__logo-item__text-title">Thân thiện với môi trường</span>
                                </div>
                            </div>
                        </div>
                        <div class="col l-4">
                            <div class="header__logo-item">
                                <div class="header__logo-item__icon">
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="header__logo-item__text-box">
                                    <span class="header__logo-item__text-heading">Sản phẩm phong phú!</span>
                                    <span class="header__logo-item__text-title">Giải nhiệt cuộc sống</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__nav-cart">
        <div class="grid wide">
            <div class="row header__nav-cart-box">
                <ul class="header__nav-list">
                    <li class="header__nav--active"><a href="?go=home" class="header__nav-item">Trang chủ</a></li>
                    <li><a href="?go=home" class="header__nav-item">Giới thiệu</a></li>
                    <li><a href="?go=home" class="header__nav-item">Sản phẩm</a></li>
                    <li><a href="?go=home" class="header__nav-item">Tin tức</a></li>
                    <li><a href="?go=home" class="header__nav-item">Liên hệ</a></li>
                </ul>
                <div class="header__cart">
                    <a href="?go=cart" class="header__cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="header__cart-icon_count-item">
                            <?php
                                echo sizeof($_SESSION['giohang']);
                            ?>
                        </span>
                    </a>
                    <!-- header__cart-box--no-item -->
                    <!-- header__cart-box--have-item -->
                    <?php
                        showCart();
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>