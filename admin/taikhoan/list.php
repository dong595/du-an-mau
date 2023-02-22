<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>

    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">

            <table>
                <tr>
                    <th></th>
                    <th>Mã khách hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Email khách hàng</th>

                    <th>Mật khẩu</th>
                    <th>Địa chỉ khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Role khách hàng</th>
                    <th>Action</th>
                </tr>
                <?php include_once '../model/pdo.php';
                     $sql = "SELECT * FROM users ";
                     $userList = pdo_query($sql);
                ?>
                <?php foreach($userList as $user){
                    extract($user);
                    
                    $updateuser = "index.php?act=suakh&id=".$userId;
                    $deleteuser = "index.php?act=xoakh&id=".$userId;
                    echo '<tr>
                    <td><input type="checkbox" name="" id="" /></td>
                    <td>' . $userId . '</td>
                    <td>' . $userName . '</td>
                    <td>' . $userEmail . '</td>
                    <td>' . $userPassword . '</td>
                    <td>' . $userAddress . '</td>
                    <td>' . $userPhone. '</td>
                    <td>' . $userRole . '</td>
                    <td>
                       <a href="'.$updateuser.'"> <input type="button" value="Sửa" /></a>
                    <a href="'.$deleteuser.'"><input type="button" value="Xóa" /></a>
                    </td>
                </tr>';
                } ?>


            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
            <a href="./index.php?act=adduser">
                <input type="button" value="Nhập thêm" /></a>
        </div>
    </div>
</div>