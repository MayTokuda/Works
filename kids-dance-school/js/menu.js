if (window.matchMedia("(max-width: 640px)").matches){
    $(function(){
        $(".header-nav__item").hide();
    });
    
$(function() {
    $('.hamburger').click(function() {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $('.globalMenuSp').addClass('active');
            $(".header-nav__item").slideToggle();
        } else {
            $('.globalMenuSp').removeClass('active');
            $(".header-nav__item").slideToggle();
        }
    });
});


$(function(){
    $(".footer-nav__item").hide();
});
$(function() {
    $('.footer__hamburger').click(function() {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $('.globalMenuSp').addClass('active');
            $(".footer-nav__item").slideToggle();
        } else {
            $('.globalMenuSp').removeClass('active');
            $(".footer-nav__item").slideToggle();
        }
    });
});

}
