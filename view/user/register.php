<div class="article row mb">
    <div class="boxtrai mr ">
        <div class=" fl mb  ">

            <div class="boxtitle">Đăng ký thành viên</div>
            <div class=" boxcontent formtaikhoan">
                <form action="index.php?act=register" method="post">

                    <input placeholder="TÊN ĐĂNG NHẬP" type="text" name="user"><br>
                    <input placeholder="EMAIL" type="email" name="email"><br>
                    <input placeholder="MẬT KHẨU" type="password" name="password"><br>
                    <input type="submit" name="register" value="ĐĂNG KÝ">
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