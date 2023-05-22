<?php
$mysql = new mysqli('localhost', 'root', '', 'reg-bd');

if (isset($_POST['animalId'])) {
   $animalId = $_POST['animalId'];

   // Esegui una query per ottenere i dettagli dell'animale selezionato
   $risultato = $mysql->query("SELECT * FROM animali WHERE aid = '$animalId'");

   if ($risultato->num_rows > 0) {
      $animal = $risultato->fetch_assoc();

      // Restituisci i dettagli dell'animale come HTML
      echo '
      <table class="table">
         <thead>
            <tr>
               <th>#</th>
               <th>Valore</th>
            </tr>
         </thead>
         <tbody class="table-border-bottom-0">
            <tr>
               <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Tipologia</strong></td>
               <td id="tipologia">' . $animal['tipologia'] . '</td>
            </tr>
            <tr>
               <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Razza</strong></td>
               <td id="razza">' . $animal['razza'] . '</td>
            </tr>
            <tr>
               <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Sesso</strong></td>
               <td id="sesso">' . $animal['sesso'] . '</td>
            </tr>
            <tr>
               <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Peso</strong></td>
               <td id="peso">' . $animal['peso'] . ' kg</td>
            </tr>
            <tr>
               <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Data nascita</strong></td>
               <td id="dataNascita">' . $animal['data_nascita'] . '</td>
            </tr>
            <tr>
               <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>Colore</strong></td>
               <td><input disabled="" class="form-control" type="color" value="' . $animal['colore'] . '" id="html5-color-input"></td>
            </tr>
         </tbody>
      </table>';
   } else {
      echo 'Nessun dato disponibile per l\'animale selezionato.';
   }
}

$mysql->close();
?>
