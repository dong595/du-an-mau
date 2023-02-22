<?php
      function insert_comment($content,$idUser,$idPro,$date){
        $sql = "INSERT INTO comment (content,idUser,idPro,ngay) VALUES ('$content','$idUser',$idPro,'$date')";
        pdo_execute($sql);
    }
    function loadALL_comment($idPro){
        $sql = "SELECT * FROM comment where idPro = $idPro ";
        $commentList = pdo_query($sql);
    return $commentList;
    }
    function delete_comment($id){
        $sql = "DELETE FROM comment where id = ".$_GET['id'];
        pdo_execute($sql);
    }
?>