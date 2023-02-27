<div class="article row mb">
    <div class="boxtrai mr ">
        <div class="fl mb">
            <div class="boxtitle">Cảm ơn</div>
            <div class="boxcontent" style="tex-align:center; margin:auto 0">
                <h2 style=" margin:auto 0"> Cảm ơn quý khách đã đặt hàng</h2>
            </div>
        </div>
        <?php if(isset($listBill) && is_array($listBill)){
            extract($listBill);
        } ?>
        <div class="fl mb">
            <div class="boxtitle">thông tin đơn hàng</div>
            <div class="boxcontent">
                <li>Mã đặt hàng: DAM-<?=$listBill['id'];?></li>
                <li>Ngày đặt hàng: <?=$listBill['billDate'];?></li>
                <li>Tổng đơn hàng: <?=$listBill['billTotal'];?></li>
                <li>Phương thức thanh toán: <?=$listBill['billPaymentMethods'];?></li>
            </div>
        </div>
        <div class=" fl mb  ">
            <div class="boxtitle">Thông tin đặt hàng</div>
            <div class=" boxcontent formtaikhoan">
                <table style="border: unset;">
                    <tr>
                        <td style="border: unset;">Người đặt hàng</td>
                        <td style="border: unset;"><?=$listBill['billName']?></td>
                    </tr>
                    <tr>
                        <td style="border: unset;">Địa chỉ</td>
                        <td style="border: unset;"><?=$listBill['billAddress']?></td>
                    </tr>
                    <tr>
                        <td style="border: unset;">Email</td>
                        <td style="border: unset;"><?=$listBill['billEmail']?></td>
                    </tr>
                    <tr>
                        <td style="border: unset;">Số điện thoại</td>
                        <td style="border: unset;"><?=$listBill['billPhone']?></td>
                    </tr>

                </table>



            </div>

        </div>

        <div class="fl mb ">
            <a href="index.php"><button>Quay về trang chủ</button></a>
        </div>

    </div>

    <div class="boxphai">
        <?php include "view/boxright.php";?>
    </div>
</div>