$(document).ready(function(){
    $(".menubar ul li:not(.logo)").hover(
        function(){
            $(this).addClass('hover');
        },
        function(){
            $(this).removeClass('hover');
        }
    );



});