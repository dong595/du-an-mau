<div class="article row mb">
    <div class="boxtrai mr ">
        <div class=" fl mb  ">

            <div class="boxtitle">Thông tin đặt hàng</div>
            <div class=" boxcontent formtaikhoan">
                <table style="border: unset;">

                    <?php 
                        if(isset($_SESSION['user'])){
                            $userName = $_SESSION['user']['userName'];
                            $userAddress= $_SESSION['user']['userAddress'];
                            $userEmail = $_SESSION['user']['userEmail'];
                            $userPhone = $_SESSION['user']['userPhone'];
                        }else{
                            $userName ="";
                            $userAddress ="";
                            $userEmail = "";
                            $userPhone = "";
                        }
                    ?>
                    <tr>
                        <td style="border: unset;">Người đặt hàng</td>
                        <td style="border: unset;"><input value="<?=$userName?>" placeholder="Người đặt hàng"
                                type="text" name="userName"></td>
                    </tr>
                    <tr>
                        <td style="border: unset;">Địa chỉ</td>
                        <td style="border: unset;"><input value="<?=$userAddress?>" placeholder="Địa chỉ" type="text"
                                name="userAddress"></td>
                    </tr>
                    <tr>
                        <td style="border: unset;">Email</td>
                        <td style="border: unset;"><input value="<?=$userEmail?>" placeholder="email" type="email"
                                name="userEmail"></td>
                    </tr>
                    <tr>
                        <td style="border: unset;">Số điện thoại</td>
                        <td style="border: unset;"><input value="0<?=$userPhone?>" placeholder="Số điện thoại"
                                type="text" name="userPhone"></td>
                    </tr>

                </table>



            </div>

        </div>
        <div class="fl mb">
            <div class="boxtitle">phương thức thanh toán</div>
            <div class="boxcontent">
                <input style="margin: 10px" type="radio" value="" checked>Trả tiền khi nhận hàng
                <input style="margin: 10px" type="radio" value="">Chuyển khoản ngân hàng
                <input style="margin: 10px" type="radio" value="">Thanh toán online
            </div>
        </div>
        <div class=" fl mb ">
            <div class="boxtitle">Giỏ hàng</div>
            <div class="boxcontent">
                <table style=" width: 98%; ">
                    <tr>
                        <th></th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Giá</th>
                        <th>Số lượng </th>
                        <th>Thành tiền</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        viewCart(0);
                    ?>


                </table>
            </div>
        </div>
        <div class="fl mb bill">
            <input type="submit" value="Đồng ý đặt hàng">
        </div>
    </div>

    <div class="boxphai">
        <?php include "view/boxright.php";?>
    </div>
</div>