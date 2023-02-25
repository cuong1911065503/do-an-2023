<div class="row">
    <div class="row frmtitle">
        <h1>DANH MỤC SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
            <tr>
                <th></th>
                <th>Mã Loại</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Hình Ảnh</th>
                <th>Lượt Xem</th>
                <th></th>
            </tr>
            <?php
            foreach($listsanpham as $sanpham){
                extract($sanpham);
                $suasanpham = "index.php?act=suasanpham&id=".$id;
                $xoasanpham = "index.php?act=xoasanpham&id=".$id;
                echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$img.'</td>
                <td>'.$gia.'</td>
                <td>'.$luotxem.'</td>
                <td><a href="'.$suadanhmuc.'"><input type="button" value="Sửa"></a> <a href="'.$xoadanhmuc.'"><input type="button" value="Xóa"></a></td>
                </tr>';
            }
            ?>
            
            </table>
        </div>
            <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ Chọn">
            <input type="button" value="Xóa Các mục đã chọn">
            <a href="#"><input type="button" value="Nhập Thêm"></a>
        </div>
    </div>
</div>

<style>
.frmdsloai table{
    width: 100%;
    border-collapse: collapse;
}
.frmdsloai table th{
    padding: 20px;
    background-color: #CCC;
}
.frmdsloai table th:nth-child(2){
    width: 30%;
    background-color: #CCC;
}
.frmdsloai table th:nth-child(3){
    width: 40%;
    background-color: #CCC;
}
.frmdsloai table th:nth-child(4){
    width: 20%;
    background-color: #CCC;
}
.frmdsloai table td{
    padding: 10px 20px;
    border: 1px #CCC solid;
}
</style>