<?php 
    if(isset($userList)){
        extract($userList);
    }
?>
<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT KHÁCH HÀNG</h1>
    </div>
    <div class="row frmcontent">
        <form name="myForm" onsubmit="return validateForm()" action="index.php?act=updatekh" method="post">
            <div class="row mb10">
                Mã khách hàng <br />
                <input type="text" value="<?=$userId?>" name="id" disabled />
            </div>
            <div class="row mb10">
                Tên khách hàng <br />
                <input type="text" name="user" value="<?php if (isset($userName) && ($userName != ""))
                        echo $userName;?>" />
            </div>
            <div class="row mb10">
                Email khách hàng <br />
                <input type="text" name="email" value="<?php if (isset($userEmail) && ($userEmail != ""))
                        echo $userEmail;?>" />
            </div>
            <div class="row mb10">
                Mật khẩu <br />
                <input type="text" name="pasword" value="<?php if (isset($userPassword) && ($userPassword != ""))
                        echo $userPassword;?>" />
            </div>
            <div class="row mb10">
                Địa chỉ khách hàng <br />
                <input type="text" name="address" value="<?php if (isset($userAddress) && ($userAddress != ""))
                        echo $userAddress;?>" />
            </div>
            <div class="row mb10">
                Số điện thoại <br />
                <input type="text" name="phone" value="<?php if (isset($userPhone) && ($userPhone != ""))
                        echo $userPhone;?>" />
            </div>
            <div class="row mb10">
                Role <br />
                <input type="text" name="role" value="<?php if (isset($userRole) && ($userRole != ""))
                        echo $userRole;?>" />
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if (isset($userId) && ($userId >0))
                        echo $userId;?>">
                <input type="submit" name="update" value="Update" />
                <input type="reset" value="Nhập lại" />
                <a href="index.php?act=dskh"><input type="button" value="Danh sách" /></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao != " ")) echo $thongbao;
             ?>
        </form>
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