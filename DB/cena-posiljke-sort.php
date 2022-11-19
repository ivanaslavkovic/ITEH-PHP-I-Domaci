<?php

include 'conn.php';
include '../OOP/posiljka.php';

$posiljka = new Posiljka();

$posiljke = $posiljka->sortPosiljkeCena($connection, $_POST['sort']);

while ($p = $posiljke->fetch_object()) {
?>
    <tr>
        <td><?php echo $p->ime_prezime;  ?></td>
        <td><?php echo $p->adresa;  ?></td>
        <td><?php echo $p->grad;  ?></td>
        <td><?php echo $p->broj_telefona; ?></td>
        <td><?php echo $p->broj; ?></td>
        <td><?php echo $p->tezina; ?></td>
        <td><?php echo $p->cena; ?></td>
        <td>
            <?php
            if ($p->status == 'isporucena') {
            ?>
                <button class="btn btn-success" id="i-n-btn" name="isporucena" value="<?php echo $p->pos_id ?>">Isporucena</button>
            <?php
            } else {
            ?>
                <button class="btn btn-danger" id="i-n-btn" name="neisporucena" value="<?php echo $p->pos_id ?>">Neisporucena</button>
            <?php
            }

            ?>
        </td>
    </tr>

<?php
}
