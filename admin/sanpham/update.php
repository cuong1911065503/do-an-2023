<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
    <div class="row frmtitle">
        <h1>Cập Nhập Loại Hàng</h1>
    </div>
    <div class="row frmcontent">
    <form action="index.php?act=updatesanpham" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Mã Sản Phẩm <br>
                <input type="text" name="masp" disabled>
            </div>
            <div class="row mb10">
                Tên Sản Phẩm <br>
                <input type="text" name="tensp">
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="giasp">
            </div>
            <div class="row mb10">
                Hình Ảnh <br>
                <input type="file" name="hinh" id="">
            </div>
            <div class="row mb10">
                Mô Tả <br>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="capnhat" value="Cập Nhật">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listsanpham"><input type="button" value="Danh Sách"></a>
            </div>
            <?php
                if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>  