<?php
include "../model/pdo.php";
include "header.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/user.php";
include "../model/comment.php";
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        /** Controller DANH MỤC */
        case 'adddm':
            
            if(isset($_POST['themmoi'])&&($_POST['themmoi']))
            {
                $tenloai = $_POST['tenloai'];
                // var_dump($_POST);die;
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
        break;
        case 'listdm':
            include "danhmuc/list.php";
            $categoryList = loadALL_danhmuc();
        break;
        case 'xoadm':
        if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
        }
        $categoryList = loadALL_danhmuc();
        include "danhmuc/list.php";
        break;
        case 'suadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $categoryList = loadOne_danhmuc($_GET['id']);
            }
           
            include "danhmuc/update.php";
        break;
        case 'updatedm':
            
            if(isset($_POST['update'])&&($_POST['update']))
            {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                // var_dump($_POST);die;
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $categoryList = loadALL_danhmuc();
            include "danhmuc/list.php";
        break;
        case 'addsp':
            if(isset($_POST['themmoi'])&&($_POST['themmoi']))
            {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $descsp = $_POST['descsp'];
                $filename = $_FILES['anhsp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['anhsp']["name"]);
                if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["anhsp"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                // var_dump($_POST);die;
                insert_sanpham($tensp,$giasp,$filename,$descsp,$iddm);
                $thongbao = "Thêm thành công";
            }
            $categoryList = loadALL_danhmuc();
            include "sanpham/add.php";
        break;
        case 'listsp':
            if(isset($_POST['listsp'])&&($_POST['listok'])){
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
                // var_dump($iddm);die;
            }
            else{
                $kyw = "";
                $iddm = 0;
            }
            $categoryList = loadALL_danhmuc();
            $productList = loadALL_sanpham($kyw,$iddm);
            include "sanpham/list.php";
        break;
        case 'xoasp':
        if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_sanpham($_GET['id']);
        }
        $productList = loadALL_sanpham(" ",0);
        include "sanpham/list.php";
        break;
        case 'suasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $productList = loadOne_sanpham($_GET['id']);
            }
            $categoryList = loadALL_danhmuc();
            include "sanpham/update.php";
        break;
        case 'updatesp':
            
            if(isset($_POST['update'])&&($_POST['update']))
            {   
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $descsp = $_POST['descsp'];
                $filename = $_FILES['anhsp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['anhsp']["name"]);
                if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["anhsp"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                // var_dump($_POST);die;
                update_sanpham($id,$tensp,$giasp,$filename,$descsp,$iddm);
                $thongbao = "Cập nhật thành công";
            }
            $categoryList = loadALL_danhmuc();
            $productList = loadALL_sanpham("",0);
            include "sanpham/list.php";
        break;
        case 'dskh':
            include "taikhoan/list.php";
            $userList = loadALL_user();
        break;
            /** Controller SẢN PHẨM */
        case 'suakh':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $userList = loadOne_user($_GET['id']);
            }
            
            include "taikhoan/update.php";
        break;
        case 'updatekh':
        
            if(isset($_POST['update'])&&($_POST['update']))
            {
                $userName = $_POST['user'];
                $id = $_POST['id'];
                $userEmail = $_POST['email'];
                $userPassword = $_POST['pasword'];
                $userAddress = $_POST['address'];
                $userPhone = $_POST['phone'];
                $userRole = $_POST['role'];
                // var_dump($_POST);die;
                update_user_admin($id,$userName,$userEmail,$userPassword,$userAddress,$userPhone,$userRole);
                $thongbao = "Cập nhật thành công";
            }
            $userList = loadALL_user();
            include "taikhoan/list.php";
        break;    
        case 'xoakh':
            $id =$_GET['id'];
            if(isset($id )&&($id >0)){
                    delete_user($id);
            }
            $userList = loadALL_user();
            include "taikhoan/list.php";
            break;
        case 'dsbl':
            include "binhluan/list.php";
            $commentList = loadALL_comment($idPro);
        break;
    case 'xoacomment':
        $id = $_GET['id'];
        if(isset( $id )&&( $id >0)){
            delete_comment($id);
        }
        include "comment/list.php";
        header('location:index.php?act=dsbl');
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