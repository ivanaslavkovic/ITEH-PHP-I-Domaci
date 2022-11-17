     <table class="table table-bordered table-hover">
         <thead class="table-dark">
             <tr>
                 <th>Ime i prezime</th>
                 <th>Adresa</th>
                 <th>Grad</th>
                 <th>Broj telefona</th>
                 <th>Broj pošiljke</th>
                 <th>Težina</th>
                 <th>Cena</th>
                 <th>Status</th>
             </tr>
         </thead>

         <tbody>
             <?php

                include 'DB/conn.php';
                include 'OOP/posiljka.php';

                $posiljka = new Posiljka();
                $posiljke = $posiljka->svePosiljke($connection);

                while ($posiljka = $posiljke->fetch_object()) {
                ?>
                 <tr>
                     <td><?php echo $posiljka->ime_prezime;  ?></td>
                     <td><?php echo $posiljka->adresa;  ?></td>
                     <td><?php echo $posiljka->grad;  ?></td>
                     <td><?php echo $posiljka->broj_telefona; ?></td>
                     <td><?php echo $posiljka->broj; ?></td>
                     <td><?php echo $posiljka->tezina; ?></td>
                     <td><?php echo $posiljka->cena; ?></td>
                     <td>
                         <?php
                            if ($posiljka->status == 'isporucena') {
                            ?>
                             <button class="btn btn-success">Isporucena</button>
                         <?php
                            } else {
                            ?>
                             <button class="btn btn-danger">Neisporucena</button>
                         <?php
                            }

                            ?>
                     </td>
                 </tr>
             <?php } ?>
         </tbody>
     </table>