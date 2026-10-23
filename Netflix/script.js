var danhSachPhim = [
    {
        id: 1,
        ten: "Cảnh sát trưởng Labrado",
        thoiLuong: 20,
        banner: "../anh/anh1.jpg",
        trailer: "https://www.youtube.com/embed/bBHouM1lwLo"

    id: 2,
        ten: "Zootopia",
        thoiLuong: 15,
        banner: ""
    }
]

function xemTrailer() {
    // Ẩn banner đi
    document.getElementsByClassName("banner")[0].style = "display:none";
    // Hiển thị trailer
    document.getElementsByClassName("banner")[1].style = "display:block";

}