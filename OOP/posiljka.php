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
        $SQL = "select posiljka.id as pos_id, posiljka.broj, posiljka.tezina, posiljka.cena, posiljka.status, posiljka.primalac_id, primalac.* from posiljka join primalac on posiljka.primalac_id = primalac.id";

        return $connection->query($SQL);
    }


    public function promeniStatus($connection, $posiljka_id, $status)
    {
        $SQL = "update posiljka set status='" . $status  . "' where id=" . $posiljka_id . "";

        return $connection->query($SQL);
    }


    public function pretragaPosiljke($connection, $broj_posiljke)
    {
        $SQL = "select posiljka.id as pos_id, posiljka.broj, posiljka.tezina, posiljka.cena, posiljka.status, posiljka.primalac_id, primalac.* from posiljka join primalac on posiljka.primalac_id = primalac.id
         where posiljka.broj like '" . $broj_posiljke . "'";

        return $connection->query($SQL);
    }


    public function sortPosiljkeCena($connection, $broj_posiljke)
    {
        $SQL = "select posiljka.id as pos_id, posiljka.broj, posiljka.tezina, posiljka.cena, posiljka.status, posiljka.primalac_id, primalac.* from posiljka join primalac on posiljka.primalac_id = primalac.id
        order by posiljka.cena " . $broj_posiljke . "";

        return $connection->query($SQL);
    }
}
