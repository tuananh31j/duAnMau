<?php
function loadall_khachhang(){
    $sql = "select * from khachhang";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function insert_khachhang($tenKhachHang,$matKhau,$email,$diaChi,$vaiTro){
    $sql="insert into khachhang(tenKhachhang,matKhau,email,diaChi,vaiTro) values('$tenKhachHang','$matKhau','$email','$diaChi','$vaiTro')";
    pdo_execute($sql);
}
function checktenkhachhang($tenKhachhang,$matKhau){
    $sql = "select * from khachhang where tenkh$tenKhachhang='".$tenKhachhang."' AND m$matKhau='".$matKhau."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function checkemail($email){
    $sql = "select * from khachhang where email='".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_khachhang($maKhachHang,$tenKhachHang,$matKhau,$email,$diaChi,$vaiTro){
    $sql = "update khachhang set tenKhachHang='".$tenKhachHang."', matKhau='".$matKhau."', email='".$email."', diaChi='".$diaChi."',  vaiTro='".$vaiTro."' where maKhachHang=".$maKhachHang;
    pdo_execute($sql);
}
function delete_khachhang($maKhachHang){
    $sql = "delete from khachhang where maKhachHang=".$maKhachHang;
    pdo_execute($sql);
}
?>