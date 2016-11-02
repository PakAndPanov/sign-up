/**
 * Created by Сергей on 01.11.2016.
 */

function search() {
    $(document).ready(function () {
        $.ajax({
            url: "/friends/refreshsearchfriends",
            method: 'post',
            data: {text: $("#search").val()}
        }).done(function (data) {
             $("#test").html(data);

        })

    })
}
