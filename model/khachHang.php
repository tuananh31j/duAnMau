<?php
function addKhachHang($email,$tenKhachHang,$matKhau) {
    $sql = 'insert into khachHang(email, tenKhachhang, matKhau) values(?, ?, ?)';
    pdo_execute($sql,$email,$tenKhachHang,$matKhau);
}

function checkUser($tenKhachHang,$matKhau) {
    $sql = 'select * from khachHang where tenKhachHang =? and matKhau = ?';
    return pdo_query_one($sql,$tenKhachHang,$matKhau);
}

function getPass($tenKhachHang,$email) {
    $sql = 'select * from khachHang where tenKhachHang =? and email = ?';
    return pdo_query_one($sql,$tenKhachHang,$email);
}

function updateUser($tenKhachHang, $matKhau, $anh, $email, $maKhachHang) {
    $sql = "update khachHang set tenKhachHang = ?, matKhau = ?, anh = ?, email = ? where maKhachHang = ?";
    pdo_execute($sql, $tenKhachHang, $matKhau, $anh, $email, $maKhachHang);
}
?>