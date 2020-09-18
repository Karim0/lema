var header__gap = document.getElementById('header__gap');

header__gap.style.height = ($('header')[0].offsetHeight ) + "px";

AOS.init();


$('#btn_burger').click(function () {
    $('.nav_pages').toggleClass('show');
    $('body').toggleClass('fix');
    // $('.nav_pages .dropdown-menu').toggleClass('show');
})
