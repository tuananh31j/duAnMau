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

//danh sach loai hang mới nhất
function listLoaiHang_DESC() {
    $sql = "select * from loai order by maLoai desc";
    return pdo_query($sql);
}

//danh sach loai hang cũ nhất
function listLoaiHang_ASC() {
    $sql = "select * from loai order by maLoai asc";
    return pdo_query($sql);
}

//danh sách tên loại hàng
function list_tenLoai() {
    $sql = "select tenLoai from loai";
    return pdo_query($sql);
}


//chon loại hang theo id
function selectLoaiHang_id($id) {
    $sql = "select * from loai where maLoai = $id";
    return pdo_query_one($sql);
}

//tìm loại hang theo tên
function selectLoaiHang_name($name) {
    $sql = "select * from loai where tenLoai = $name";
    return pdo_query_one($sql);
}



//chinh sua loai hang
function updateLoaiHang($tenLoaiMoi, $id) {
    $sql = "update loai set tenLoai = ? where maLoai = ?";
    pdo_execute($sql,$tenLoaiMoi, $id);
}


//xoa loai hang
function deleteLoaiHang($id) {
    $sql = "delete from loai where maLoai = $id";
    pdo_execute($sql);
}
?>