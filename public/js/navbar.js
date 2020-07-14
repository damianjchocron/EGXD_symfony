
// get current url
var pathname = window.location.pathname;

// remove active class from all
$(".navbar .nav-item").removeClass('active');

// add active class to div that matches active url
$(".navbar-nav > a[href='"+pathname+"']").addClass('active');
console.log($(".navbar-nav > a[href='"+pathname+"']"));