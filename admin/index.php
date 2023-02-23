<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "header.php";
    // controller

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act){
            case 'adddanhmuc':
                // kiểm tra người dùng có nhấn vào nút add hay không

                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm Thành Công";
                }

                include "danhmuc/add.php";
                break;
            case 'listdanhmuc':
                    $listdanhmuc=loadAll_danhmuc($sql);

                    include "danhmuc/list.php";
                    break;

            case'xoadanhmuc':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    # code...
                    delete_danhmuc($_GET['id']);
                }
                    $listdanhmuc=loadAll_danhmuc($sql);
                    include "danhmuc/list.php";
                    break;

                case'suadanhmuc':
                    if (isset($_GET['id'])&&($_GET['id']>0)) {
                        $dm=loadOne_danhmuc($_GET['id']);
                    }
                    include "danhmuc/update.php";
                    break;

                case'updatedanhmuc':

                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $tenloai=$_POST['tenloai'];
                        $id=$_POST['id'];
                        $update_danhmuc($id,$tenloai);
                        $thongbao="Cập Nhật Thành Công";
                    }
                    $listdanhmuc=loadAll_danhmuc($sql);
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