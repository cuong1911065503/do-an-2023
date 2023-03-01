<div class="row mb">
        <div class="boxtitle">Tai Khoan</div>
        <div class="boxcontent formtaikhoan">
            <form action="#" method="post">

                <div class="row mb10">
                Tên Đăng Nhập:<br>
                <input type="text" name="user" id="">
                </div>

                <div class="row mb10">
                Mật Khẩu:<br>
                <input type="password" name="pass" id="id">
                </div>

                <div class="row mb10">
                <input type="checkbox" name="" id="">
                Ghi Nhớ Tài Khoản <br>
                </div>

                <div class="row mb10">
                <input type="submit" value="dang nhap">
                </div>
                
            </form>
            <li>
                <a href="#">Quên Mật Khẩu</a>
            </li>
            <li>
                <a href="#">Đăng Ký</a>
            </li>
        </div>
    </div>
    <div class="row mb">
        <div class="boxtitle">Danh Mục</div>
        <div class="boxcontent2 menudoc">
            <ul>
                <?php
                     foreach($dsdm as $dm){
                         extract($dm);
                         $linkdm="index.php?act=sanpham&iddanhmuc=".$id;
                         echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                     }
                ?>
            </ul>
        </div>
        <div class="boxfooter searbox">
            <form action="index.php?act=sanphamct" method="post">
                <input type="text" name="kyw">
                <input type="submit" name="timkiem" value="Tìm kiếm">
            </form>
        </div>
    </div>
    <style>
    .boxtitle{
        background-color: wheat;
        
    }
</style>
