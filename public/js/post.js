$(document).ready(function () {

    //for post eidt ajax call

    $("#update-post").click(function (e) {

        e.preventDefault();

        var form = $("#editform");

        $.ajax({

            url: form.attr("action"),

            type: 'put',

            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

            data: form.serialize(),

            success: function (response) {
                console.log('success')
                alert('Posted Updated Successfully');


                $('.modal').css({'display': 'none'});

                $('#post-title').text(response.title)
                $('#post-description').text(response.description)
                window.location.reload(true)

            },

            error: function (error) {

                console.log(error.responseJSON.errors)

                const errors = error.responseJSON.errors;

                console.log(errors)

                if (errors.title)
                    $('#title-error').text(errors.title);

                if (errors.description)
                    $('#message-error').text(errors.description)
                if (errors.tags)
                    $('#tag-error').text(errors.tags)
            }

        });
    });

    $('#title').on('keyup', () => {

        $('#title-error').text('');
    })

    $('#description').on('keyup', () => {

        $('#message-error').text('');
    })

    $('#input-tags').on('keyup', () => {

        $('#tag-error').text('');
    })

    $('#comment-form').on('submit', (e) => {

        var val = $("#comment").val();

        if (val == "") {

            e.preventDefault();
            $("#comment").addClass('is-invalid');

        } else {

            //for comments ajax request

            e.preventDefault();

            var form = $("#comment-form");

            $.ajax({


                url: form.attr('action'),

                type: 'post',

                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                data: form.serialize(),

                success: function (response) {


                    $('#comment').val("");

                    $('.sample').append(response);

                    toastr.success('Comment Successfully Added', 'Success',
                        {
                            timeOut: 5000,
                            progressBar: true
                        })
                },

                error: function (error) {
                    console.log(error);
                },

            });
        } //else close


    });

    $('#comment').keypress(function () {

        $(this).removeClass('is-invalid');
    })


    $('#get-comments').on('submit', (e) => {

        e.preventDefault();

        var form = $('#get-comments');

        $.ajax({

            url: form.attr('action'),

            type: 'GET',

            success: function (response) {

                if (response == "") {
                    toastr.warning('No Comments yet posted if you wish you are the first', 'Warning',
                        {
                            timeOut: 5000,
                            progressBar: true
                        })

                } //if close
                else {
                    toastr.success('All comments loaded', 'sucess', {
                        timeOut: 5000,
                        progressBar: true
                    }) //toastr close
                    $('.sample').append(response);
                } //else close


            },
            error: function (error) {
                alert('error');
            }

        })
    });



    // // datatable
    // $('#users-table').DataTable({});


});

