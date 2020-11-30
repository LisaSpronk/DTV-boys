<?php

  include("php/header.php");

  // $date = date('d-m-Y');

  // for ($i = 0; $i < 7; $i++) {
  //   echo date('d-m-Y', strtotime($date. ' + '. $i . ' days'));
  //   echo "<br>";
	// }

?>

    <div class="banen-reserveren">
      <h2>Kies je datum</h2>
      <p>*Let op, je kan maar 7 dagen vooruit reserveren.</p>
      <form action="banen-reserveren.php" method="POST">
        <select name="datumplanner" class="datumplanner">
    <?php
      for ($i = 0; $i < 7; $i++) {
        echo "<option value=". date('Y-m-d', strtotime($date. ' + '. $i . ' days')) . ">" . date('d-m-Y', strtotime($date. ' + '. $i . ' days')) . "</option>";
        //echo date('d-m-Y', strtotime($date. ' + '. $i . ' days'));
        }
    ?>
      </select>
      <input type="submit" value="Kies datum">
    </form>


    <section class="overzicht-banen">
        <h4> T1 </h4>
        <tr>
          <td>12:00</td>
          <td>13:00</td>
          <td>14:00</td>
          <td>15:00</td>
          <td>16:00</td>
          <td>17:00</td>
          <td>18:00</td>
          <td>19:00</td>
          <td>20:00</td>
          <td>21:00</td>
          <td>22:00</td>
        </tr>
    </section>
    </div>
    
<?php

include("php/footer.php");

?>