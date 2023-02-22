<div class="row mb">
    <div class="boxtitle">TÀI KHOẢN</div>
    <div class="boxcontent formtaikhoan">
        <?php
            if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
           ?>
        <div class="row mb10">
            <p>Xin chào, <?php echo " ".$userName."" ?></p>
        </div>
        <div class="row mb10">
            <li><a href="index.php?act=editUser">Cập nhật tài khoản</a></li> <br>
            <li><a href="index.php?act=logOut">Đăng xuất</a></li> <br>
            <?php 
                if($userRole==1){

                
            ?>
            <li><a href="admin/index.php">Đăng nhập trang quản trị</a></li>
            <?php }?>
        </div>
        <?php
             }else{

        ?>
        <form action="index.php?act=login" method="post">
            <div class="row mb10">
                Tên đăng nhập <br />
                <input type="text" name="user" />
            </div>
            <div class="row mb10">
                Mật khẩu <br />
                <input type="password" name="password" />
            </div>
            <div class="row mb10">
                <input type="checkbox" name="" /> Ghi nhớ tài khoản
            </div>
            <div class="row mb10">
                <input type="submit" name="login" value="Đăng nhập" />
            </div>
        </form>
        <li><a href="index.php?act=forgotPassword">Quên mật khẩu</a></li>

        <li><a href="index.php?act=register">Đăng ký thành viên</a></li>
        <?php 
             }
        ?>
    </div>
</div>
<div class="row mb">
    <div class="boxtitle">DANH MỤC</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <!-- <li><a href="#">Đồng hồ</a></li>
                    <li><a href="#">Đồng hồ</a></li>
                    <li><a href="#">Đồng hồ</a></li>
                    <li><a href="#">Đồng hồ</a></li>
                    <li><a href="#">Đồng hồ</a></li> -->
            <?php foreach($newCategory as $nCate):?>

            <li><a href="index.php?act=sanpham&iddm=<?php echo $nCate['id']?>"><?php echo $nCate['categoryName']?></a>
            </li>
            <?php endforeach?>
        </ul>
    </div>
    <div class="boxfooter searbox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw" id="" />
            <input type="submit" value="Tìm kiếm" name="search">
        </form>
    </div>
</div>
<div class="row">
    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
    <div class="row boxcontent">
        <!-- <div class="row mb10 top10">
                    <img src="./images/user.png" alt="" />
                    <a href="#">sir</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./images/user.png" alt="" />
                    <a href="#">sir</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./images/user.png" alt="" />
                    <a href="#">sir</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./images/user.png" alt="" />
                    <a href="#">sir</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./images/user.png" alt="" />
                    <a href="#">sir</a>
                </div>
                <div class="row mb10 top10">
                    <img src="./images/user.png" alt="" />
                    <a href="#">sir</a>
                </div> -->
        <?php foreach($top10 as $t10):?>
        <div class="row mb10 top10">
            <img src="upload/<?php echo $t10['productImage'] ?>" alt="" />
            <a href="index.php?act=ctsanpham&idsp=<?php echo $t10['id']?>">
                <p style="white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 100px;
}"><?php echo $t10['productName']?></p>
            </a>
        </div>
        <?php endforeach?>
    </div>
</div>