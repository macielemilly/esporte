// remove active from already active
$(this).siblings().removeClass("active");
// add active to clicked
$(this).toggleClass("active");
// if has sub menu open it
$(this).find("ul").slideToggle();
// remove active class of sub menu items
$(this).siblings().find("ul").find("li").removeClass("active");
;

$(".menu-btn").click(function () {
$(".sidebar").toggleClass("active");
});