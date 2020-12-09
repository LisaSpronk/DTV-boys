<?php 
include('database.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.7/semantic.min.css">
    <link rel="stylesheet" href="reserveren.css">
    <title>Document</title>
</head>
<body>
<h1>Reserveringen</h1>
<form action="reserveren_insert.php" method="POST">
<div class="ui big form">
  <div class="two fields">
    <div class="field">
      <label>Lid nummer</label>
      <input placeholder="Lid nummer" type="number" name="Lid_nummer">
    </div>
    <div class="field">
      <label>Baan code</label>
      <select placeholder="Baan code" type="text" name="Baan_code"> 
          <option value="S1" name="S1">S1</option>
          <option value="S2" name="S2">S2</option>
          <option value="S3" name="S3">S3</option>
          <option value="T1" name="T1">T1</option>
          <option value="T2" name="T2">T2</option>
          <option value="T3" name="T3">T3</option>
          <option value="T4" name="T4">T4</option>
          <option value="T5" name="T5">T5</option>
      </select>
    </div>
    <div class="field">
      <label>Reservering datum</label>
      <input placeholder="Reservering datum" type="date" name="Reservering_datum">
    </div>
    <div class="field">
      <label>Reservering tijd</label>
      <input placeholder="Reservering tijd" type="time" name="Reservering_tijd">
    </div>
  </div>
  <input type="submit" class="ui blue button" name="submit" value="submit"></input>
</div>
</form>
</body>
</html>