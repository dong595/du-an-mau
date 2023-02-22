<?php
       function insert_user($userName,$userEmail,$userPassword){
        $sql = "INSERT INTO users (userName,userEmail,userPassword) VALUES ('$userName','$userEmail','$userPassword')";
        pdo_execute($sql);
     
    }
    function check_user($userName,$userPassword){
        $sql = "select * from users  where userName  = '" .$userName."' and userPassword = '".$userPassword."'" ;
        $productList = pdo_query_one($sql);
    return $productList;
    }
    function update_user($id,$userName,$userEmail,$userPassword,$userAddress,$userPhone){
        $sql="UPDATE  users SET userName = '$userName',userEmail = '$userEmail',userPassword = '$userPassword',userAddress='$userAddress',userPhone = $userPhone where userId = ".$id;
        pdo_execute($sql);
    }
    function update_user_admin($id,$userName,$userEmail,$userPassword,$userAddress,$userPhone,$userRole){
        $sql="UPDATE  users SET userName = '$userName',userEmail = '$userEmail',userPassword = '$userPassword',userAddress='$userAddress',userPhone = $userPhone ,userRole = '$userRole' where userId = $id ";
        pdo_execute($sql);
    }
    function forgot_password($id,$userEmail,$userPassword){
    $sql = 'UPDATE users SET userPassword = "'.$userPassword.' where userEmail = "'.$userEmail.'" AND userId ="'.$id.'"';
    pdo_execute($sql);
    } function loadALL_user(){
        $sql = "SELECT * FROM users order by userID desc";
        $userList = pdo_query($sql);
    return $userList;
    }
    function loadOne_user($id){
        $sql = "select * from users  where userId  = " . $_GET['id'];
        $userList = pdo_query_one($sql);
    return $userList;
    }
    function delete_user($id){
        $sql = "DELETE FROM users where userId = ".$_GET['id'];
        pdo_execute($sql);
    }
?>