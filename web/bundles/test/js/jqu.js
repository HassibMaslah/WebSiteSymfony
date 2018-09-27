     $(document).ready(function() {
        
         // login
         $("#loginn").hide();
         $('.fa-sign-in').on('click', function() {
             $('#loginn').toggleClass('show');
             $('.lum').addClass('showingLum');
             if ($('#loginn').hasClass('show')) {
                 $('.lum').fadeTo("slow", 0.33);
             } else {
                 $('.lum').fadeTo("slow", 1);
             }
             return false

         });


         $('.login_hide').on('click', function() {
             $('#loginn').removeClass('show');
             $('.lum').removeClass('showingLum');
             $('.lum').fadeTo("slow", 1);
         });


     });