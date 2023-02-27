<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form name="myForm" onsubmit="return validateForm()" action="index.php?act=addsp" method="post"
            enctype="multipart/form-data">
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
                <input type="text" name="tensp" />
            </div>
            <div class="row mb10">
                Giá <br />
                <input type="text" name="giasp" />
            </div>
            <div class="row mb10">
                Hình ảnh <br />
                <input type="file" name="anhsp" />
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
        <script>
        function validateForm() {
            let tensp = document.forms["myForm"]["tensp"].value;
            let giasp = document.forms["myForm"]["giasp"].value;
            let descsp = document.forms["myForm"]["descsp"].value;
            let anhsp = document.forms["myForm"]["anhsp"].value;
            if (tensp == "") {
                alert("Vui lòng nhập tên sản phẩm");
                return false;
            }
            if (giasp == "") {
                alert("Vui lòng nhập giá sản phẩm");
                return false;
            }
            if (descsp == "") {
                alert("Vui lòng nhập mô tả về sản phẩm");
                return false;
            }
            if (anhsp == "") {
                alert("Vui lòng tải ảnh sản phẩm lên");
                return false;
            }
        }
        </script>
    </div>
</div>