<?php
//them loai hang
function addLoaiHang($tenLoai) {
    $sql = 'insert into loai(tenLoai) values(?)';
    pdo_execute($sql, $tenLoai);
}



//danh sach loai hang
function listLoaiHang() {
    $sql = "select * from loai";
    return pdo_query($sql);
}


//chon loai hang theo id
function selectLoaiHang_id($id) {
    $sql = "select * from loai where maLoai = $id";
    return pdo_query_one($sql);
}



//chinh sua loai hang
function updateLoaiHang($tenLoaiMoi, $id) {
    $sql = "update loai set tenLoai = ? where maLoai = ?";
    pdo_execute($sql,$tenLoaiMoi, $id);
}


//xoa loai hang
function deleteLoaiHang($id) {
    $sql = "delete from loai where maLoai = ?";
    pdo_execute($sql, $id);
}
?>