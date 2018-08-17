
/*  status
    0 = 未创作         (白色)
    1 = 没有谱面       (灰色)
    2 = 创作完成       (绿色)
    3 = offset待修正   (黄色)
    4 = 有错误         (红色)
 */
function fillcolor(status) {
    switch ($(status).text()){
        case "0" :
            $(status).parent().css("background","white");
            break;

        case "1" :
            $(status).parent().css({"background":"rgb(231,230,230)","border":"none"});
            break;

        case "2" :
            $(status).parent().css({"background":"rgb(198,239,206)", "color":"rgb(0,97,0)","border":"none"});
            break;

        case "3" :
            $(status).parent().css({"background":"rgb(255,235,156)", "color":"rgb(156,101,0)","border":"none"});
            break;

        case "4" :
            $(status).parent().css({"background":"rgb(255,199,206)","color":"rgb(156,0,6)","border":"none"});
            break;

    }
}

/*  text
    POPS & ANIME = rgb(240,45,109)
    niconico     = rgb(152,63,177)
    ORIGINAL     = rgb(208,0,0)
    イロドリミドリ = rgb(228,76,151)
    東方Project   = rgb(39,98,186)
    言ノ葉Project = rgb(191,158,24)
    VARIETY      = rgb(18,144,106)
 */
function fillclassfication(text) {
    switch ($(text).text()){
        case "POPS & ANIME" :
            $(text).css({"background":"rgb(240,45,109)","border":"none"});
            break;

        case "niconico" :
            $(text).css({"background":"rgb(152,63,177)","border":"none"});
            break;

        case "ORIGINAL" :
            $(text).css({"background":"rgb(208,0,0)","border":"none"});
            break;

        case "イロドリミドリ" :
            $(text).css({"background":"rgb(228,76,151)","border":"none"});
            break;

        case "東方Project" :
            $(text).css({"background":"rgb(39,98,186)","border":"none"});
            break;

        case "言ノ葉Project" :
            $(text).css({"background":"rgb(191,158,24)","border":"none"});
            break;

        case "VARIETY" :
            $(text).css({"background":"rgb(18,144,106)","border":"none"});
            break;
    }
}

function clickall() {
    $(".classify").click();
    $(".status").click();
}