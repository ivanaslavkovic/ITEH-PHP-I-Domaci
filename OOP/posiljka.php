<?php

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
        $SQL1 = "insert into primalac values (null, '$ime_prezime', '$adresa', '$grad', '$broj_telefona')";
        $connection->query($SQL1);
        $primalac_id = $connection->insert_id;

        $SQL2 = "insert into posiljka values (null, '$broj', '$tezina', '$cena', '$status', '$primalac_id')";
        return $connection->query($SQL2);
    }
}
