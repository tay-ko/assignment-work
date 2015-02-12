$(document).ready(function() {
$(".gallery").jCarouselLite({
btnNext: ".next",
btnPrev: ".prev",
mouseWheel: true,
auto: 4000,  
speed: 400, 
vertical: false,
circular: true,
visible: 7,
start: 0,
scroll: 1
});
});