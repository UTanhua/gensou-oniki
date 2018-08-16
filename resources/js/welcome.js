$(document).ready();

$("#btn_1").mouseenter(function () {
    $("#btn_1").css("opacity","0.82");
});
$("#btn_1").mouseleave(function () {
    $("#btn_1").css("opacity","1");
});

$("#btn_2").mouseenter(function () {
    $("#btn_2").css("opacity","0.82");
});
$("#btn_2").mouseleave(function () {
    $("#btn_2").css("opacity","1");
});

var btn_1 = document.getElementById("btn_1");
var btn_2 = document.getElementById("btn_2");

btn_1.onclick = function () {
    window.location.href = "Chartinfo";
};

btn_2.onclick = function () {
    window.location.href = "http://www.sdvx.in/chunithm.html";
};