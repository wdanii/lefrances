<script src="js/bootstrap.min.js"></script>
<script src="js/all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.hide').on('click', function() {
            $('.social').animate({
                'margin-left': '-60px',
            }, 200);
            $('#showId').animate({
                'margin-left': '0px'
            }, 200);
        });
        $('#showId').on('click', function() {
            $('.social').animate({
                'margin-left': '0px'
            }, 200);
            $(this).animate({
                'margin-left': '-60px'
            }, 200)
        });
        $('.add').on('click', function() {
            $('body').append('<div class="over"></div>');
            $('.wrap-social2').fadeIn(200);
            $('.wrap-social').fadeOut(200);
        });
        $(document).on('click', '#close, .over', function() {
            $('.wrap-social2').fadeOut(200);
            $('.wrap-social').fadeIn(200);
            $('.over').remove();
        });
    });
</script>