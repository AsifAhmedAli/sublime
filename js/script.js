if ($(window).width() < 1200) {
    $(".nav-link.dropdown-toggle").click(function(){
        $(this).siblings('.dropdown-menu').toggleClass('d-block')
    })

    $(".has-submenu").children('.dropdown-item').click(function(){
        $(this).siblings('.submenu').toggleClass('d-block')
        $(this).parents('.has-submenu').siblings().children('.submenu').removeClass('d-block')
    })
}