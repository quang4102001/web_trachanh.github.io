<div class="grid wide">
    <div class="row">
        <div class="col l-12 page">
            <a href="?go=home" class="page__link">Trang chủ</a>
            <i class="page-icon fas fa-chevron-right"></i>
            <a href="?go=home" class="page__link">Bụi phố "HOT"</a>
            <i class="page-icon fas fa-chevron-right"></i>
            <p class="page__name">Trà chanh truyền thống</p>
        </div>
        <div class="col l-12">
            <hr>
        </div>
        <div class="col l-12">
            <div class="product__detail">
                <form action="?go=cart" method="POST">
                    <div class="row">
                        <?php
                            $sql = "SELECT * FROM douong WHERE douong_id ='".$_GET['douong_id']."' ";
                            $query=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($query)==0){
                                echo"
                                    <p class='no-product'>Danh mục đang cập nhật thêm sản phẩm</p>
                                ";
                            }else{
                                while($row=mysqli_fetch_array($query)){
                                    echo"
                                        <div class='col l-6'>
                                            <div class='product__detail-img'>
                                                <img src='".$row['douong_img']."' alt='".$row['douong_name']."'>
                                            </div>
                                        </div>
                                        <div class='col l-6'>
                                            <p class='product__detail-heading'>
                                                ".$row['douong_name']."
                                            </p>
                                            <p class='product__detail-credit'>
                                                Hãng: Đang cập nhật
                                            </p>
                                            <div class='product__detail-price_amount'>
                                                <p class='product__detail-price'>".$row['douong_price']." vnđ</p>
                                                <p class='product__detail-amount'>Còn hàng</p>
                                            </div>
                                            <p class='product__detail-description'>Mô tả đang cập nhật</p>
                                            <hr>
                                            <div class='form'>
                                                <div class='form__box'>
                                                    <label for='number' class='form__label'>Số lượng:</label>
                                                    <div>
                                                        <a class='btn-num btn-num--apart btn-num--apart-cart'><i class='btn-num--apart-icon fas fa-minus'></i></a>
                                                        <input type='text' name='input_number' id='number' value='1' class='form__input form__input-num form__input-product__detail'>
                                                        <input type='hidden' name='du_id' value='".$row['douong_id']."'>
                                                        <input type='hidden' name='du_name' value='".$row['douong_name']."'>
                                                        <input type='hidden' name='du_img' value='".$row['douong_img']."'>
                                                        <input type='hidden' name='du_price' value='".$row['douong_price']."'>
                                                        <a class='btn-num btn-num--add btn-num--add-cart'><i class='btn-num--add-icon fas fa-plus'></i></a>
                                                    </div>
                                                </div>
                                                <button name='ok_product__detail' class='btn btn--buy'>Mua hàng</button>
                                            </div>
                                        </div>
                                    ";
                                }
                            }
                        ?>
                    </div>
                </form>
            </div>
        </div>
        <div class="col l-12">
            <div class="nav-info">
                <input type="radio" name="nav-info__radio" class="nav-info__radio" id="nav-info__radio-1" checked>
                <input type="radio" name="nav-info__radio" class="nav-info__radio" id="nav-info__radio-2">
                <input type="radio" name="nav-info__radio" class="nav-info__radio" id="nav-info__radio-3">
                <div class="label__box">
                    <label for="nav-info__radio-1" class="nav-info__label nav-info__label-1">Mô tả</label>
                    <label for="nav-info__radio-2" class="nav-info__label nav-info__label-2">Hình thức thanh toán</label>
                    <label for="nav-info__radio-3" class="nav-info__label nav-info__label-3">Liên hệ</label>
                </div>
                <div class="info__box info__box-1">
                    Thông tin sản phẩm đang được cập nhật
                </div>
                <div class="info__box info__box-2">
                    Các nội dung mua hàng đang được cập nhật
                </div>
                <div class="info__box info__box-3">
                    Các nội dung liên hệ đang được cập nhật
                </div>
            </div>
        </div>
        <div class="col l-12">
            <div class="section__heading">
                <img class="section__heading-img-top" src="./img/icons-title-top.webp" alt="img-top">
                <h2 class="section__heading-text">
                    <a href="" class="section__heading-text-link">
                        Sản phẩm
                        <br>
                        <span class="section__heading-text-title">
                            Liên quan
                        </span>
                    </a>
                </h2>
                <img class="section__heading-img-bottom" src="./img/icons-title-bottom.webp" alt="img-bottom">
            </div>
        </div>
        <div class="col l-3">
            <div class="product-item">
                <div class="product-item__img">
                    <img src="./img/tra-chanh-truyen-thong.webp" alt="product-item">
                    <div class="product-item__img-background"></div>
                    <a href="" class="product-item__img-btn-search">
                        <i class="fas fa-search"></i>
                    </a>
                    <a class="product-item__img-btn-buy"><i class="product-item__img-btn-buy-icon fas fa-shopping-basket"></i>Mua hàng</a>
                </div>
                <a href="#" class="product-item__name">Trà chanh truyền thống</a>
                <div class="product-item__price">10000 vnđ</div>
            </div>
        </div>
        <div class="col l-3">
            <div class="product-item">
                <div class="product-item__img">
                    <img src="./img/tra-chanh-truyen-thong.webp" alt="product-item">
                    <div class="product-item__img-background"></div>
                    <a href="" class="product-item__img-btn-search">
                        <i class="fas fa-search"></i>
                    </a>
                    <a class="product-item__img-btn-buy"><i class="product-item__img-btn-buy-icon fas fa-shopping-basket"></i>Mua hàng</a>
                </div>
                <a href="#" class="product-item__name">Trà chanh truyền thống</a>
                <div class="product-item__price">10000 vnđ</div>
            </div>
        </div>
        <div class="col l-3">
            <div class="product-item">
                <div class="product-item__img">
                    <img src="./img/tra-chanh-truyen-thong.webp" alt="product-item">
                    <div class="product-item__img-background"></div>
                    <a href="" class="product-item__img-btn-search">
                        <i class="fas fa-search"></i>
                    </a>
                    <a class="product-item__img-btn-buy"><i class="product-item__img-btn-buy-icon fas fa-shopping-basket"></i>Mua hàng</a>
                </div>
                <a href="#" class="product-item__name">Trà chanh truyền thống</a>
                <div class="product-item__price">10000 vnđ</div>
            </div>
        </div>
        <div class="col l-3">
            <div class="product-item">
                <div class="product-item__img">
                    <img src="./img/tra-chanh-truyen-thong.webp" alt="product-item">
                    <div class="product-item__img-background"></div>
                    <a href="" class="product-item__img-btn-search">
                        <i class="fas fa-search"></i>
                    </a>
                    <a class="product-item__img-btn-buy"><i class="product-item__img-btn-buy-icon fas fa-shopping-basket"></i>Mua hàng</a>
                </div>
                <a href="#" class="product-item__name">Trà chanh truyền thống</a>
                <div class="product-item__price">10000 vnđ</div>
            </div>
        </div>
    </div>
</div>
<script src="./js/product__detail.js"></script>