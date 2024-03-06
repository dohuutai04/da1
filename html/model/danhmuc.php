<?php
function loadall_danhmuc(){
    $sql="select * from danhmuc order by iddm desc";
    $listdanhmuc=pdo_query($sql);
    return  $listdanhmuc;
}
    function insert_danhmuc($tendm){
        $sql = "INSERT INTO danhmuc(tendm) VALUES('$tendm')";
        pdo_execute($sql);
    }
    function delete_danhmuc($iddm){
        $sql = "DELETE FROM danhmuc WHERE iddm=".$iddm;
        pdo_execute($sql);
    }
    function loadone_danhmuc($iddm){
        $sql= "select * from danhmuc where id=".$iddm;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($iddm,$tendm){
        $sql = "UPDATE danhmuc SET name='".$tendm."' WHERE iddm=".$iddm;
        pdo_execute($sql);   
    }
    function load_ten_dm($iddm){
        if($iddm>0){
            $sql="select * from sanpham where id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $dm;
        }else{
            return "";
        }
    }
?>