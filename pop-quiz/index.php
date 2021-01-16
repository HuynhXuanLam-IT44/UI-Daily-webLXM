<?php
include("header.php");
?>
    <div class="main">
        <div class="">
            <h2>Hien thi tat ca thong tin hoa don</h2>
            <hr>
            <table class="product-details">
                <tr>
                    <td class="label">MA CD</td>
                    <td class="label">MA KH</td>
                    <td class="label">Ten Phim</td>
                    <td class="label">The Loai</td>
                    <td class="label">So Tap</td>
                    <td class="label">Don Gia Thue</td>
                    <td class="label">So luong</td>
                    <td class="label">Ngay Thue</td>
                    <td class="label">Ngay Tra</td>
                    <td class="label">Thanh Tien</td>
                </tr>
                <?php foreach ($hoadon->getData() as $sanpham): ?>
                    <tr>
                        <td><?php echo $sanpham['maCD']; ?></td>
                        <td><?php echo $sanpham['maKH']; ?></td>
                        <td><?php echo $sanpham['tenphim']; ?></td>
                        <td><?php echo $sanpham['theloai']; ?></td>
                        <td><?php echo $sanpham['sotap']; ?></td>
                        <td><?php echo $sanpham['dongia']; ?></td>
                        <td><?php echo $sanpham['soluong']; ?></td>
                        <td><?php echo $sanpham['ngaythue']; ?></td>
                        <td><?php echo $sanpham['thanhtien']; ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </table>
        </div>
        <div class="cau-a">
            <hr>
            <h2>Hien thi tong phim theo the loai</h2>
            <table class="product-details">
                <tr>
                    <td class="label">The Loai</td>
                    <td class="label">Tong_Phim</td>
                </tr>
                <?php foreach ($hoadon->getPhimTheTheLoai() as $sanpham): ?>
                    <tr>
                        <td><?php echo $sanpham['Tong_Phim']; ?></td>
                        <td><?php echo $sanpham['theloai']; ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </table>
        </div>
        <div class="cau-b">
            <hr>
            <h2>Hien thi tong ngay thue theo khach hang</h2>
            <table class="product-details">
                <tr>
                    <td class="label">tong ngay thue</td>
                    <td class="label">ma KH</td>
                </tr>
                <?php foreach ($hoadon->getNgayThueTheoKhachHang() as $sanpham): ?>
                    <tr>
                        <td><?php echo $sanpham['tong_ngay_thue']; ?></td>
                        <td><?php echo $sanpham['maKH']; ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </table>
        </div>

        <div class="cau-d">
            <hr>
            <h2>Hien thi phim ma khach hang chua tra</h2>
            <table class="product-details">
                <tr>
                    <td class="label">ten phim</td>
                    <td class="label">ngay thue</td>
                    <td class="label">ngay tra</td>
                </tr>
                <?php foreach ($hoadon->getPhimChuaTra() as $sanpham): ?>
                    <tr>
                        <td><?php echo $sanpham['tenphim']; ?></td>
                        <td><?php echo $sanpham['ngaythue']; ?></td>
                        <td><?php echo $sanpham['ngaytra']; ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </table>
        </div>
    </div>

<?php
include("footer.php");
?>