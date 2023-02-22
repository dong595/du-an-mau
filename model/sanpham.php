<?php 

    function insert_sanpham($tensp,$giasp,$filename,$descsp,$iddm){
        $sql = "INSERT INTO products (productName,productPrice,productImage,productDesc,categoryId) VALUES ('$tensp','$giasp','$filename','$descsp','$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql = "DELETE FROM products where id = ".$_GET['id'];
        pdo_execute($sql);
    }
    function loadALL_sanpham_home()
    {
        $sql = "SELECT *FROM products where 1 order by id desc limit 0,9";
        $productList = pdo_query($sql);
        return $productList;
    }
    function loadALL_sanpham_top10()
    {
        $sql = "SELECT *FROM products where 1 order by productView desc limit 0,10";
        $productList = pdo_query($sql);
        return $productList;
    }
    function loadALL_sanpham($kyw="",$iddm=0){
        $sql = "SELECT * FROM products where 1";
        if($kyw !=""){
        $sql.=" and productName like '%". $kyw."%'";
        }
        else if($iddm >0){
            $sql.=" and categoryId ='".$iddm."'";
        }
        $sql.=" order by id desc";
        
        // $sql = "SELECT * FROM products inner join category on products.categoryId = category.id  where productName like '%" . $kyw . "%' and categoryId ='" . $iddm . "' order by products.id desc";
    //     $sql = "SELECT * FROM products hh "
    //         . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
    //         . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    // return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
        $productList = pdo_query($sql);
    return $productList;
    }
    function loadNameCategory($categoryId){
       if($categoryId>0){
        $sql = "select * from category  where id  = " . $categoryId;
        $category = pdo_query_one($sql);
        extract($category);
        return $categoryName;
        }
        else{
            return "";
        }
    }
    function loadOne_sanpham($id){
        $sql = "select * from products  where id  = " . $id;
        $productList = pdo_query_one($sql);
    return $productList;
    }
    function load_sanpham_cungloai($id,$categoryId){
        $sql = " SELECT * from products  where categoryId = ".$categoryId." AND id  <> " . $id;
        $productList = pdo_query($sql);
    return $productList;
    }
    function update_sanpham($id,$tensp,$giasp,$filename,$descsp,$iddm){
    if ($filename != "") $sql = "UPDATE products set productName ='$tensp',productPrice = $giasp ,productImage = '$filename',productDesc = '$descsp',categoryID = $iddm where id = ".$id;
       
        else $sql = "UPDATE products set productName ='$tensp',productPrice = $giasp ,productDesc = '$descsp',categoryID = $iddm where id = ".$id;
        pdo_execute($sql);
    }
?>