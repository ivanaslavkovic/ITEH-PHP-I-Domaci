<?php

include 'primalac.php';

class Posiljka
{
    public $id;
    public $broj;
    public $tezina;
    public $cena;
    public $status;
    public $primalac_id;


    public function sacuvajPosiljku($connection, $ime_prezime, $adresa, $grad, $broj_telefona, $broj, $tezina, $cena, $status)
    {
        $primalac = new Primalac();
        $primalac_id = $primalac->sacuvajPrimaoca($connection, $ime_prezime, $adresa, $grad, $broj_telefona);

        $SQL = "insert into posiljka values (null, '$broj', '$tezina', '$cena', '$status', '$primalac_id')";
        return $connection->query($SQL);
    }


    public function svePosiljke($connection)
    {
        $SQL = "SELECT posiljka.*, primalac.* FROM posiljka JOIN primalac ON posiljka.primalac_id = primalac.id";

        return $connection->query($SQL);
    }
}
