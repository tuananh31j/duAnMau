function noti_signup() {
    alert('đăng ký thành công! Quay trở lại đăng nhập?')
}

function noti_update_ac() {
    alert("Cập nhật tài khoản thành công! Quay về trang chủ?");
}

function noti_update_HH() {
    alert('Cập nhật thành công! Quay lại danh sách?')
}

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

let maKhachHang = document.getElementById("maKhachHang");
let maHangHoa = document.getElementById("maHangHoa");
let maBinhLuan = document.getElementById("maBinhLuan");

function setColor(element) {
    element.classList.toggle("bg-secondary");
}


let tagNames = document.querySelectorAll("[name='box[]']");
let btnDeleteAll = document.querySelector(".btn_Delete_All");
let btnCheckAll = document.querySelector("#btn_Check_All");
let isCheckAll = false;



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

