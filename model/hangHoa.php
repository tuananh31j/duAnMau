<?php
// list hàng hóa
function list_hang_hoa() {
    
    $sql = "select * from hangHoa";
    return pdo_query($sql);
}



function list_hang_hoa_loai($id) {
    
    $sql = "select * from hangHoa where maLoai = ".$id;
    return pdo_query($sql);
}




function list_hang_hoa_id($id) {
    $sql = "select * from hangHoa where maHangHoa = ?";
    return pdo_query($sql, $id);
}
function list_hang_hoa_name($keyword) {
    $sql = "SELECT * FROM hangHoa WHERE tenHangHoa LIKE '%".$keyword."%'";
    return pdo_query($sql);
}

function listHangHoaMoiNhat() {
    $sql = "select * from hangHoa order by maHangHoa desc";
    return pdo_query($sql);
    
}

function selectHangHoa_id_name($kw = '',$id = 0) {
    $sql = "select * from hangHoa where 1";
    if($kw != '') {
        $sql .= "and tenHangHoa like '%".$kw."%'";
    }
    if($id > 0) {
        $sql .="and maLoai = ".$id;
    }
    return pdo_query($sql);
}




?>