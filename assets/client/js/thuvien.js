$(document).ready(function () {
    var giohang=$("#giohang").children("tr");
    var slsp = giohang.length;
    var boxcart = $("#boxcart").children("span").eq(0);
    boxcart.text(slsp)
});