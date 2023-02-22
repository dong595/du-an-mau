<div class="article row mb">
    <div class="boxtrai mr ">
        <div class=" fl mb  ">
            <?php extract($onesp)?>
            <div class="boxtitle"><?=$productName?></div>
            <div class=" boxcontent">
                <?php 
               
                    $img = "upload/".$productImage;
                    echo "<div class='spct mb'><img  src='".$img."' alt=''></div> </br>";
                    echo "<p style:'font-size: 16px;
                    padding-left: 10px;
                    line-height: 16px;'>Mã hàng hóa: ".$id."</p>";
                    echo "<p style:'font-size: 16px;
                    padding-left: 10px;
                    line-height: 16px;'>Tên hàng hóa: ".$productName."</p>";
                    echo "<p style:'font-size: 16px;
                    padding-left: 10px;
                    line-height: 16px;'>Đơn giá: ".$productPrice."</p>";
                    echo "<p style:'font-size: 16px;
                    padding-left: 10px;
                    line-height: 16px;'>Giảm giá: "."</p>";                 
                    echo "<p style:'font-size: 16px;
                    padding-left: 10px;
                    line-height: 16px;'> Mô tả: ".$productDesc."</p>";
                ?>

            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
        $(document).ready(function() {

            $("#comment").load("view/comment/commentForm.php", {
                idPro: <?=$id?>
            });

        });
        </script>
        <div class=" fl mb " id="comment">
            <div class="boxtitle">BÌNH LUẬN</div>

            <div class=" boxcontent">
            </div>
        </div>
        <div class=" fl mb ">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class=" boxcontent">
                <ul>
                    <?php foreach($both as $b):?>

                    <li><a href="index.php?act=ctsanpham&idsp=<?php echo $b['id']?>"><?php echo $b['productName']?></a>
                    </li>
                    <?php endforeach?>
                </ul>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php";?>
    </div>
</div>