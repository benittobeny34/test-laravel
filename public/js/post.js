$(document).ready(function(){ 

   $("#update-post").click(function(e){

      e.preventDefault();

      var form=$("#editform");

          $.ajax({

            url: form.attr("action"),

            type: 'put',

            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

            data: form.serialize(),

            success: function(response)
            {
            console.log('success')
            alert('Posted Updated Successfully');


            $('.modal').css({'display':'none'});
              
            $('#post-title').text(response.title)
            $('#post-description').text(response.description)
            window.location.reload(true)

            },

            error: function (error){

              console.log(error.responseJSON.errors)

              const errors = error.responseJSON.errors;

              console.log(errors)

              if(errors.title)
              $('#title-error').text(errors.title);

              if(errors.description)
              $('#message-error').text(errors.description)
            }
            
          });     
    });

    $('#title').on('keyup',() =>{

      $('#title-error').text('');
    })

    $('#description').on('keyup',() =>{
      
      $('#message-error').text('');
    })
  });