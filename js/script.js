
$(document).ready(function(){
  $('.tabs').tabs();
  $('.modal').modal();
  $('.datepicker').datepicker({
    format: "dd mmm, yy"
  });
  $('.sidenav').sidenav();
  $('.carousel').carousel();
  $('.collapsible').collapsible();
  $('.carousel.carousel-slider').carousel({
   indicators: true,
   fullWidth: true
 });
  $('.pesq-icon').click(function(){
   $(".pesq-icon").toggleClass("close");
   $(".search-box").toggleClass("exibir")
 });
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 4,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 3000,
    },
    breakpoints: {
      1024: {
        spaceBetween: 40
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      420: {
        slidesPerView: 2,
        spaceBetween: 10
      }
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
  });

  //fim     
});
