<div class="article row mb">
    <div class="boxtrai mr ">
        <div class=" fl mb  ">

            <div class="boxtitle">Cập nhật tài khoản</div>
            <div class=" boxcontent formtaikhoan">
                <?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
            ?>
                <form action="index.php?act=editUser" method="post">

                    <input value="<?=$userName?>" type="text" name="user"><br>
                    <input value="<?=$userEmail?>" type="email" name="email"><br>
                    <input value="<?=$userPassword?>" type="password" name="password"><br>
                    <input value="<?=$userAddress?>" type="text" name="address"><br>
                    <input value="<?=$userPhone?>" type="text" name="phone"><br>
                    <input type="hidden" name="id" value="<?=$userId?>">
                    <input type="submit" name="editUser" value="CẬP NHẬT">
                    <input type="reset" value="NHẬP LẠI">
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