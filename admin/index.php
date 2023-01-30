<?php
include "../model/pdo.php";
include "header.php";
// Controller
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        case 'adddm';
            include "danhmuc/add.php";
            if(isset($_POST['themmoi'])&&($_POST['themmoi']))
            {
                $tenloai = $_POST['tenloai'];
                // var_dump($_POST);die;
                $sql = "INSERT INTO category (categoryName) VALUES ('$tenloai')";
                pdo_execute($sql);
                $thongbao = "Thêm thành công";
            }
            break;
        case 'addsp';
        include "sanpham/add.php";
        break;
            default:
            include "home.php";
            break;
    }
}else{
    include "home.php";
}
include "home.php";
// 
include "footer.php";
?>