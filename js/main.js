jQuery(document).ready(function($) {
    // var post = $( "#primary #main .col-md-8 article:first-child" );
        // post.css( "background", "red" );
        // $(post).appendTo('.first-post-box');

    //
    // $(window).bind('scroll', function() {
    //     var scrollTop = $(window).scrollTop();
    //
    //     if(scrollTop > 700){
    //         $('#myBtn').show();
    //         $('#myBtn').on('click', function(){
    //             $("html, body").animate({ scrollTop: 0 }, 1000);
    //         });
    //     }
    //     else{
    //         $('#myBtn').hide();
    //     }
    // });



    $('#myBtn').on('click', function(){
        $('html, body').animate({scrollTop: 1}, 800);
        return false;
    });

    $(window).scroll(function(){
        var scroll = $('#myBtn');
        if ($(this).scrollTop() > 400) {
            scroll.fadeIn('slow');
        } else {
            scroll.fadeOut('slow');
        }
    });
});

