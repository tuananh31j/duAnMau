<?php
function loadall_khachhang(){
    $sql = "select * from khachhang";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function insert_taikhoan($email,$tenKhachhang,$matKhau){
    $sql="insert into khachhang(email,tenKhachhang,matKhau) values('$email','$tenKhachhang','$matKhau')";
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

function update_khachhang($maKhachhang,$tenKhachhang,$matKhau,$email,$diaChi){
    $sql = "update khachhang set tenKhach$tenKhachhang='".$tenKhachhang."', ma$matKhau='".$matKhau."', email='".$email."', diaChi='".$diaChi."' where maKhachhang=".$maKhachhang;
    pdo_execute($sql);
}
?>