<div class="row mb ">
    <div class="boxtrai mr">
    <div class="row mb">
    
        <div class="boxtitle">Dang ky thanh vien</div>
        <div class="row boxcontent formtaikhoan">
            <form action="index.php?act=dangky" method="post">
                <div class="row mb10">
                    Gmail
                    <input type="email" name="email">
                </div>
                <div class="row mb10">
                    Ten Dang Nhap
                    <input type="text" name="user">
                </div>
                <div class="row mb10">
                    Mat Khau
                    <input type="password" name="pass">
                </div>
                <div class="row mb10">
                    <input type="submit" value="Dang ky" name="dangky">
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


        
    
        
    