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
    return pdo_query_one($sql, $id);
}

function listHangHoaMoiNhat() {
    $sql = "select * from hangHoa order by maHangHoa desc";
    return pdo_query($sql);
    
}




?>