<?php
function insert_binhluan($maBinhLuan,$noiDung,$ngayBinhLuan,$maHangHoa,$maKhachHang){
    $sql="insert into binhluan(maBinhLuan,noiDung,ngayBinhLuan,maHangHoa,maKhachHang) values('$maBinhLuan','$noiDung','$ngayBinhLuan','$maHangHoa','$maKhachHang')";
    pdo_execute($sql);
}
function loadall_binhluan($maHangHoa){
    $sql = "select * from binhluan where 1";
    if($maHangHoa>0) $sql.="AND maHangHoa='".$maHangHoa."'";
    $sql.=" order by maBinhLuan desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
?>