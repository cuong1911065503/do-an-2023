<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">Giỏ Hàng</div>
            <div class="row mb10 frmdsloai">
                <table>
                    <tr>
                        <th>hình</th>
                        <th>sản phẩm</th>
                        <th>đơn giá</th>
                        <th>số lượng</th>
                        <th>thành tiền</th>
                        <th>thao tác</th>
                    </tr>
                    <?php 
                    $tong=0;
                        foreach($_SESSION['mycart'] as $cart){
                            $hinh=$img_path.$cart[2];
                            $ttien=$cart[3]*$cart[4];
                            $tong+=$ttien;
                            echo '<tr>
                                    <td><img src="'.$hinh.'" alt="" height="80px"></td>
                                    <td>'.$cart[1].'</td>
                                    <td>'.$cart[3].'</td>
                                    <td>'.$cart[4].'</td>
                                    <td>'.$ttien.'</td>
                                    <td><input type="button" value="xóa"></td>
                        </tr>';
                        }
                        echo '<tr>
                                <td colspan="4">Tong Don Hang</td>
                                
                                <td>'.$tong.'</td>
                                <td></td>
                    </tr>';
                    ?>
                </table>
            </div>
        </div>
        <div class="row mb bill">
            <input type="submit" value="Đồng Ý Đặt Hàng"><a href="index.php?act=delcart"><input type="button" value="Xóa Giỏ Hàng"></a>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php";?>
    </div>
</div>