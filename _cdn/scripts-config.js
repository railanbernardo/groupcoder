$(document).ready(function(){
    $('.menu i').click(function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            $('.main_navigator').slideDown();
        }else{
            $(this).removeClass('active');
            $('.main_navigator').slideUp();
        }
    });
});