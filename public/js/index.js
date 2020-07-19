/*
  Creación de una función personalizada para jQuery que detecta cuando se detiene el scroll en la página
*/
$.fn.scrollEnd = function(callback, timeout) {
  $(this).scroll(function(){
    var $this = $(this);
    if ($this.data('scrollTimeout')) {
      clearTimeout($this.data('scrollTimeout'));
    }
    $this.data('scrollTimeout', setTimeout(callback,timeout));
  });
};
/*
  Función que inicializa el elemento Slider
*/

function inicializarSlider(){
  $("#rangoPrecio").ionRangeSlider({
    type: "double",
    grid: false,
    min: 0,
    max: 100000,
    from: 200,
    to: 80000,
    prefix: "$"
  });
}

inicializarSlider();

$(function() {
  $(document).on('click', '.capturar', function(event) {
    let id = this.id;
    var idv = id.slice(8);
    event.preventDefault();
  var info = $('#info'+ idv).val();
  var token = $('#token').val();
  var data={info:info,_token:token};
  $.ajax({
    type: "post",
    url: "home",
          data: data,
          success: function (msg) {
                  alert('Guardado con exito')
          }
    });
   });
 });