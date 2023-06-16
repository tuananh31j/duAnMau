<?php
// list hàng hóa

function listHangHoa() {
    
    $sql = "select * from hangHoa inner join loai on loai.maLoai = hangHoa.maLoai";
    return pdo_query($sql);
}

// list hàng hóa cũ nhất
function listHangHoa_ASC() {  
    $sql = "select * from hangHoa inner join loai on loai.maLoai = hangHoa.maLoai order by maHangHoa asc ";
    return pdo_query($sql);
}

//danh sách hàng hóa mới nhất
function listHangHoaMoiNhat() {
    $sql = "select hangHoa.maHangHoa as maHangHoa, hangHoa.tenHangHoa as tenHangHoa, hangHoa.donGia as donGia, hangHoa.anh as anh, hangHoa.ngayNhap as ngayNhap, hangHoa.maLoai as maLoai, hangHoa.dacBiet as dacBiet, hangHoa.soLuotXem as soLuotXem, left(hangHoa.moTa, 60) as moTa, loai.tenLoai as tenLoai, hangHoa.giamGia as giamGia from hangHoa inner join loai on loai.maLoai = hangHoa.maLoai order by maHangHoa desc limit 3";
    return pdo_query($sql);
    
}

function listHangHoaMoiNhat_ad() {
    $sql = "select * from hangHoa inner join loai on loai.maLoai = hangHoa.maLoai order by maHangHoa desc";
    return pdo_query($sql);
    
}

//đơn giá cao nhất
function listHangHoa_price_DESC() {
    $sql = "select * from hangHoa inner join loai on loai.maLoai = hangHoa.maLoai order by donGia desc";
    return pdo_query($sql);
    
}

//view cao nhất
function listHangHoa_view_DESC() {
    $sql = "select * from hangHoa inner join loai on loai.maLoai = hangHoa.maLoai order by soLuotXem desc";
    return pdo_query($sql);
    
}

//thêm hàng hóa
function addHangHoa($tenKhachHang, $donGia, $anh, $ngayNhap, $Loai, $moTa, $giamGia) {
    $sql = "insert into hangHoa(tenHangHoa, donGia, anh, ngayNhap, maLoai, moTa, giamGia) values(?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $tenKhachHang, $donGia, $anh, $ngayNhap, $Loai, $moTa, $giamGia);
}

//danh sach hang hóa theo mã loại
function list_hang_hoa_loai($id) {
    $sql = "select maHangHoa, tenHangHoa, donGia, anh, ngayNhap, maLoai, dacbiet, soLuotXem, left(moTa, 100) as moTa, giamGia from hangHoa where maLoai = $id";
    return pdo_query($sql);
}


//cập nhập hàng hóa
function updateHangHoa($tenHangHoa, $donGia, $anh, $ngayNhap, $Loai, $moTa, $giamGia, $maHangHoa) {
    $sql = "update hangHoa set tenHangHoa = ?, donGia = ?, anh = ?, ngayNhap = ?, maLoai = ?, moTa = ?, giamGia = ? where maHangHoa = ?";
    pdo_execute($sql,$tenHangHoa, $donGia, $anh, $ngayNhap, $Loai, $moTa, $giamGia, $maHangHoa);
}

//xóa hàng xóa theo ma hàng hóa
function deleteHangHoa($id) {
    $sql = "delete from hangHoa where maHangHoa = $id";
    pdo_execute($sql);
}

//details
//chọn hang hóa với id
function list_hang_hoa_id($id) {
    $sql = "select * from hangHoa where maHangHoa = ?";
    return pdo_query_one($sql, $id);
}

//chọn hàng hóa với keyword
function list_hang_hoa_name($keyword) {
    $sql = "select maHangHoa, tenHangHoa, donGia, anh, ngayNhap, maLoai, dacBiet, soLuotXem, left(moTa, 100) as moTa, giamGia from hangHoa WHERE tenHangHoa LIKE '%".$keyword."%'";
    return pdo_query($sql);
}





//hàm rút gọn tìm kiếm một trong id và keyword
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

//update  lượt xem qua mỗi lần click
function luotXem($id,$count) {
    $sql = "update hangHoa set soLuotXem = $count where maHangHoa = $id";
    pdo_execute($sql);
}


//top 10 yêu thích
function top10LuotXem() {
    $sql = "select maHangHoa, tenHangHoa, donGia, anh, ngayNhap, maLoai, dacBiet, soLuotXem, left(moTa, 100) as moTa, giamGia from hangHoa order by soLuotXem desc limit 10";
    return pdo_query($sql);
}



function list_thongKe_HH() {
    $sql = "SELECT hangHoa.maHangHoa as mHangHoa, hangHoa.tenHangHoa AS tHangHoa, loai.tenLoai as tLoai, COUNT(binhLuan.maBinhLuan) AS slBL, ";
   
    $sql .= "hangHoa.soLuotXem AS view ";
    $sql .= "FROM hangHoa INNER JOIN binhLuan ON binhLuan.maHangHoa = hangHoa.maHangHoa INNER JOIN loai on loai.maLoai = hangHoa.maLoai ";
    $sql .= "GROUP BY hangHoa.maHangHoa ORDER BY hangHoa.maHangHoa ASC";

    return pdo_query($sql);
}
?>