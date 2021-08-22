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