// Mapa de leaflet.js
var map = L.map('map').setView([-33.273946, -426.324935], 17);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([-33.273946, -426.324935]).addTo(map)
  .bindPopup('Este será el lugar de la conferencia')
  .openPopup()
  .bindTooltip('Un tooltip')
  .openTooltip();


//-----------------------------------------------------------------------//
//------------------------------- Jquery -------------------------------//
//---------------------------------------------------------------------//


// Código para los tabs del programa del evento en la páina index.html
$(document).ready(function(){

  $('div.hidden').hide();

  $('.program-event .course-info:first').show();
  $('.program-menu a:first').addClass('active');

  $('.program-menu a').on('click', function(){
    $('.program-menu a').removeClass('active');
    $(this).addClass('active');
    $('.hidden').hide();
    const enlace = $(this).attr('href');
    $(enlace).fadeIn(1000);

    return false;
  })
})
