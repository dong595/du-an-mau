<div class="article row mb">
    <div class="boxtrai mr ">
        <div class=" fl mb  ">

            <div class="boxtitle">Đăng ký thành viên</div>
            <div class=" boxcontent formtaikhoan">
                <form name="myForm" onsubmit="return validateForm()" action="index.php?act=register" method="post">

                    <input placeholder="TÊN ĐĂNG NHẬP" type="text" name="user"><br>
                    <input placeholder="EMAIL" type="email" name="email"><br>
                    <input placeholder="MẬT KHẨU" type="password" name="password"><br>
                    <input type="submit" name="register" value="ĐĂNG KÝ">
                    <input type="reset" value="NHẬP LẠI">
                </form>
                <script>
                function validateForm() {
                    let user = document.forms["myForm"]["user"].value;
                    let email = document.forms["myForm"]["email"].value;
                    let password = document.forms["myForm"]["password"].value;
                    if (user == "") {
                        alert("Vui lòng nhập tên đăng nhập");
                        return false;
                    }
                    if (email == "") {
                        alert("Vui lòng nhập email");
                        return false;
                    }
                    if (password == "") {
                        alert("Vui lòng nhập mật khẩu");
                        return false;
                    }
                }
                </script>
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