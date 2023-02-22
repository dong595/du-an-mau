<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>

    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">

            <table>
                <tr>
                    <th></th>
                    <th>Mã sản phẩm</th>
                    <th>Nội dung</th>
                    <th>Id khách hàng</th>
                    <th>Thời gian</th>
                    <th>Action</th>
                </tr>
                <?php include_once '../model/pdo.php';
                     $sql = "SELECT * FROM comment ";
                     $commentList = pdo_query($sql);
                ?>
                <?php foreach($commentList as $cmtList){
                    extract($cmtList);
                    
                    // $updatecomment = "index.php?act=suakh&id=".$commentId;
                    $deletecomment = "index.php?act=xoacomment&id=".$id;
                    echo '<tr>
                    <td><input type="checkbox" name="" id="" /></td>
                    <td>' . $idPro . '</td>
                    <td>' . $content . '</td>
                    <td>' . $idUser . '</td>
                    <td>' . $ngay . '</td>
                    <td>
                   
                    <a href="'.$deletecomment.'"><input type="button" value="Xóa" /></a>
                    </td>
                </tr>';
                } ?>


            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />

        </div>
    </div>
</div>