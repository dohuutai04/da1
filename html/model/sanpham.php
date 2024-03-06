<?php
function insert_sanpham($tensp,$idmau,$idsize,$gia,$mota,$hinhanh,$iddm){
    $sql = "INSERT INTO sanpham(tensp,gia,mota,hinhanh,iddm) VALUES('$tensp', '$idmau', '$idsize', '$gia','$mota','$hinhanh','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($idsp){
    $sql = "DELETE FROM sanpham WHERE idsp=".$idsp;
    pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by idsp desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,5";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($keyw="",$iddm=0){
    $sql="select * from sanpham where 1";
    // where 1 tức là nó đúng
    if($keyw!=""){
        $sql.=" and name like '%".$keyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by iddm desc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function loadone_sanpham($idsp){
    $sql = "select * from sanpham where idsp = $idsp";
    $result = pdo_query_one($sql);
    return $result;
}
function load_sanpham_cungloai($idsp, $iddm){
    $sql = "select * from sanpham where iddm = $iddm and idsp <> $idsp";//<> là khác
    $result = pdo_query($sql);
    return $result;
}
    function loadone_sanpham_sp($idsp){
        $sql= "SELECT * FROM sanpham WHERE idsp=".$idsp;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_sanpham($idsp,$iddm,$idmau,$idsize,$tensp,$gia,$hinhanh,$mota){
        if($hinhanh!="")
            $sql = "UPDATE sanpham SET iddm='".$iddm."', tensp='".$tensp."', idmau='".$idmau."', idsize='".$idsize."', gia='".$gia."', hinhanh='".$hinhanh."', mota='".$mota."' WHERE idsp=".$idsp;
        else
            $sql = "UPDATE sanpham SET iddm='".$iddm."', tensp='".$tensp."', idmau='".$idmau."', idsize='".$idsize."', gia='".$gia."', mota='".$mota."' WHERE idsp=".$idsp;
        pdo_execute($sql);
    }
?>