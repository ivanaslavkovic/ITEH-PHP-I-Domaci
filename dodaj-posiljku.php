<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stil.css">
    <title>Document</title>
</head>

<body>

    <div class="wrapper-index">

        <h1 id="naslov-index">Kurirska služba</h1>


        <form method="GET" id="forma-nova-posiljka">

            <div class="mb-3">
                <label class="form-label">Ime i prezime: </label>
                <input type="text" class="form-control" name="ime_prezime">
            </div>

            <div class="mb-3">
                <label class="form-label">Adresa: </label>
                <input type="text" class="form-control" name="adresa">
            </div>

            <div class="mb-3">
                <label class="form-label">Grad: </label>
                <input type="text" class="form-control" name="grad">
            </div>

            <div class="mb-3">
                <label class="form-label">Broj telefona: </label>
                <input type="text" class="form-control" name="broj_telefona">
            </div>

            <div class="mb-3">
                <label class="form-label">Broj pošiljke: </label>
                <input type="text" class="form-control" name="broj">
            </div>

            <div class="mb-3">
                <label class="form-label">Težina: </label>
                <input type="number" class="form-control" name="tezina">
            </div>

            <div class="mb-3">
                <label class="form-label">Cena: </label>
                <input type="number" class="form-control" name="cena">
            </div>

            <div class="mb-3">
                <label class="form-label">Status: </label>
                <select class="form-select" name="status">
                    <option value="neisporucena" selected>Neisporučena</option>
                    <option value="isporucena">Isporučena</option>
                </select>
            </div>


            <button type="submit" name="btn-unesi-posiljku" class="btn btn-primary">Sačuvaj pošiljku</button>


            <?php

            include 'DB/conn.php';
            include 'OOP/posiljka.php';

            $posiljka = new Posiljka();

            if (isset($_GET['btn-unesi-posiljku'])) {

                $posiljka->sacuvajPosiljku(
                    $connection,
                    $_GET['ime_prezime'],
                    $_GET['adresa'],
                    $_GET['grad'],
                    $_GET['broj_telefona'],
                    $_GET['broj'],
                    $_GET['tezina'],
                    $_GET['cena'],
                    $_GET['status']
                );

                header('Location: index.php');
            }
            ?>
        </form>


























    </div>




</body>

</html>