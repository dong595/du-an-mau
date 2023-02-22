<?php 

    function insert_danhmuc($tenloai){
        $sql = "INSERT INTO category (categoryName) VALUES ('$tenloai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql = "DELETE FROM category where id = ".$_GET['id'];
        pdo_execute($sql);
    }
    function loadALL_danhmuc(){
        $sql = "SELECT * FROM category order by categoryName";
        $categoryList = pdo_query($sql);
    return $categoryList;
    }
    function loadALL_danhmuc_home(){
        $sql = "SELECT * FROM category order by id desc ";
        $categoryList = pdo_query($sql);
    return $categoryList;
    }
    function loadOne_danhmuc($id){
        $sql = "select * from category  where id  = " . $_GET['id'];
        $categoryList = pdo_query_one($sql);
    return $categoryList;
    }
    function update_danhmuc($id,$tenloai){
        $sql = "update category set categoryName = '".$tenloai."' where id = ".$id;
        pdo_execute($sql);
    }
?>