<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Danh mục <br />
                <select name="iddm" id="">
                    <?php foreach ($categoryList as $cateList) {
                        extract($cateList);
                        echo '<option value=" '. $id .' ">'.$categoryName.'</option>';
                    }?>

                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br />
                <input required="[A-z]{255}" type="text" name="tensp" />
            </div>
            <div class="row mb10">
                Giá <br />
                <input required="[A-z]{255}" type="text" name="giasp" />
            </div>
            <div class="row mb10">
                Hình ảnh <br />
                <input required="[A-z]{255}" type="file" name="anhsp" />
            </div>
            <div class="row mb10">
                Mô tả <br />
                <textarea name="descsp" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                Lượt xem <br />
                <input disabled required="[A-z]{255}" type="text" name="viewsp" />
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm mới" />
                <input type="reset" value="Nhập lại" />
                <a href="index.php?act=listsp"><input type="button" value="Danh sách" /></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao != " ")) echo $thongbao;
             ?>
        </form>
    </div>
</div>