<div class="article row mb">
    <div class="boxtrai mr ">
        <div class=" fl mb  ">

            <div class="boxtitle">Quên mật khẩu </div>
            <div class=" boxcontent formtaikhoan">
                <?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
            ?>
                <form action="index.php?act=forgotPassword" method="post">


                    <input placeholder="EMAIL" type="email" name="email"><br>


                    <input type="submit" name="forgotPassword" value="GỬI">
                    <input type="reset" value="NHẬP LẠI">
                    <?php if(isset($_POST['email']) && (!empty($_POST["email"]))){
                        echo'có phải bạn là: '. $userName.'<br>';
                        echo '<input placeholder="CẬP NHẬT MẬT KHẨU" type="password" name="password"><br>';
                    }
                        else{echo 'Tài khoản không tồn tại';}?>
                </form>
                <h2> <?php if(isset($thongbao) && ($thongbao !="")){
                    
                    echo $thongbao;
                    }?></h2>
            </div>

        </div>

    </div>
    <div class="boxphai">
        <?php include "view/boxright.php";?>
    </div>
</div>