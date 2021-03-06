<section id="slider">
    <button class="slider__btn slider__btn--left btn" onclick="truSlider()">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button class="slider__btn slider__btn--right btn" onclick="congSlider()">
        <i class="fas fa-chevron-right"></i>
    </button>
    <input type="radio" name="slider__radio" class="slider__radio" id="slider__radio-1" checked>
    <input type="radio" name="slider__radio" class="slider__radio" id="slider__radio-2">
    <input type="radio" name="slider__radio" class="slider__radio" id="slider__radio-3">
    <img src="./img/slider_1.jpg" alt="slider__img1" class="slider__img slider__img-1">
    <img src="./img/slider_2.jpg" alt="slider__img2" class="slider__img slider__img-2">
    <img src="./img/slider_3.jpg" alt="slider__img3" class="slider__img slider__img-3">
    <div class="slider__label-list">
        <label for="slider__radio-1" class="slider__label-item slider__label-item-1"></label>
        <label for="slider__radio-2" class="slider__label-item slider__label-item-2"></label>
        <label for="slider__radio-3" class="slider__label-item slider__label-item-3"></label>
    </div>
</section>
<script>
    var countSliderID = 1

    function congSlider() {
        document.getElementById('slider__radio-' + countSliderID).checked = true
        countSliderID++
        if (countSliderID > 3) {
            countSliderID = 1
        }
    }

    function truSlider() {
        document.getElementById('slider__radio-' + countSliderID).checked = true
        countSliderID--
        if (countSliderID < 1) {
            countSliderID = 3
        }
    }
    setInterval(function() {
        congSlider()
    }, 8000);
</script>
<section id="banner">
    <div class="grid wide">
        <div class="row no-gutters row-banner">
            <div class="col l-4">
                <div class="banner__img">
                    <img src="./img/banner1.webp" alt="" srcset="">
                    <span class="banner__line"></span>
                    <span class="banner__background"></span>
                </div>
            </div>
            <div class="col l-4">
                <div class="banner__img">
                    <img src="./img/banner2.webp" alt="" srcset="">
                    <span class="banner__line"></span>
                    <span class="banner__background"></span>
                </div>
            </div>
            <div class="col l-4">
                <div class="banner__img">
                    <img src="./img/banner3.webp" alt="" srcset="">
                    <span class="banner__line"></span>
                    <span class="banner__background"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="menu">
    <div class="grid wide">
        <div class="row">
            <div class="col l-12">
                <div class="section__heading">
                    <img class="section__heading-img-top" src="./img/icons-title-top.webp" alt="img-top">
                    <h2 class="section__heading-text">
                        <a href="" class="section__heading-text-link">
                            Menu
                            <br>
                            <span class="section__heading-text-title">
                                B???i Ph???
                            </span>
                        </a>
                    </h2>
                    <img class="section__heading-img-bottom" src="./img/icons-title-bottom.webp" alt="img-bottom">
                </div>
            </div>
            <div class="col l-12">
                <input type="radio" name="menu__radio" class="menu__radio" id="menu__radio-1" checked>
                <input type="radio" name="menu__radio" class="menu__radio" id="menu__radio-2">
                <input type="radio" name="menu__radio" class="menu__radio" id="menu__radio-3">
                <div class="menu__label-box">
                    <label for="menu__radio-1" class="menu__label menu__label-1">B???i ph??? HOT</label>
                    <label for="menu__radio-2" class="menu__label menu__label-2">B???i ph??? LOVE</label>
                    <label for="menu__radio-3" class="menu__label menu__label-3">B???i ph??? ??n v???t</label>
                </div>
                <div class="list__hot">
                    <div class="row">
                        <?php
                        $sql="SELECT * FROM douong WHERE group_id='buiphohot'";
                        $query=mysqli_query($con, $sql);
                        if(mysqli_num_rows($query)==0){
                            echo"
                                <p class='no-product'>Danh m???c ??ang c???p nh???t th??m s???n ph???m</p>
                            ";
                        }else{
                            while($row=mysqli_fetch_array($query)){
                                echo"
                                    <div class='col l-3'>
                                        <div class='product-item'>
                                            <div class='product-item__img'>
                                                <img src=".$row['douong_img']." alt=".$row['douong_name'].">
                                                <div class='product-item__img-background'></div>
                                                <a href='?go=product__detail&douong_id=".$row['douong_id']."' class='product-item__img-btn-search'>
                                                    <i class='fas fa-search'></i>
                                                </a>
                                                <a class='product-item__img-btn-buy'><i class='product-item__img-btn-buy-icon fas fa-shopping-basket'></i>Mua h??ng</a>
                                            </div>
                                            <a href='?go=product__detail&douong_id=".$row['douong_id']."' class='product-item__name'>".$row['douong_name']."</a>
                                            <div class='product-item__price'>".$row['douong_price']."</div>
                                        </div>
                                    </div>
                                ";
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="list__love">
                    <div class="row">
                    <?php
                        $sql="SELECT * FROM douong WHERE group_id='buipholove'";
                        $query=mysqli_query($con, $sql);
                        if(mysqli_num_rows($query)==0){
                            echo"
                                <p class='no-product'>Danh m???c ??ang c???p nh???t th??m s???n ph???m</p>
                            ";
                        }else{
                            while($row=mysqli_fetch_array($query)){
                                echo"
                                    <div class='col l-3'>
                                        <div class='product-item'>
                                            <div class='product-item__img'>
                                                <img src=".$row['douong_img']." alt=".$row['douong_name'].">
                                                <div class='product-item__img-background'></div>
                                                <a href='?go=product__detail&douong_id=".$row['douong_id']."' class='product-item__img-btn-search'>
                                                    <i class='fas fa-search'></i>
                                                </a>
                                                <a class='product-item__img-btn-buy'><i class='product-item__img-btn-buy-icon fas fa-shopping-basket'></i>Mua h??ng</a>
                                            </div>
                                            <a href='?go=product__detail&douong_id=".$row['douong_id']."' class='product-item__name'>".$row['douong_name']."</a>
                                            <div class='product-item__price'>".$row['douong_price']."</div>
                                        </div>
                                    </div>
                                ";
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="list__anvat">
                    <div class="row">
                    <?php
                        $sql="SELECT * FROM douong WHERE group_id='doanvat'";
                        $query=mysqli_query($con, $sql);
                        if(mysqli_num_rows($query)==0){
                            echo"
                                <p class='no-product'>Danh m???c ??ang c???p nh???t th??m s???n ph???m</p>
                            ";
                        }else{
                            while($row=mysqli_fetch_array($query)){
                                echo"
                                    <div class='col l-3'>
                                        <div class='product-item'>
                                            <div class='product-item__img'>
                                                <img src=".$row['douong_img']." alt=".$row['douong_name'].">
                                                <div class='product-item__img-background'></div>
                                                <a href='?go=product__detail&douong_id=".$row['douong_id']."' class='product-item__img-btn-search'>
                                                    <i class='fas fa-search'></i>
                                                </a>
                                                <a class='product-item__img-btn-buy'><i class='product-item__img-btn-buy-icon fas fa-shopping-basket'></i>Mua h??ng</a>
                                            </div>
                                            <a href='?go=product__detail&douong_id=".$row['douong_id']."' class='product-item__name'>".$row['douong_name']."</a>
                                            <div class='product-item__price'>".$row['douong_price']."</div>
                                        </div>
                                    </div>
                                ";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="caphe">
    <div class="grid wide">
        <div class="row">
            <div class="col l-12">
                <div class="section__heading">
                    <img class="section__heading-img-top" src="./img/icons-title-top.webp" alt="img-top">
                    <h2 class="section__heading-text">
                        <a href="" class="section__heading-text-link">
                            C?? ph??
                            <br>
                            <span class="section__heading-text-title">
                                N?????c m??a s???u ri??ng
                            </span>
                        </a>
                    </h2>
                    <img class="section__heading-img-bottom" src="./img/icons-title-bottom.webp" alt="img-bottom">
                </div>
            </div>
            <div class="col l-12">
                <p class="no-product">Danh m???c ??ang c???p nh???t th??m s???n ph???m</p>
            </div>
        </div>
    </div>
</section>
<section id="suachua">
    <div class="grid wide">
        <div class="row">
            <div class="col l-12">
                <div class="section__heading">
                    <img class="section__heading-img-top" src="./img/icons-title-top.webp" alt="img-top">
                    <h2 class="section__heading-text">
                        <a href="" class="section__heading-text-link">
                            S???a chua tr??n ch??u H??? Long
                            <br>
                            <span class="section__heading-text-title">
                               Sinh t??? n?????c ??p
                            </span>
                        </a>
                    </h2>
                    <img class="section__heading-img-bottom" src="./img/icons-title-bottom.webp" alt="img-bottom">
                </div>
            </div>
            <div class="col l-12">
                <p class="no-product">Danh m???c ??ang c???p nh???t th??m s???n ph???m</p>
            </div>
        </div>
    </div>
</section>
<section id="trasua">
    <div class="grid wide">
        <div class="row">
            <div class="col l-12">
                <div class="section__heading">
                    <img class="section__heading-img-top" src="./img/icons-title-top.webp" alt="img-top">
                    <h2 class="section__heading-text">
                        <a href="" class="section__heading-text-link">
                            Tr?? s???a
                            <br>
                            <span class="section__heading-text-title">
                               Tr??n ch??u
                            </span>
                        </a>
                    </h2>
                    <img class="section__heading-img-bottom" src="./img/icons-title-bottom.webp" alt="img-bottom">
                </div>
            </div>
            <div class="col l-12">
                <p class="no-product">Danh m???c ??ang c???p nh???t th??m s???n ph???m</p>
            </div>
        </div>
    </div>
</section>
<section id="anvat">
    <div class="grid wide">
        <div class="row">
            <div class="col l-12">
                <div class="section__heading">
                    <img class="section__heading-img-top" src="./img/icons-title-top.webp" alt="img-top">
                    <h2 class="section__heading-text">
                        <a href="" class="section__heading-text-link">
                            ??n v???t
                            <br>
                            <span class="section__heading-text-title">
                               ????? chi??n
                            </span>
                        </a>
                    </h2>
                    <img class="section__heading-img-bottom" src="./img/icons-title-bottom.webp" alt="img-bottom">
                </div>
            </div>
            <?php
            $sql="SELECT * FROM douong WHERE group_id='doanvat'";
            $query=mysqli_query($con, $sql);
            if(mysqli_num_rows($query)==0){
                echo"
                    <p class='no-product'>Danh m???c ??ang c???p nh???t th??m s???n ph???m</p>
                ";
            }else{
                while($row=mysqli_fetch_array($query)){
                    echo"
                        <div class='col l-3'>
                            <div class='product-item'>
                                <div class='product-item__img'>
                                    <img src=".$row['douong_img']." alt=".$row['douong_name'].">
                                    <div class='product-item__img-background'></div>
                                    <a href='?go=product__detail&douong_id=".$row['douong_id']."' class='product-item__img-btn-search'>
                                        <i class='fas fa-search'></i>
                                    </a>
                                    <a href class='product-item__img-btn-buy'><i class='product-item__img-btn-buy-icon fas fa-shopping-basket'></i>Mua h??ng</a>
                                </div>
                                <a href='?go=product__detail&douong_id=".$row['douong_id']."' class='product-item__name'>".$row['douong_name']."</a>
                                <div class='product-item__price'>".$row['douong_price']."</div>
                            </div>
                        </div>
                    ";
                }
            }
            ?>
        </div>
    </div>
</section>
<section id="blog">
    <div class="grid wide">
        <div class="row">
            <div class="col l-12">
                <div class="section__heading">
                    <img class="section__heading-img-top" src="./img/icons-title-top.webp" alt="img-top">
                    <h2 class="section__heading-text">
                        <a href="" class="section__heading-text-link">
                            Tin t???c
                            <br>
                            <span class="section__heading-text-title">
                               M???i nh???t
                            </span>
                        </a>
                    </h2>
                    <img class="section__heading-img-bottom" src="./img/icons-title-bottom.webp" alt="img-bottom">
                </div>
            </div>
            <div class="col l-4">
                <div class="blog-item">
                    <img class="blog-item__img" src="./img/blog-1.webp" alt="blog__img">
                    <a href="#" class="blog-item__name">Y??n B??i: "S???t" tr?? chanh v???a h??</a>
                    <p class="blog-item__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam quo aut earum placeat similique sapiente magnam non aperiam. Aut illo rerum obcaecati minima quisquam doloribus ad mollitia eius magnam consequatur.</p>
                    <p class="blog-item__credit">??inh V??n Quang - b??nh lu???n - 04/10/2001</p>
                </div>
            </div>
            <div class="col l-4">
                <div class="blog-item">
                    <img class="blog-item__img" src="./img/blog-2.webp" alt="blog__img">
                    <a href="#" class="blog-item__name">Tr?? chanh b???i ph??? Minh Khai</a>
                    <p class="blog-item__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam quo aut earum placeat similique sapiente magnam non aperiam. Aut illo rerum obcaecati minima quisquam doloribus ad mollitia eius magnam consequatur.</p>
                    <p class="blog-item__credit">??inh V??n Quang - b??nh lu???n - 04/10/2001</p>
                </div>
            </div>
            <div class="col l-4">
                <div class="blog-item">
                    <img class="blog-item__img" src="./img/blog-3.webp" alt="blog__img">
                    <a href="#" class="blog-item__name">G???p g??? ?????ng s??ng l???p "Tr?? chanh b???i ph???": ??inh V??n Quang</a>
                    <p class="blog-item__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam quo aut earum placeat similique sapiente magnam non aperiam. Aut illo rerum obcaecati minima quisquam doloribus ad mollitia eius magnam consequatur.</p>
                    <p class="blog-item__credit">??inh V??n Quang - b??nh lu???n - 04/10/2001</p>
                </div>
            </div>
        </div>
    </div>
</section>