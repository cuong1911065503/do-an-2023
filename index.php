<?php
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "view/header.php";
    include "global.php";

    $spnew=loadAll_sanpham_home();
    $dsdm=loadAll_danhmuc();
    $dssp=loadAll_sanpham();

        if((isset($_GET['act']))&&($_GET['act']!="")){
            $act=$_GET['act'];
            switch ($act) {
                case 'sanpham':
                    if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                        $kyw=$_POST['kyw'];
                    }else{
                        $kyw="";
                    }
                    if(isset($_GET['iddanhmuc'])&&($_GET['iddanhmuc']>0)){
                        $iddanhmuc=$_GET['iddanhmuc'];
                    }else{
                        $iddanhmuc=0;
                    }
                    $dssp=loadAll_sanpham($kyw,$iddanhmuc);
                    $tendm=load_ten_danhmuc($iddanhmuc);
                    include "view/sanpham.php";
                    break;
                case 'sanphamct':
                    
                    if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                        $id=$_GET['idsp'];
                        $onesp=loadOne_sanpham($id);
                        extract($onesp);
                        $sp_cung_loai=load_sanpham_cungloai($id,$iddanhmuc);
                        # code...
                        include "view/sanphamct.php";
                    }else{
                        include "view/home.php";
                    }
                    break;
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