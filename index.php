<?php
include "model/pdo.php";

include "view/header.php";



if(isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'about':
            include "view/aboutUs/aboutUs.php";
            break;
        case 'contact':
            include "view/contact/contact.php";
            break;
        case 'listLH':
            $sqlLH = "select * from loai";
            $sqlSP = "select * from hangHoa";
            $dataLH = pdo_query($sqlLH);
            $targetSP = pdo_query($sqlSP);

            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "select * from hangHoa where maLoai = ?";
                $targetSP = pdo_query($sql, $id);
            }
            
            include "view/listLH/listLH.php";
            break;
        case 'detailsSP':
            $sqlLH = "select * from loai";
            
            $dataLH = pdo_query($sqlLH);
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "select * from hangHoa where maHangHoa = ?";
                $sqls = "select * from hangHoa where maLoai = ?";
                $targetSP = pdo_query($sqls, $id);
                $targetSP_id = pdo_query_one($sql, $id);
            }
            include "view/productDetails/details.php";
            break;
            
    }
}else{
    $sql = "select * from hangHoa order by maHangHoa desc";
    $newProduct = pdo_query($sql);
    $sqlLH = "select * from loai";
    
    $dataLH = pdo_query($sqlLH);
    include "view/home.php";
}


include "view/footer.php";

?>