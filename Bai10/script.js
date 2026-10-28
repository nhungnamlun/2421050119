danhSachVid = [
    {
        id:1,
        ten:"Hoa sữa, cốm và em...Em có đến cùng mùa thu? 🍃🍂 𝐏𝐥𝐚𝐲𝐥𝐢𝐬𝐭 Nhạc Chill Nhẹ Nhàng Mùa Thu Hà Nội",
        duongDanAnh:"../anh/anh-h1-1.jpg",
        duongDanYoutube:"https://www.youtube.com/embed/aVEK7QY_CdM?si=_AkSVwDN2C4imXS4",
    },

    {
        id:2,
        ten:"KHÔNG MÔN ĐĂNG HỘ ĐỐI (Hot Trend) – Tại hai ta không môn... | Những Bản Hits Nhạc Trẻ Chill 2026",
        duongDanAnh:"../anh/anh-h1-2.jpg",
        duongDanYoutube:"https://www.youtube.com/embed/TumUVHEkfFw?si=atEaSDFq0IRheaDu",
    },

    {
        id:3,
        ten:"Playlist Top Hits Tinh Hà Say Hi Hay Nhất: Thế Giới Của Anh, Secret, Có Gì Đâu Mà Cay,...",
        duongDanAnh:"../anh/anh-h1-3.jpg",
        duongDanYoutube:"https://www.youtube.com/embed/bcyFIVQ222M?si=iOkb5JZ4pv61B41H",
    },
    {
        id:4,
        ten:"𝐏𝐥𝐚𝐲𝐥𝐢𝐬𝐭 'Chờ anh chút thôi...đã làm em phải đợi'🎧🍂 Playlist Nhạc Chill Khi Hà Nội Chớm Thu",
        duongDanAnh:"../anh/anh-h1-4.jpg",
        duongDanYoutube:"https://www.youtube.com/embed/A4qz6PNuZsk?si=CKOds9FdbAYYicdK",
    },
];
function chonVid(id){
    for (let i = 0; i < danhSachVid.length; i++){
        if(danhSachVid[i].id == id){
        document.getElementsByClassName("ten")[0].innerHTML = danhSachVid[i].ten;
        document.getElementsByTagName("iframe")[0].src = danhSachVid[i].duongDanYoutube;
        }
    }
}
