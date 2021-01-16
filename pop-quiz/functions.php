<?php

require('database/DBController.php');
require('database/khachhang.php');
require('database/hoadon.php');

$db = new DBController();

$khachhang = new Khachhang($db);

$hoadon = new Hoadon($db);
$hoadon_theloai = $hoadon->getPhimTheTheLoai();
