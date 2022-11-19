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



    $(document).on('click', '#broj-posiljke-button-search', function () {

        $.ajax(
            {
                url: 'DB/broj-posiljke-pretraga.php',
                method: 'POST',
                data: {
                    broj_posiljke: $('#broj-posiljke-search').val(),
                },

                success: function (posiljke) {

                    if (posiljke == 'Ne postoji pošiljka sa tim brojem!') {
                        alert(posiljke)
                    } else {
                        $('tbody').html(posiljke)
                    }
                }
            });
    })


    $(document).on('click', '#cena-posiljke-button-sort', function () {

        $.ajax(
            {
                url: 'DB/cena-posiljke-sort.php',
                method: 'POST',
                data: {
                    sort: $(this).val(),
                },

                success: function (posiljke) {
                    $('tbody').html(posiljke)

                }
            });

        $(this).val() == 'ASC' ? $(this).val('DESC') : $(this).val('ASC')

    })









}