$(function(){
    // $(window).on('scroll',function(){
    //     if($(window).scrollTop() >= 450){
    //         $(".bg-light").css("background-color", "#FFF");
    //     }

    // });
     /* img perview **/
     $(".image").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('.img-perview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
            }
        });
        /* img perview **/


        /* function confirm */
        $('.confirm').on('click',function(){
            return confirm('Are You Sure ? ');
        });



});
