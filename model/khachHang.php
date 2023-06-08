<?php
//đăng ký KH
function addKhachHang($email,$tenKhachHang,$matKhau) {
    $sql = 'insert into khachHang(email, tenKhachhang, matKhau) values(?, ?, ?)';
    pdo_execute($sql,$email,$tenKhachHang,$matKhau);
}

function addKhachHang_ad($tenKhachHang, $matKhau, $email, $anh, $vaiTro  ) {
    $sql = 'insert into khachHang(email, tenKhachhang, matKhau, anh, vaiTro) values(?, ?, ?,?,?)';
    pdo_execute($sql,$email,$tenKhachHang,$matKhau, $anh, $vaiTro);
}

//danh sach khach hang
function listKhachHang(){
    $sql= "select * from khachHang";
    return pdo_query($sql);
}

//danh sách khách hàng mới nhất
function listKhachHang_DESC(){
    $sql= "select * from khachHang order by maKhachHang desc";
    return pdo_query($sql);
}


//danh sách khách hàng cũ nhất
function listKhachHang_ASC(){
    $sql= "select * from khachHang order by maKhachHang asc";
    return pdo_query($sql);
}

//danh sách members
function listMember(){
    $sql= "select * from khachHang where vaiTro = 0";
    return pdo_query($sql);
}

//danh sách admin
function listAdmin(){
    $sql= "select * from khachHang where vaiTro = 1";
    return pdo_query($sql);
}

//chọn khách hàng theo id
function selectKhachHang_id($id){
    $sql= "select * from khachHang where maKhachHang = $id";
    return pdo_query_one($sql);
}
//xóa khách hàng
function deleteKhachHang($id){
    $sql = "delete from khachHang where maKhachHang = $id";
    pdo_execute($sql);
}

//check người dùng
function checkUser($email,$matKhau) {
    $sql = 'select * from khachHang where email =? and matKhau = ?';
    return pdo_query_one($sql,$email,$matKhau);
}

//lấy mật khẩu
function getPass($tenKhachHang,$email) {
    $sql = 'select * from khachHang where tenKhachHang =? and email = ?';
    return pdo_query_one($sql,$tenKhachHang,$email);
}

//cập nhật bài khoản bên người dùng
function updateUser($tenKhachHang, $matKhau, $anh, $email, $maKhachHang) {
    $sql = "update khachHang set tenKhachHang = ?, matKhau = ?, anh = ?, email = ? where maKhachHang = ?";
    pdo_execute($sql, $tenKhachHang, $matKhau, $anh, $email, $maKhachHang);
}

//cập nhập tài khoản bên admin
function updateUser_ad($tenKhachHang, $matKhau, $anh, $email,$kichHoat, $vaiTro, $maKhachHang) {
    $sql = "update khachHang set tenKhachHang = ?, matKhau = ?, anh = ?, email = ?, kichHoat = ?, vaiTro = ? where maKhachHang = ?";
    pdo_execute($sql, $tenKhachHang, $matKhau, $anh, $email,$kichHoat, $vaiTro, $maKhachHang);
}
?>