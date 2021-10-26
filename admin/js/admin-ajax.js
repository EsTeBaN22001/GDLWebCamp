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

        console.log(data)

      }
    })
  })

})