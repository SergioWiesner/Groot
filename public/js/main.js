function busq(busqueda) {
        $.ajax({
            url: '/app/buscar',
            type: 'post',
            data: 'busqueda='+busqueda+'&btn=buscar' 

        }).done(function(resp){
            alert(resp);
        });
    }
$(document).ready(function () {
    $(".menu li:has(ul)").click(function (e) {
        if ($(this).hasClass("act")) {
            $(this).removeClass("act");
            $(this).children("ul").slideUp();
            $(this).css("color", "none");
        } else {
            $('.menu li ul').slideUp();
            $(this).css("color", "none");
            $('.menu li ').removeClass("act");
            $(this).addClass("act");
            $(this).children("ul").slideDown();
            $(this).css("color", "red");
        }
    });
    public
});
