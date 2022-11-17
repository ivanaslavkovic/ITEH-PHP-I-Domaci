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

        <a href="dodaj-posiljku.php"><button class="btn btn-success" id="btn-add">DODAJ POŠILJKU</button></a>


        <div class="wrapper-tabela">
            <?php
            include 'tabela.php';
            ?>
        </div>



        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="JS/js.js"></script>
    </div>

</body>

</html>