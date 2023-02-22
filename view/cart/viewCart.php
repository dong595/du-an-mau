<div class="article row mb">
    <div class="boxtrai mr ">
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
                        viewCart(1);
                    ?>


                </table>
            </div>
        </div>
        <div class="row mb bill">
            <a href="index.php?act=bill"> <input type="submit" value="Đồng ý đặt hàng"></a><a
                href="index.php?act=remove"> <input type="submit" value="Xóa giỏ hàng"> </a>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php";?>
    </div>
</div>