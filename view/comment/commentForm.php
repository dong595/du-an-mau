<?php 
    session_start();
    include '../../model/pdo.php';
    include '../../model/comment.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $idPro = $_REQUEST['idPro'];
      }
      $commentList = loadALL_comment($idPro);
     $idUser = $_SESSION['user']['userId'];
     
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="fl mb">
        <div class="boxtitle">Bình luận</div>
        <div class="boxcontent ">
            <?php foreach($commentList as $cmtList): ?>
            <div style="display:flex;   justify-content: space-between; margin-top:10px;">
                <p><?php echo $cmtList['content']?></p>
                <div style="display:flex; ">
                    <p><strong><?php echo $cmtList['idUser']?></strong></p>,
                    <p><?php echo $cmtList['ngay']?></p>
                </div>
            </div>
            <?php endforeach?>
        </div>

        <?php  if(isset($idUser)){?>
        <div class=" boxfooter searbox">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">

                <input type="text" name="content" />
                <input type="hidden" name="idPro" value="<?php echo $idPro?>">
                <input type="submit" value="Gửi" name="send">
            </form>
        </div>
        <?php }else{?><?php echo 'vui lòng đăng nhập để bình luận';} ?>
        <?php 
        if(isset($_POST['send'])&&($_POST['send'])){
            
            $content = $_POST['content'];
            $idUser = $_SESSION['user']['userId'];
            $idPro = $_POST['idPro'];
            $date = date('h:i:sa d/m/Y');
            // var_dump($_POST);die;
            // var_dump($_POST);die;
            insert_comment($content,$idUser,$idPro,$date);
            header("location:". $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
</body>

</html>