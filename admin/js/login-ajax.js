$(document).ready(function(){

  // Loguear un administrador
  $('#login-admin').on('submit', function(e){
    e.preventDefault();

    const data = $(this).serializeArray();
    
    $.ajax({

      type: $(this).attr('method'),
      data: data,
      url: $(this).attr('action'),
      dataType: 'json',

      success: function(data){

        if(data.response == 'success'){
          const results = data;

          // Alerta para notificar al usuario de que se logueó el administrador
          swal(
            'Correcto!',
            `Bienvenido/a ${results.name}!`,
            'success'
          ).then(function(){

            // Redireccionar al usuario
            window.location.href = 'admin-area.php';

          })

        }else{

          swal(
            'Error!',
            'Usuario o contraseña incorrectos!',
            'error'
          ).then(function(){

            // Limpiar los inputs del formulario
            $('#user').val('')
            $('#password').val('')

          })

        }
      }
    })
  })

})