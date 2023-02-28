<?php
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "view/header.php";
    include "global.php";

    $spnew=loadAll_sanpham_home();
    $dsdm=loadAll_danhmuc();

        if((isset($_GET['act']))&&($_GET['act']!="")){
            $act=$_GET['act'];
            switch ($act) {
                case 'gioithieu':
                    # code...
                    include "view/gioithieu.php";
                    break;
                case 'lienhe':
                    include "view/lienhe.php";
                    break;
                case 'gopy':
                    include "view/gopy.php";
                    break;
                default:
                    # code...
                    include "view/home.php";
                    break;
            }
        }else{
            include "view/home.php";
        }
    include "view/footer.php";
?>