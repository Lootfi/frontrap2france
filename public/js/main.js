console.log("hello");
/* Sidebar Nav */
$(document).ready(function() {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $("#dismiss, .overlay").on("click", function() {
        $("#sidebar").removeClass("active");
        $(".overlay").removeClass("active");
    });

    $("#sidebarCollapse, #sidebarCollapse2").on("click", function() {
        $("#sidebar").addClass("active");
        $(".overlay").addClass("active");
        $(".collapse.in").toggleClass("in");
        $("a[aria-expanded=true]").attr("aria-expanded", "false");
    });
});

// Scroll Nav Animation

var lastScrollTop = 0;
navbar = document.getElementById("nav-sticky");
window.addEventListener("scroll", function() {
    var scrollTop = window.pageYOffset || document.Element.scrollTop;
    if (scrollTop > lastScrollTop) {
        navbar.style.top = "-80px";
    } else {
        navbar.style.top = "0";
    }
    lastScrollTop = scrollTop;
});

var lastScrollTopMobile = 0;
navbarMobile = document.getElementById("nav-sticky-mobile");
window.addEventListener("scroll", function() {
    var scrollTopMobile =
        window.pageYOffset || document.Element.scrollTopMobile;
    if (scrollTopMobile > lastScrollTopMobile) {
        navbarMobile.style.top = "-80px";
    } else {
        navbarMobile.style.top = "0";
    }
    lastScrollTopMobile = scrollTopMobile;
});

const rightBanner = document.getElementById("adstick");
const eOffset = rightBanner.offsetTop;

window.onscroll = () => onSticky(rightBanner, eOffset);
//sticky ad
function onSticky(e, eOffset) {
    if (window.screen.width > 660) {
        if (window.pageYOffset > eOffset) {
            e.classList.add("sticky");
        } else {
            e.classList.remove("sticky");
        }
    }
}

if ($(window).width() <= 660) {
    var poster = $(".img-principal").detach();
    $(".content").before(poster);
}
