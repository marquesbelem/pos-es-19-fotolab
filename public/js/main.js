$('.carousel').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    arrows: false,
    focusOnSelect: false
  });

$('.error-alert').click(function (e) {
  $(this).remove();
});

$('.carousel-center').slick({
  centerMode: true,
  centerPadding: '10px',
  slidesToShow: 3,
  dots: true,
  autoplay: true,
  arrows: false,
  focusOnSelect: false,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '10px',
        slidesToShow: 1,
        focusOnSelect: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '10px',
        slidesToShow: 1,
        focusOnSelect: false
      }
    }
  ]
});