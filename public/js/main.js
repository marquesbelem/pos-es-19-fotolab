window.location = "#wall-1";

$('.carousel').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    arrows: false
  });

$('.error-alert').click(function (e) {
  $(this).remove();
});