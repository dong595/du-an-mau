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
                <form name="myForm" onsubmit="return validateForm()" action="index.php?act=editUser" method="post">

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
            <script>
            function validateForm() {
                let user = document.forms["myForm"]["user"].value;
                let email = document.forms["myForm"]["email"].value;
                let pasword = document.forms["myForm"]["pasword"].value;
                let address = document.forms["myForm"]["address"].value;
                let phone = document.forms["myForm"]["phone"].value;
                let role = document.forms["myForm"]["role"].value;
                if (user == "") {
                    alert("Vui lòng nhập tên user muốn cập nhật");
                    return false;
                }
                if (email == "") {
                    alert("Vui lòng nhập email muốn cập nhật");
                    return false;
                }
                if (pasword == "") {
                    alert("Vui lòng nhập mật khẩu muốn cập nhật");
                    return false;
                }
                if (address == "") {
                    alert("Vui lòng nhập địa chỉ muốn cập nhật");
                    return false;
                }
                if (phone == "") {
                    alert("Vui lòng nhập số điện thoại muốn cập nhật");
                    return false;
                }
                if (role == "") {
                    alert("không để trống trường này");
                    return false;
                }
            }
            </script>
        </div>

    </div>
    <div class="boxphai">
        <?php include "view/boxright.php";?>
    </div>
</div>