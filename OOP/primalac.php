<?php

class Primalac
{
    public $id;
    public $ime_prezime;
    public $adresa;
    public $grad;
    public $broj_telefona;


    public function sacuvajPrimaoca($connection, $ime_prezime, $adresa, $grad, $broj_telefona)
    {
        $SQL = "insert into primalac values (null, '$ime_prezime', '$adresa', '$grad', '$broj_telefona')";
        $connection->query($SQL);

        $primalac_id = $connection->insert_id;

        return $primalac_id;
    }
}
