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
                    foreach($spnew as $sp){
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                    }
                ?>
                <!-- <li><a href="#">Laptop</a></li>
                <li><a href="#">MayTinh</a></li>
                <li><a href="#">DienThoai</a></li>
                <li><a href="#">Camera</a></li> -->
            </ul>
        </div>
        <div class="boxfooter searbox">
            <form action="#" method="post">
                <input type="text" name="" id="">
            </form>
        </div>
    </div>