<div class="row mb ">
    <div class="boxtrai mr">
    <div class="row mb">
    
        <div class="boxtitle">Cập Nhật Tài Khoản</div>
        <div class="row boxcontent formtaikhoan">
            <?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
            ?>
            <form action="index.php?act=edit_taikhoan" method="post">
                <div class="row mb10">
                    Gmail
                    <input type="email" name="email" value="<?=$email?>">
                </div>
                <div class="row mb10">
                    Tên Đăng Nhập
                    <input type="text" name="user" value="<?=$user?>">
                </div>
                <div class="row mb10">
                    Mật Khẩu
                    <input type="password" name="pass" value="<?=$pass?>">
                </div>
                <div class="row mb10">
                    Địa Chỉ
                    <input type="text" name="address" value="<?=$address?>">
                </div>
                <div class="row mb10">
                    Số Điện Thoại
                    <input type="text" name="tel" value="<?=$tel?>">
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" value="Cập Nhật" name="capnhat">
                    <input type="reset" value="Nhap lai">
                </div>
                
            </form>
            <h2 class="thongbao">
            <?php
                if (isset($thongbao)&&($thongbao!="")) {
                    # code...
                    echo $thongbao;
                }
            ?>
            </h2>
        </div>
    </div>

    
    </div>
        <div class="boxphai ">
            <?php include "view/boxright.php"; ?>
    </div>
</div>


        
    
        
    