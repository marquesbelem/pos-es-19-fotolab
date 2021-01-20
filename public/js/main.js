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

var $inputPerfil    = document.getElementById('imagem_perfil'),
    $fileNamePerfil = document.getElementById('file_name_imagem_perfil');

$inputPerfil.addEventListener('change', function(){
  $fileNamePerfil.textContent = this.value;
})

/*var $inputDestaques    = document.getElementById('foto_capa'),
    $fileNameDestaques = document.getElementById('file_name_foto_capa');

$inputDestaques.addEventListener('change', function(){
  this.files
  $fileNameDestaques.textContent = this.value;
})*/

updateList = function() {
  var input = document.getElementById('foto_capa');
  var output = document.getElementById('file_name_foto_capa');
  var children = "";
  for (var i = 0; i < input.files.length; ++i) {
      children += '<li>' + input.files.item(i).name + '</li>';
  }
  output.innerHTML = '<ul>'+children+'</ul>';
}