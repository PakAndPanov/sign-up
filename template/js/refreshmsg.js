/**
 * Created by Сергей on 01.11.2016.
 */
function f() {
    $.ajax({
        url: "/messages/refresh",
        method: 'post',
        data: {from:'message'}
    }).done(function (data) {
         if(data!="") {
             $('#messagefor').append(data);
             var block = document.getElementById("messagefor");
             block.scrollTop = block.scrollHeight;
         }

    });
}
setInterval("f()",3000);

$(function () {

    $.ajax({
        url: "/messages/check",
        method: 'post',
        data: {checkmessages: true}
        
    });
    var block = document.getElementById("messagefor");
    block.scrollTop = block.scrollHeight;
    
})

