<?php
function insert_hanghoa($tenHangHoa,$donGia,$giamGia,$anh,$ngayNhap,$maLoai,$soLuotXem,$moTa){
    $sql = "insert into hanghoa(tenHangHoa,donGia,giamGia,anh,ngayNhap,maLoai,soLuotXem,moTa) values('$tenHangHoa','$donGia','$giamGia','$anh','$ngayNhap','$maLoai','$soLuotXem','$moTa')";
    pdo_execute($sql);
}
function delete_hanghoa($maHangHoa){
    $sql = "delete from hanghoa where maHangHoa=".$maHangHoa;
    pdo_execute($sql);
}
function loadall_hanghoa(){
    $sql = "select * from hanghoa order by maHangHoa desc";
    $listhanghoa = pdo_query($sql);
    return $listhanghoa;
}
function loadone_hanghoa($maHangHoa){
    $sql = "select * from hanghoa where maHangHoa=".$maHangHoa;
    $dm= pdo_query_one($sql);
    return;
}
function update_hanghoa($maHangHoa,$tenHangHoa,$donGia,$giamGia,$anh,$ngayNhap,$maLoai,$soLuotXem,$moTa){
    if($anh!=""){
        $sql = "update hanghoa set tenHangHoa='".$tenHangHoa."', donGia='".$donGia."', giamGia='".$giamGia."', anh='".$anh."', ngayNhap='".$ngayNhap."', maLoai='".$maLoai."', soLuotXem='".$soLuotXem."', moTa='".$moTa."' where maHangHoa=".$maHangHoa;
    }
    else{
        $sql = "update hanghoa set tenHangHoa='".$tenHangHoa."', donGia='".$donGia."', giamGia='".$giamGia."', ngayNhap='".$ngayNhap."', maLoai='".$maLoai."', soLuotXem='".$soLuotXem."', moTa='".$moTa."' where maHangHoa=".$maHangHoa;
    }
    
    pdo_execute($sql);
}

?>