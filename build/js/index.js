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


$(document).ready(function(){
  // Código para los tabs del programa del evento en la páina index.html
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


  // Animación para los números
  $('.event-summary li:nth-child(1) p').animateNumber({number: 6}, 3000);
  $('.event-summary li:nth-child(2) p').animateNumber({number: 15}, 3000);
  $('.event-summary li:nth-child(3) p').animateNumber({number: 3}, 3000);
  $('.event-summary li:nth-child(4) p').animateNumber({number: 9}, 3000);

  // Cuenta regresiva
  $('.count-down').countdown('2021/12/10 09:00:00', function(event){
    $('#days').html(event.strftime('%D'));
    $('#hours').html(event.strftime('%H'));
    $('#minutes').html(event.strftime('%M'));
    $('#seconds').html(event.strftime('%S'));
  })
})
