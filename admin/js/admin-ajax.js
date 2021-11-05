$(document).ready(function(){

  // Crear un administrador
  $('#save-registry').on('submit', function(e){
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
            'El administrador se guardó correctamente!',
            'success'
          ).then(function(){

            // Limpiar los inputs del formulario
            $('#user').val('')
            $('#name').val('')
            $('#password').val('')

            window.location.href = 'list-admin.php';

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

  // Eliminar un administrador
  $('.delete-registry').on('click', function(e){

    e.preventDefault();
    
    const dataId = $(this).attr('data-id');
    const dataType = $(this).attr('data-type');

    swal({
      title: '¿Estás seguro/a?',
      text: "Un registro eliminado no se puede recuperar!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, eliminar!',
      cancelButtonText: 'Cancelar'
    }).then(function(){
      
      $.ajax({
        type:'post',
        data: {
          'id': dataId,
          'registry': 'delete'
        },
        url: `model-${dataType}.php`,
  
        success: function(data){
          
          const result = JSON.parse(data);

          if(result.response == 'success'){

            swal(
              'Eliminado!',
              'Registro eliminado.',
              'success'
            ).then(function(){
              jQuery(`[data-id="${result.deletedId}"]`).parents('tr').remove();
            })

          }else{

            swal({
              icon: 'error',
              title: 'Error!',
              text: 'No se pudo eliminar!'
            })

          }

        }
      })

    })

  })
  
})