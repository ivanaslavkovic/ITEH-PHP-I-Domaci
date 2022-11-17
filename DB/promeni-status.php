<?php

include 'conn.php';
include '../OOP/posiljka.php';

$posiljka = new Posiljka();

$posiljka->promeniStatus($connection, $_POST['posiljka_id'], $_POST['status_promena']);
