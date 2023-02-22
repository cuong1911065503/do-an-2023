<?php
    include "../model/pdo.php";
    include "header.php";
    // controller

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act){
            case 'adddanhmuc':
                // kiểm tra người dùng có nhấn vào nút add hay không

                if(isset($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    $sql="insert into danhmuc(name) values('$tenloai')";
                    pdo_execute($sql);
                    $thongbao="Thêm Thành Công";
                }

                include "danhmuc/add.php";
                break;
                case 'listdanhmuc':

                    $sql="select * from danhmuc order by name";
                    $listdanhmuc=pdo_query($sql);

                    include "danhmuc/list.php";
                    break;
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }

    include "home.php";
    include "footer.php";
?>