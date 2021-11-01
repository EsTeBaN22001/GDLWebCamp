$(document).ready(function () {

  $('.sidebar-menu').tree()

  $('#registration').DataTable({
    'paging'      : true,
    'pageLength'  : 10,
    'lengthChange': false,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false,
    'language'    : {
      paginate: {
        next: 'Siguiente',
        previous: 'Anterior',
        last: 'Último',
        first: 'Primero'
      },
      info: "Mostrando _START_ a _END_ de _TOTAL_ resultados",
      emptyTable: 'No hay registros',
      infoEmpty: '0 registros',
      search: 'Buscar: '
    }
  })

  // Desabilitar el boton de crear registro hasta que se llenen los inputs
  $('#create-registry').attr('disabled', true);

  $('#repeat-password').on('input', function(){

    let newPassword = $('#password').val();
    const passwordResult = $('#password_result');
    const inputPassword = $('input#password');

    if( $(this).val() == newPassword ){
      passwordResult.text('Correcto');
      passwordResult.parents('.form-group').addClass('has-success').removeClass('has-error');
      inputPassword.parents('.form-group').addClass('has-success').removeClass('has-error');
      $('#create-registry').attr('disabled', false);
    }else{
      passwordResult.text('Las contraseñas no son iguales');
      passwordResult.parents('.form-group').addClass('has-error').removeClass('has-success');
      inputPassword.parents('.form-group').addClass('has-error').removeClass('has-success');
      $('#create-registry').attr('disabled', true);
    }

  })
})