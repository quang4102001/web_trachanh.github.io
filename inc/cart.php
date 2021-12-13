<?php
    if(isset($_POST['btn_add'])){
        $tg=0;
        $du_id=$_POST['cart_id'];
        $du_num=$_POST['cart_number'];
        for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
            if($du_id==$_SESSION['giohang'][$i][0]){
                $_SESSION['giohang'][$i][4]=$du_num;
                $tg=1;
                break;
            }
        }
        if($tg==0){
            echo"
            <script>alert('Something wrong!!!')</script>
            ";
        }
    }
?>
<?php
    if(isset($_POST['btn_apart'])){
        $tg=0;
        $du_id=$_POST['cart_id'];
        $du_num=$_POST['cart_number'];
        for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
            if($du_id==$_SESSION['giohang'][$i][0]){
                $_SESSION['giohang'][$i][4]=$du_num;
                $tg=1;
                break;
            }
        }
        if($tg==0){
            echo"
            <script>alert('Something wrong!!!')</script>
            ";
        }
    }
?>
<?php
    if(isset($_POST['ok_product__detail'])){
        $du_id = $_POST['du_id'];
        $du_name = $_POST['du_name'];
        $du_img = $_POST['du_img'];
        $du_price = $_POST['du_price'];
        $du_number = $_POST['input_number'];
        $sp=[$du_id,$du_name,$du_img,$du_price,$du_number];
        $tg=0;
        for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
            if($du_id==$_SESSION['giohang'][$i][0]){
                $tg=1;
                $_SESSION['giohang'][$i][4]+= $du_number;
            }
        }
        if($tg==0){
            $_SESSION['giohang'][]=$sp;
        }
    }
?>
<div class="grid wide">
    <form action="?go=bill" method='POST'>
        <div class="row">
            <div class="col l-12 page">
                <a href="" class="page__link">Trang chủ</a>
                <i class="page-icon fas fa-chevron-right"></i>
                <p class="page__name">Giỏ hàng</p>
            </div>
            <div class="col l-12">
                <p class="register__heading">Giỏ hàng</p>
            </div>
            <div class="col l-12">
                <?php
                    if(!isset($_SESSION['giohang']) || sizeof($_SESSION['giohang']) == 0 || !is_array($_SESSION['giohang'])){
                        echo"
                            <span class='table-product__container-list-no-cart'>Chưa có sản phẩm nào cả </span>
                        ";
                    }else{
                        echo"
                            <div class='table-product__heading-list'>
                                <div class='row no-gutters'>
                                    <div class='col l-2'>
                                        <div class='table-product__heading-item'>
                                            Ảnh sản phẩm
                                        </div>
                                    </div>
                                    <div class='col l-3'>
                                        <div class='table-product__heading-item'>
                                            Tên sản phẩm
                                        </div>
                                    </div>
                                    <div class='col l-2'>
                                        <div class='table-product__heading-item'>
                                            Đơn giá
                                        </div>
                                    </div>
                                    <div class='col l-2'>
                                        <div class='table-product__heading-item'>
                                            Số lượng
                                        </div>
                                    </div>
                                    <div class='col l-2'>
                                        <div class='table-product__heading-item'>
                                            Thành tiền
                                        </div>
                                    </div>
                                    <div class='col l-1'>
                                        <div class='table-product__heading-item'>
                                            Xóa
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='table-product__container-list'>
                        ";
                        for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
                            echo"
                                <div class='row no-gutters'>
                                    <div class='col l-2'>
                                        <div class='table-product__container-item'>
                                            <img src='".$_SESSION['giohang'][$i][2]."'>
                                        </div>
                                    </div>
                                    <div class='col l-3'>
                                        <div class='table-product__container-item'>
                                            <span>".$_SESSION['giohang'][$i][1]."</span>
                                        </div>
                                    </div>
                                    <div class='col l-2'>
                                        <div class='table-product__container-item'>
                                            <span class='table-product__container-item-price'>".$_SESSION['giohang'][$i][3]." vnđ</span>
                                        </div>
                                    </div>
                                    <div class='col l-2'>
                                        <div class='table-product__container-item'>
                                            <form action='#header' method='POST' class='form__cart'>
                                                <button name='btn_apart' class='btn-num btn-num--apart btn-num--apart-cart'><i class='btn-num--apart-icon fas fa-minus'></i></button>
                                                <input type='text' name='cart_number' value='".$_SESSION['giohang'][$i][4]."' class='form__input form__input-num form__input-cart'>
                                                <input type='hidden' name='cart_id' value='".$_SESSION['giohang'][$i][0]."'>
                                                <button name='btn_add' class='btn-num btn-num--add btn-num--add-cart'><i class='btn-num--add-icon fas fa-plus'></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class='col l-2'>
                                        <div class='table-product__container-item'>
                                            <span class='table-product__container-item-total'>0 vnđ</span>
                                        </div>
                                    </div>
                                    <div class='col l-1'>
                                        <div class='table-product__container-item'>
                                            <form action='#header' method='POST' class='table-product__container-item-removecart'>
                                                <i class='table-product__container-item-icon fas fa-times'></i>
                                                <input type='submit' name='removecart' value=''>
                                                <input type='hidden' name='douong_id' value='".$_SESSION['giohang'][$i][0]."'>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
                        echo"
                            </div>
                        ";
                    }
                ?>
            </div>
            <div class="col l-12">
                <div class="cart__total-box">
                    <span class="cart__total-label">Tổng cộng:</span>
                    <span class="cart__total-price"></span>
                    <input type='hidden' name='total' id='input__total_cart'>
                </div>
            </div>
            <div class="col l-12">
                <a href="?go=home#menu" class="btn btn--buy-more">Mua thêm</a>
            </div>
            <div class="col l-12">
                <hr>
            </div>
            <div class="col l-8 l-o-2">
                <p class="register__heading">Thông tin của bạn</p>
                <div class="row">
                    <div class="col l-12 form__box">
                        <label for="user_name">Họ và Tên:</label>
                        <input class='form__input' type="text" name="user_name" id="user_name">
                    </div>
                    <div class="col l-12 form__box">
                        <label for="user_address">Địa chỉ:</label>
                        <input class='form__input' type="text" name="user_address" id="user_address">
                    </div>
                    <div class="col l-12 form__box">
                        <label for="user_numberphone">Số điện thoại:</label>
                        <input class='form__input' type="text" name="user_numberphone" id="user_numberphone">
                    </div>
                    <div class="col l-12 form__box">
                        <label for="user_stk">Số tài khoản:</label>
                        <input class='form__input' type="text" name="user_stk" id="user_stk">
                    </div>
                    <div class="col l-12 form__box">
                        <label for="user_bank">Tên ngân hàng:</label>
                        <input class='form__input' type="text" name="user_bank" id="user_bank">
                    </div>
                </div>
            </div>
            <div class="col l-12">
                <div class="btn__box">
                    <span></span>
                    <button name='add_bill' class="btn btn--green">Thanh toán</button>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="./js/cart.js"></script>