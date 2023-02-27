<?php
function insert_sanpham($tenloai,$giasp,$hinh,$mota,$iddanhmuc){
    $sql="insert into sanpham(name,gia,img,mota,iddanhmuc) values('$tenloai','$giasp','$hinh','$mota','$iddanhmuc')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from sanpham where id=".$id;
    pdo_execute($sql);
}
function loadAll_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham; 
}
function loadOne_sanpham($id){
    $sql="select * from sanpham where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_sanpham($id,$iddanhmuc,$tensp,$giasp,$hinh,$mota){
    if($hinh!="")
        $sql="update sanpham set name='".$iddanhmuc."', name='".$tensp."', gia='".$giasp."', img='".$hinh."', mota='".$mota."' where id=".$id;
    else 
        $sql="update sanpham set name='".$iddanhmuc."', name='".$tensp."', gia='".$giasp."', mota='".$mota."' where id=".$id;
    pdo_execute($sql);
}

?>