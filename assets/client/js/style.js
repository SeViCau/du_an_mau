var srcAnh = [
  "assets/client/img/banner1.jpg",
  "assets/client/img/banner2.jpg",
  "assets/client/img/banner3.jpg",
  "assets/client/img/banner4.jpg",
];

var anhNow = 0;
var anhNew;

function next() {
  anhNew = document.getElementById("banner_anh");
  if (anhNow == srcAnh.length - 1) {
    anhNow = 0;
  } else {
    anhNow++;
  }
  anhNew.src = srcAnh[anhNow];
}

// Chuyển ảnh
var interval = setInterval(next, 5000);
