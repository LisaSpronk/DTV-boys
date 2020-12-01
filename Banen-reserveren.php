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
      $date = date('d-m-Y');

      for ($i = 0; $i < 8; $i++) {
        echo "<option value=". date('Y-m-d', strtotime($date. ' + '. $i . ' days')) . ">" . date('d-m-Y', strtotime($date. ' + '. $i . ' days')) . "</option>";
        //echo date('d-m-Y', strtotime($date. ' + '. $i . ' days'));
        }

      echo $date;
    ?>
      </select>
      <input type="submit" value="Kies datum">
    </form>

    <div class="flexcontainer">
      <section class="overzicht-banen">
        <h4> T1 </h4> 
        <table id="T1">
          <tr>
            <td>
              12:00 
              <form action="reservation.php" method="POST">
                <input type="hidden" value="T1" name="baancode">
                <input type="hidden" value='<?php $date ?>' name="datum"> 
                <input type="hidden" value="12:00" name="time">
                <input type="submit" name="submit-reservation" value="reserveren">
              </form>
            </td>  
          </tr>
          <tr>
            <td>13:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>14:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>15:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>16:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>17:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>18:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>19:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>20:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>21:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>22:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
        </table>
      </section>
      
      <section class="overzicht-banen">
        <h4> T2 </h4>
        <table>
          <tr>
            <td>12:00 <input type="submit" name="submit-reservation" value="reserveren"></td>  
          </tr>
          <tr>
            <td>13:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>14:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>15:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>16:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>17:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>18:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>19:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>20:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>21:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>22:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
        </table>
      </section>
      
      <section class="overzicht-banen">
        <h4> T3 </h4>
        <table>
          <tr>
            <td>12:00 <input type="submit" name="submit-reservation" value="reserveren"></td>  
          </tr>
          <tr>
            <td>13:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>14:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>15:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>16:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>17:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>18:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>19:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>20:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>21:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
          <tr>
            <td>22:00 <input type="submit" name="submit-reservation" value="reserveren"></td>
          </tr>
        </table>
      </section>
    </div>
  </div>
<?php

include("php/footer.php");

?>