<?php


class Hoadon
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) {
            return null;
        }
        $this->db = $db;
    }

    public function getData($table = 'hoadon')
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getPhimTheTheLoai($table = 'hoadon')
    {
        $result = $this->db->con->query("SELECT COUNT(maCD) AS Tong_Phim, theloai FROM hoadon ORDER BY theloai");
        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getNgayThueTheoKhachHang($table = 'hoadon'){
        $result = $this->db->con->query("SELECT COUNT(DATEDIFF(@ngaythue, @ngaytra )) AS tong_ngay_thue, maKH FROM {$table} GROUP BY maKH");
        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getPhimChuaTra($table = 'hoadon'){
        $result = $this->db->con->query("SELECT tenphim, ngaythue, ngaytra FROM {$table} WHERE ngaytra>NOW()");
        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

}