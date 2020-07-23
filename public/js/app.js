$(document).ready(function () {

   $('#users-table').DataTable({});

    $(".link-title").click(function () {
        var check = $(this).next();

        if (check.is(':visible')) {
            $(this).find('span').html('&rarr;')
        } else {
            $(this).find('span').html('&darr;')
        }
        $(this).next().slideToggle(100);
        
    });

    $(".hamburger").click(()=>{
        $(".navdiv").slideToggle();
    });
});