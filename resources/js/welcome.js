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
    window.location.href = "/index.php/Chartinfo";
};

btn_2.onclick = function () {
    window.location.href = "http://www.sdvx.in/chunithm.html";
};

function playsound() {
    var rand= Math.floor(Math.random()*(4-1+1)+1);
    switch (rand) {
        case 1:
            var sound=document.getElementById("sound_00");
            break;
        case 2:
            var sound=document.getElementById("sound_01");
            break;
        case 3:
            var sound=document.getElementById("sound_02");
            break;
        case 4:
            var sound=document.getElementById("sound_03");
            break;
        default :
            var sound=document.getElementById("sound_01");
            break;
    }
    sound.play();
}