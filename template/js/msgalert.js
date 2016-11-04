/**
 * Created by Сергей on 01.11.2016.
 */
var unreadmsg=0;
function f() {
    $.ajax({
        url: "/messages/unreadenMsg",
        method: 'post',
        data: {from:'main'}
    }).done(function (data) {

        if(data!=0 && data!=unreadmsg) {
            unreadmsg=data;
            $("#msgcount").html(data);
             var audio = new Audio();
             audio.src = '/template/music/shot.mp3';
             audio.autoplay = true;
        }
    });
}
setInterval("f()",3000);
$(function () {

    $.ajax({
        url: "/messages/unreadenMsg",
        method: 'post',
        data: {from:'main'}
    }).done(function (data) {

        if(data!=0) {
            unreadmsg=data;
            $("#msgcount").html(data);
        }
    });

})