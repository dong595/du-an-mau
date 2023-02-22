<!--<?php?> -->
<div class="article row mb">
    <div class="boxtrai mr ">

        <div class=" fl mb ">
            <div class="boxtitle">SẢN PHẨM <strong><?=$categoryName?></strong></div>
            <div class=" row boxcontent">
                <?php foreach($productList as $productList):?>
                <div class="boxsp mr">
                    <div class="row img"><img src="upload/<?php echo $productList['productImage'] ?>" alt="" /></div>
                    <p><?php echo $productList['productPrice']?></p>
                    <a
                        href="index.php?act=ctsanpham&idsp=<?php echo $productList['id']?>"><?php echo $productList['productName']?></a>
                </div>
                <?php endforeach?>
            </div>
        </div>

    </div>
    <div class="boxphai">
        <?php include "boxright.php";?>
    </div>
</div>