
/* status
    0 = 未创作         (白色)
    1 = 没有谱面       (灰色)
    2 = 创作完成       (绿色)
    3 = offset待修正   (黄色)
    4 = 有错误         (红色)
 */

function fillcolor(status) {
    switch ($(status).text()){
        case "0" :
            $(status).parents().css("background","white");
            break;

        case "1" :
            $(status).parents().css("background","rgb(231,230,230)");
            break;

        case "2" :
            $(status).parents().css({"background":"rgb(198,239,206)", "color":"rgb(0,97,0)"});
            break;

        case "3" :
            $(status).parents().css({"background":"rgb(255,235,156)", "color":"rgb(156,101,0)"});
            break;

        case "4" :
            $(status).parents().css("background","red");
            break;

    }
}