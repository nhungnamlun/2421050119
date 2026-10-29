var danhSachPhim = [
    {
        id: 0,
        ten: "Cảnh sát trưởng Labrado",
        thoiLuong: 20,
        banner: "anhNetflix/anhTrailer.jpg",
        trailer: "https://www.youtube.com/embed/bBHouM1lwLo"
    },

    {
        id: 1,
        ten: "Zootopia",
        thoiLuong: 15,
        banner: "anhNetflix/anh-h1-1.jpg",
        trailer:"https://www.youtube.com/embed/GxNMcEFVzkw"
    },
    {
        id: 2,
        ten: "Zootopia",
        thoiLuong: 15,
        banner: "anhNetflix/anh-h1-1.jpg",
        trailer:"https://www.youtube.com/embed/zepHPnUDROE?si=qqvnPIBk4Ctvfr5J" 
    },
    {
        id: 3,
        ten: "Zootopia",
        thoiLuong: 15,
        banner: "anhNetflix/anh-h1-1.jpg",
        trailer:"https://www.youtube.com/embed/NbKCJtFkQ4s?si=2BtvX90N1Nk52IkE"
    },
    {
        id: 4,
        ten: "Zootopia",
        thoiLuong: 15,
        banner: "anhNetflix/anh-h1-1.jpg",
        trailer:"https://www.youtube.com/embed/_XX248bq6Pw?si=nV8G9TBeemYobIb-" 
    },
    {
        id: 5,
        ten: "Zootopia",
        thoiLuong: 15,
        banner: "anhNetflix/anh-h1-1.jpg",
        trailer:"https://www.youtube.com/embed/9WLb1qf2kK4?si=1Ovhw7SM3pMOS_oM"
    },
    {
        id: 6,
        ten: "Zootopia",
        thoiLuong: 15,
        banner: "anhNetflix/anh-h1-1.jpg",
        trailer:"https://www.youtube.com/embed/GxNMcEFVzkw"
    },
    {
        id: 7,
        ten: "Zootopia",
        thoiLuong: 15,
        banner: "anhNetflix/anh-h1-1.jpg",
        trailer:"https://www.youtube.com/embed/GxNMcEFVzkw"
    }

]

function xemTrailer() {
    // Ẩn banner đi
    document.getElementsByClassName("banner")[0].style = "display:none";
    // Hiển thị trailer
    document.getElementsByClassName("banner")[1].style = "display:block";
}

function chonTrailer(id){
    for (let i= 0; i< danhSachPhim.length; i++){
        if(danhSachPhim[i].id == id){
            document.getElementsByClassName("banner-img")[0].src = danhSachPhim[i].banner + ".jpg";
            document.getElementsByTagName("iframe")[0].src = danhSachPhim[i].trailer;
            xemTrailer();
        }
    }
}
