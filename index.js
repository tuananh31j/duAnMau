let maKhachHang = document.getElementById("maKhachHang");
let maHangHoa = document.getElementById("maHangHoa");
let maBinhLuan = document.getElementById("maBinhLuan");


let donGia = document.getElementById("donGia");
let soLuotXem = document.getElementById("soLuotXem");

let vaiTro = document.getElementById("vaiTro");

let maLoai = document.getElementById("maLoai");


let tagNames = document.querySelectorAll("[name='box[]']");
let btnDeleteAll = document.querySelector(".btn_Delete_All");
let btnCheckAll = document.querySelector("#btn_Check_All");
let isCheckAll = false;


let tK = document.getElementById("TK");
let navTK = document.getElementById("nav__thongKe");



function showMenuTK() {

    navTK.classList.toggle("d-none");
}

tK.addEventListener("click", showMenuTK);


//thông báo đăng ký tài khoản thành công
function noti_signup() {
    alert('đăng ký thành công! Quay trở lại đăng nhập?')
}

//thông báo chỉnh sủa tài khoản thành công
function noti_update_ac() {
    alert("Cập nhật tài khoản thành công! Quay về trang chủ?");
}

//thông báo cập nhật thành công
function noti_update_HH() {
    alert('Cập nhật thành công! Quay lại danh sách?')
}

//thông báo xác nhận người đùng muốn xóa
function noti_delete_all() {
    var result = confirm("Bạn có chắc chắn muốn xóa hết dữ liệu đã chọn không?");
    if (result) {
        alert("Đã xóa!");
        return true;
    } else {
        alert("Đã hủy!");

    }
    return false;
}

//đánh dấu
function setColor(element) {
    element.classList.toggle("bg-danger");
}

//chọn tất cả
function checkAll() {

    isCheckAll = !isCheckAll;
    tagNames.forEach(tag => {
        tag.checked = isCheckAll;
    })
    if (isCheckAll) {
        btnDeleteAll.classList.remove("opacity-25");
        btnDeleteAll.disabled = !isCheckAll;
    } else {
        btnDeleteAll.classList.add("opacity-25");
        btnDeleteAll.disabled = !isCheckAll;
    }
}




btnCheckAll.addEventListener("click", checkAll);




//chart

google.charts.setOnLoadCallback(drawChart);

