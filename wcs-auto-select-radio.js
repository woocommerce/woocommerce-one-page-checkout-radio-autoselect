jQuery(document).ready(function($) {
    $(window).on("load", function(){
        $('input[type="radio"][name="add_to_cart"]').prop( 'checked' , true ).trigger( 'change' );
    });
});