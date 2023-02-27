<?php 
    if(isset($productList)){
        extract($productList);
    }
    $imgpath = "../upload/".$productImage;
    if(is_file($imgpath)){
        $img = "<img src = '" . $imgpath . "' height = '100px' width ='100px'>";
    }else{
        $img = "No photo";
    }
?>
<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <form name="myForm" onsubmit="return validateForm()" action="index.php?act=updatesp" method="post"
            enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$id?>">
            <div class="row mb10">
                <select name="iddm" id="">
                    <?php foreach ($categoryList as $cateList) {
                        extract($cateList);
                        if($categoryId == $id) echo '<option value=" '. $id .' " selected>'.$categoryName.'</option>';
                        else  echo '<option value=" '. $id .' ">'.$categoryName.'</option>';
                    }?>

                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br />
                <input type="text" name="tensp" value="<?=$productName?>" />
            </div>
            <div class="row mb10">
                Giá <br />
                <input type="text" name="giasp" value="<?=$productPrice?>" />
            </div>
            <div class="row mb10">
                Hình ảnh <br />
                <input type="file" name="anhsp" />
                <?=$img?>
            </div>
            <div class="row mb10">
                Mô tả <br />
                <textarea name="descsp" id="" cols="30" rows="10"><?=$productDesc?></textarea>
            </div>
            <div class="row mb10">
                Lượt xem <br />
                <input disabled type="text" name="viewsp" />
            </div>
            <div class="row mb10">

                <input type="submit" name="update" value="UPDATE" />
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
                alert("Vui lòng nhập tên sản phẩm muốn cập nhật");
                return false;
            }
            if (giasp == "") {
                alert("Vui lòng nhập giá sản phẩm muốn cập nhật");
                return false;
            }
            if (descsp == "") {
                alert("Vui lòng nhập mô tả về sản phẩm muốn cập nhật");
                return false;
            }
            if (anhsp == "") {
                alert("Vui lòng tải ảnh sản phẩm muốn cập nhật");
                return false;
            }
        }
        </script>
    </div>
</div>