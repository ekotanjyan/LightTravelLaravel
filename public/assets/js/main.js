$(document).ready(function(){
    $(".menubar ul li:not(.logo)").hover(
        function(){
            $(this).addClass('hover');
        },
        function(){
            $(this).removeClass('hover');
        }
    );

    /*$(".mainmenu li:not(.logo), .mainmenu li:not(.logo) a.menutitle").on('click',
        function(){
            $(".mainmenu li:not(.logo)").addClass('active');
            $(".mainmenu li:not(.logo) a.menutitle").addClass('menuitem_active');
        },
        function(){
            $(".mainmenu li:not(.logo)").removeClass('active');
            $(".mainmenu li:not(.logo) a.menutitle").removeClass('menuitem_active');
        }
    );*/


});