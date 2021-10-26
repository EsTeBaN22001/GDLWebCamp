$(document).ready(function(){

  $('#create-admin').on('submit', function(e){
    e.preventDefault();

    const data = $(this).serializeArray();
    
    $.ajax({

      type: $(this).attr('method'),
      data: data,
      url: $(this).attr('action'),
      dataType: 'json',

      success: function(data){

        if(data.response == 'success'){

          // Alerta para notificar al usuario de que se creó el administrador
          swal(
            'Correcto!',
            'El administrador se creó correctamente!',
            'success'
          ).then(function(){

            // Limpiar los inputs del formulario
            $('#user').val('')
            $('#name').val('')
            $('#password').val('')

          })

        }else{

          swal(
            'Error!',
            'No se pudo crear el administrador!',
            'error'
          )

        }
      }
    })
  })

})