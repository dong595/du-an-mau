<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th>Action</th>
                </tr>
                <?php include_once '../model/pdo.php';
                     $sql = "SELECT * FROM category order by categoryName";
                     $categoryList = pdo_query($sql);
                ?>
                <?php foreach($categoryList as $cateList){
                    extract($cateList);
                    
                    $updateCategory = "index.php?act=suadm&id=".$id;
                    $deleteCategory = "index.php?act=xoadm&id=".$id;
                    echo '<tr>
                    <td><input type="checkbox" name="" id="" /></td>
                    <td>' . $id . '</td>
                    <td>' . $categoryName . '</td>
                    <td>
                       <a href="'.$updateCategory.'"> <input type="button" value="Sửa" /></a>
                    <a href="'.$deleteCategory.'"><input type="button" value="Xóa" /></a>
                    </td>
                </tr>';
                } ?>


            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
            <a href="./index.php?act=adddm">
                <input type="button" value="Nhập thêm" /></a>
        </div>
    </div>
</div>