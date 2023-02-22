<?php
session_start();
include "./model/pdo.php";
include "./model/sanpham.php";
include "./model/danhmuc.php";
include "./model/cart.php";
include "./model/user.php";
include "view/header.php";
$newCategory = loadALL_danhmuc_home();
$newProduct = loadALL_sanpham_home();
$top10 = loadALL_sanpham_top10(); 

if(isset($_GET['act'])&&($_GET['act'] !="")){
    $act = $_GET['act'];
    switch ($act) {
        case 'ctsanpham':
            if(isset($_GET['idsp']) && ($_GET['idsp']>0) ){
                $onesp = loadOne_sanpham($_GET['idsp']);
                extract($onesp);
                $both = load_sanpham_cungloai($_GET['idsp'],$categoryId);
                // var_dump($_GET['idsp']);die;
                include './view/productDetails.php';
            }
            else{
                include "./view/home.php";
            }
            
            break;
            case 'sanpham':
                if(isset($_POST['kyw']) && ($_POST['kyw']!= "") ){
                    $kyw = $_POST["kyw"];
                }
                else{
                    $kyw ="";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm']>0) ){
                    $categoryId = $_GET['iddm'];
             
                }
                else{
                    $categoryId = 0;
                }
                $productList = loadall_sanpham($kyw,$categoryId);
                $categoryName = loadNameCategory($categoryId) ;
                include './view/product.php';
                break;
        case 'register':
            if(isset($_POST['register'])&&($_POST['register'])){
                $userName = $_POST['user'];
                $userEmail = $_POST['email'];
                $userPassword = $_POST['password'];
                // var_dump($_POST);die;
                insert_user($userName,$userEmail,$userPassword);
                $thongbao ="Đăng ký tài khoản thành công";
            }
            // include "./view/user/login.php";
            include "./view/user/register.php";
            break;
        case 'login':
            if(isset($_POST['login'])&&($_POST['login'])){
                $userName = $_POST['user'];
                $userPassword = $_POST['password'];
                // var_dump($_POST);die;
                $checkUser=check_user($userName,$userPassword);
                if(is_array($checkUser)){
                    $_SESSION['user']=$checkUser;
                    $thongbao = "Đăng nhập thành công";
                    header("location:index.php");
                }
                else{
                   
                   echo '<script  language="javascript">
                    alert(" Tài khoảng không tồn tại hoặc tên đăng nhập hoặc mật khẩu không chính xác trở về trang trước!");
                   </script>';
                //    header("location:index.php");
                }
               
            }
            // include "./view/user/login.php";
            // include "./view/user/login.php";
            break;
        case 'editUser':
            if(isset($_POST['editUser'])&&($_POST['editUser'])){
                $id = $_POST['id'];
                $userName = $_POST['user'];
                $userEmail = $_POST['email'];
                $userPassword = $_POST['password'];
                $userAddress = $_POST['address']; 
                $userPhone = $_POST['phone'];
                // var_dump($_POST);die;
                update_user($id,$userName,$userEmail,$userPassword,$userAddress,$userPhone);
                $_SESSION['user'] = check_user($userName,$userPassword);
                header('location:index.php');
            }
            include "./view/user/editUser.php";
            // include "./view/user/editUser.php";
            break;
        case 'forgotPassword':
            if(isset($_POST['forgotPassword'])&&($_POST['forgotPassword'])){
                $id = $_POST['id'];
                
                $userEmail = $_POST['email'];
                $userPassword = $_POST['password'];
                // var_dump($_POST);die;
                forgot_password($userEmail,$userPassword);
                header('location:index.php');
            }
            include "./view/user/forgotPassword.php";
            // include "./view/user/forgotPassword.php";
            break; 
        case 'addToCart':
            if(isset($_POST['addToCart'])&&($_POST['addToCart'])){
                $id = $_POST['id'];
                $productName = $_POST['tensp'];
                $productImage = $_POST['anhsp'];
                $productPrice = $_POST['giasp'];
                $count = $_POST['quantity'];
                if(!empty($_SESSION["myCart"])) {
                    if(in_array($id ,array_keys($_SESSION["myCart"]))) {
                        foreach($_SESSION["myCart"] as $k => $v) {
                                if($id  == $k) {
                                    if(empty($_SESSION["myCart"][$k][$count])) {
                                        $_SESSION["myCart"][$k][$count] = 0;
                                    }
                                    $_SESSION["myCart"][$k][$count] += $_POST[$count];
                                }
                        }
                    } else {
                        $_SESSION["myCart"] = array_merge($_SESSION["myCart"],$_SESSION['myCart']=[]);
                    }
                } else {
                    $_SESSION["myCart"] = $_SESSION['myCart']=[];
                }
                $sum = $count * $productPrice;
                $addProduct = [ $id, $productName, $productImage,$productPrice, $count,$sum];
                array_push( $_SESSION['myCart'], $addProduct);
                
            }
            
            include './view/cart/viewCart.php';
            break;
            case "remove":
               if(isset($_GET['code'])){
                array_slice($_SESSION['myCart'],$_GET['code'],1);
               }else{
                $_SESSION['myCart'] =[];
               }
              
                header('location:index.php?act=addToCart');
                break;

        case 'bill':
            
            include './view/cart/bill.php';
            
            break;
        case 'logOut':
            include './view/user/logOut.php';
            break;
        case 'gioithieu':
            include './view/gioithieu.php';
            break;
        case 'lienhe':
            include './view/lienhe.php';
            break;
        case 'gopy':
            include './view/gopy.php';
            break;
        case 'hoidap':
            include './view/hoidap.php';
            break;
        default:
            include './view/home.php';
            break;
    }
    
}
else{
    include "./view/home.php";
}
include "view/footer.php";
// include "view/css/style.css";
?>