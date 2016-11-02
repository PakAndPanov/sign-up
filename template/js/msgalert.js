/**
 * Created by Сергей on 01.11.2016.
 */
var array=[];
function f() {
    $.ajax({
        url: "/messages/refresh",
        method: 'post',
        data: {from:'main'}
    }).done(function (data) {

        if(data!="" && array.indexOf(data)==-1) {
            array.push(data);
            $("#msgcount").html(array.length);
             var audio = new Audio();
             audio.src = '/template/music/shot.mp3';
             audio.autoplay = true;
        }
    });
}
setInterval("f()",3000);