<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">
        <select name="iddm" id="">
            <option value="0" selected>Tất cả</option>
            <?php foreach($categoryList as $cateList):?>
            <option value="<?php echo $cateList['id']?>"><?php echo $cateList['categoryName']?></option>
            <?php endforeach?>

        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">

            <table>
                <tr>
                    <th></th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Hình ảnh sản phẩm</th>
                    <th>Mô tả sản phẩm</th>
                    <th>Lượt xem sản phẩm</th>
                    <th>categoryId</th>
                    <th>Action</th>
                </tr>
                <?php include_once '../model/pdo.php';
                     $sql = "SELECT * FROM products order by productName";
                     $productList = pdo_query($sql);
                ?>
                <?php foreach($productList as $productList){
                    extract($productList);
                    
                    $updateproduct = "index.php?act=suasp&id=".$id;
                    $deleteproduct = "index.php?act=xoasp&id=".$id;
                    $imgpath = "../upload/".$productImage;
                    if(is_file($imgpath)){
                        $img = "<img src = '" . $imgpath . "' height = '100px' width ='100px'>";
                    }else{
                        $img = "No photo";
                    }
                    echo '<tr>
                    <td><input type="checkbox" name="" id="" /></td>
                    <td>' . $id . '</td>
                    <td>' . $productName . '</td>
                    <td>' . $productPrice . '</td>
                    <td>' . $img . '</td>
                    <td>' . $productDesc . '</td>
                    <td>' . $productView . '</td>
                    <td>' . $categoryId. '</td>
                    <td>
                       <a href="'.$updateproduct.'"> <input type="button" value="Sửa" /></a>
                    <a href="'.$deleteproduct.'"><input type="button" value="Xóa" /></a>
                    </td>
                </tr>';
                } ?>


            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
            <a href="./index.php?act=addsp">
                <input type="button" value="Nhập thêm" /></a>
        </div>
    </div>
</div>