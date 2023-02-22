<div class="article row mb">
    <div class="boxtrai mr">
        <div class="row bl">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="view/images/banner.jpg" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="view/images/user.png" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="view/images/banner.jpg" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <div class="button-slideshow">
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <div class="boxsp mr">
                <div class="row img"><img src="./images/user.png" alt="" /></div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsp mr">
                <div class="row img"><img src="./images/user.png" alt="" /></div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsp mr">
                <div class="row img"><img src="./images/user.png" alt="" /></div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsp mr">
                <div class="row img"><img src="./images/user.png" alt="" /></div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsp mr">
                <div class="row img"><img src="./images/user.png" alt="" /></div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsp mr">
                <div class="row img"><img src="./images/user.png" alt="" /></div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsp mr">
                <div class="row img"><img src="./images/user.png" alt="" /></div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsp mr">
                <div class="row img"><img src="./images/user.png" alt="" /></div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsp mr">
                <div class="row img"><img src="./images/user.png" alt="" /></div>
                <p>$30</p>
                <a href="#">Đồng hồ</a>
            </div> -->
            <?php foreach($newProduct as $nProduct): ?>
            <div class="boxsp mr" style="display: flex;
                flex-direction: column;">
                <div class="row img"><img src="upload/<?php echo $nProduct['productImage'] ?>" alt="" /></div>
                <div class="boxsp-main" style="display: flex;
                     justify-content: space-around;
                     align-items: center;">
                    <div class="boxsp-title">
                        <p><?php echo $nProduct['productPrice']?></p>
                        <a style="text-overflow:clip;   "
                            href="index.php?act=ctsanpham&idsp=<?php echo $nProduct['id']?>">
                            <p style="  white-space: nowrap;  overflow: hidden;
                            text-overflow: ellipsis;
                            width: 80px;"><?php echo $nProduct['productName']?></p>
                        </a>
                    </div>
                    <div class="boxsp-form">
                        <form action="index.php?act=addToCart&&Code=<?php echo $nProduct['id']?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $nProduct['id']?>">
                            <input type="hidden" name="tensp" value="<?php echo $nProduct['productName']?>">
                            <input type="hidden" name="anhsp" value="<?php echo $nProduct['productImage']?>">
                            <input type="hidden" name="giasp" value="<?php echo $nProduct['productPrice']?>">
                            <input type="number" style="width: 40px;" name="quantity" min="1" value="1" size="2">
                            <input style="min-width: 30px; font-size:13px; text-align: center;" type="submit"
                                name="addToCart" value="Add">

                        </form>
                        <a href=""></a>
                    </div>
                </div>
            </div>
            <?php endforeach?>
        </div>
    </div>
    <div class=" boxphai">
        <?php include "boxright.php";?>
    </div>
</div>