<?php 
    if(isset($categoryList)){
        extract($categoryList);
    }
?>
<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <form name="myForm" onsubmit="return validateForm()" action="index.php?act=updatedm" method="post">
            <div class="row mb10">
                Mã loại <br />
                <input type="text" value="<?=$id?>" name="maloai" disabled />
            </div>
            <div class="row mb10">
                Tên loại <br />
                <input type="text" name="tenloai" value="<?php if (isset($categoryName) && ($categoryName != ""))
                        echo $categoryName;?>" />
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if (isset($id) && ($id >0))
                        echo $id;?>">
                <input type="submit" name="update" value="Update" />
                <input type="reset" value="Nhập lại" />
                <a href="index.php?act=listdm"><input type="button" value="Danh sách" /></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao != " ")) echo $thongbao;
             ?>
        </form>
        <script>
        function validateForm() {
            let maloai = document.forms["myForm"]["maloai"].value;
            let tenloai = document.forms["myForm"]["tenloai"].value;
            if (maloai == "") {
                alert("Vui lòng nhập tên mã loại");
                return false;
            }
            if (tenloai == "") {
                alert("Vui lòng nhập tên danh mục muốn cập nhật");
                return false;
            }
        }
        </script>
    </div>
</div>