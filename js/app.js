$(function () {
  $('.nav_toggle').on('click', function () {
    $('.nav_toggle, .nav').toggleClass('show');
  });
});

$(function(){
  $(".fade-pc img:not(:first-child)").hide();
  setInterval(function() {
    $(".fade-pc img:first-child").fadeOut("slow").next("img").fadeIn("slow").end().appendTo(".fade-pc");
  },3000);
});
$(function(){
  $(".fade-sp img:not(:first-child)").hide();
  setInterval(function() {
    $(".fade-sp img:first-child").fadeOut("slow").next("img").fadeIn("slow").end().appendTo(".fade-sp");
  },3000);
});