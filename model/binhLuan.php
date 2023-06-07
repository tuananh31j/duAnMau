<?php
//danh sach binh luan
function listBinhLuan(){
    $sql = "select * from binhLuan";
    return pdo_query($sql);
}

//danh sách bình luận mới nhất
function listBinhLuan_desc() {
    $sql = "select * from binhLuan order by maBinhLuan";
    return pdo_query($sql);
}


//danh sách bình luận cũ nhất
function listBinhLuan_asc() {
    $sql = "select * from binhLuan order by maBinhLuan asc";
    return pdo_query($sql);
}

//nhóm bình luận theo các khách hàng
function listBinhLuan_KH() {
    $sql = "select * from binhLuan order by maKhachHang ";
    return pdo_query($sql);
}

//nhóm bình luận theo các hàng hóa
function listBinhLuan_HH() {
    $sql = "select * from binhLuan order by maHangHoa";
    return pdo_query($sql);
}

//xóa bình luận
function delete_cmt($id) {
    $sql ="delete from binhLuan where maBinhLuan = $id";
    pdo_execute($sql);
}

?>