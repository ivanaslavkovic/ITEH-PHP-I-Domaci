$(function () {
    funkcija();
});


function funkcija() {

    $(document).on('click', '#i-n-btn', function () {

        let status_promena = '';

        if ($(this).attr('name') == 'isporucena')
            status_promena = 'neisporucena'
        else
            status_promena = 'isporucena'


        $.ajax(
            {
                url: 'DB/promeni-status.php',
                method: 'POST',
                data: {
                    posiljka_id: $(this).val(),
                    status_promena: status_promena
                },

                success: function () {
                    window.location.reload()
                }
            });
    })
}