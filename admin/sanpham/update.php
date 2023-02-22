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
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
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
                <input required="[A-z]{255}" type="text" name="tensp" value="<?=$productName?>" />
            </div>
            <div class="row mb10">
                Giá <br />
                <input required="[A-z]{255}" type="text" name="giasp" value="<?=$productPrice?>" />
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
                <input disabled required="[A-z]{255}" type="text" name="viewsp" />
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
    </div>
</div>