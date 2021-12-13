<?php
    function replacex($x){
        $x= str_replace  ("'", "\'", $x);
        $x= str_replace  ('"', '\"', $x);
        $x= str_replace  (';', '\;', $x);
    }
    function checkbill($x){
        $conn=Opencon();
        $sql= "SELECT * FROM bill";
        $query=mysqli_query($conn,$sql);
        if(mysqli_num_rows($query) == 0){
            return true;
        }else{
            while($row=mysqli_fetch_array($query)){
                if($x==$row['bill_id']){
                    return false;
                }
            }
            return true;
        }
    }
    if(isset($_POST['add_bill'])){
        //lay thong tin khach hang
            $tg;
            $bill_id;
            do{
                $bill_id=mt_rand(1,2147483647);
                $tg=checkbill($bill_id);
            }while($tg=false);
            $name = $_POST['user_name'];
            $diachi = $_POST['user_address'];
            $number_phone = $_POST['user_numberphone'];
            $stk = $_POST['user_stk'];
            $name_bank = $_POST['user_bank'];
            $total=$_POST['total'];
            replacex($name);
            replacex($diachi);
            replacex($number_phone);
            replacex($stk);
            replacex($name_bank);
            replacex($total);
            $insert_bill="INSERT INTO bill(bill_id,name,diachi,number_phone,stk,name_bank,total) VALUES('$bill_id','$name','$diachi','$number_phone','$stk','$name_bank','$total')";
            if(mysqli_query($conn,$insert_bill)){
                echo"
                    <script>alert('Đặt hàng thành công)</script>
                ";
                
            }else{
                echo"
                    alert('Sikeeeeeeeee!!!')
                    <p style='color:red;'>Error:".$insert_bill.".<br/>".mysqli_error($conn).".</p>
                ";
            }
        // lay thong tin gio hang
            for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
                $du_id=$_SESSION['giohang'][$i][0];
                $du_name=$_SESSION['giohang'][$i][1];
                $du_dongia=$_SESSION['giohang'][$i][3];
                $du_number=$_SESSION['giohang'][$i][4];
                $du_thanhtien=(int)$du_dongia * (int)$du_number;
                $insert_cart="INSERT INTO cart(du_id,du_name,du_dongia,du_number,du_thanhtien,bill_id) VALUES('$du_id','$du_name','$du_dongia','$du_number','$du_thanhtien','$bill_id')";
                if(mysqli_query($conn,$insert_cart)){
                    // echo"<p>Bạn đã đặt hàng thành công!</p>";
                }else{
                    echo"
                        alert('Sikeeeeeeeee!!!')
                        <p style='color:red;'>Error:".$insert_cart.".<br/>".mysqli_error($conn).".</p>
                    ";
                }
            }
        //insert vao gio hang(lam luon roi)
        // show confirm don hang 
                echo"
                <div class='grid wide'>
                    <div class='row'>
                        <div class='col l-6'>
                            <p class='register__heading'>Thông tin khách hàng</p>
                            <div class='form__box'>
                                <p style='text-align: center;margin-bottom:16px;margin-top:16px;'>Họ và tên: ".$name."</p>
                            </div>
                            <div class='form__box'>
                                <p style='text-align: center;margin-bottom:16px;'>Địa chỉ: ".$diachi."</p>
                            </div>
                            <div class='form__box'>
                                <p style='text-align: center;margin-bottom:16px;'>Số điện thoại: ".$number_phone."</p>
                            </div>
                            <div class='form__box'>
                                <p style='text-align: center;margin-bottom:16px;'>Số tài khoản: ".$stk."</p>
                            </div>
                            <div class='form__box'>
                                <p style='text-align: center;margin-bottom:16px;'>Tên ngân hàng: ".$name_bank."</p>
                            </div>
                        </div>
                        <div class='col l-6'>
                            <p class='register__heading'>Thông tin đơn hàng</p>
                            <div class='table-product__heading-list'>
                                <div class='row no-gutters'>
                                    <div class='col l-4'>
                                        <div class='table-product__heading-item'>
                                            Ảnh sản phẩm
                                        </div>
                                    </div>
                                    <div class='col l-6'>
                                        <div class='table-product__heading-item'>
                                            Tên sản phẩm
                                        </div>
                                    </div>
                                    <div class='col l-2' style='border-right:1px solid var(--text-color);'>
                                        <div class='table-product__heading-item'>
                                            Số lượng
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='table-product__container-list'>";
                                for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
                                echo"<div class='row no-gutters'>
                                        <div class='col l-4'>
                                            <div class='table-product__container-item'>
                                                <img src='".$_SESSION['giohang'][$i][2]."'>
                                            </div>
                                        </div>
                                        <div class='col l-6'>
                                            <div class='table-product__container-item'>
                                                <span>".$_SESSION['giohang'][$i][1]."</span>
                                            </div>
                                        </div>
                                        <div class='col l-2' style='border-right:1px solid var(--text-color);'>
                                            <div class='table-product__container-item'>
                                                    <span>".$_SESSION['giohang'][$i][4]."</span>
                                            </div>
                                        </div>
                                    </div>";
                                }
                        echo"</div>
                        </div>
                    </div>
                </div>";
        // unset gio hang 
        unset($_SESSION['giohang']);
    }
?>