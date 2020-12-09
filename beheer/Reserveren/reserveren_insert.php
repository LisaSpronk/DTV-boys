<?php 
 
if(isset($_POST['submit'])) {
include('database.php');

        $Lid_nummer = $_POST['Lid_nummer'];
        $Baan_code = $_POST['Baan_code'];
        $Reservering_datum = $_POST['Reservering_datum'];
        $Reservering_tijd = $_POST['Reservering_tijd'];

        $sql = "INSERT INTO Reservering (Lid_nr, Baan_code, Reservering_datum, Reservering_tijd) VALUES ('$Lid_nummer', '$Baan_code', '$Reservering_datum', '$Reservering_tijd')";
            // $stmt = $conn->prepare('INSERT INTO Reservering (Lid_nr, Baan_code, Reservering_datum, Reservering_tijd) VALUES (?, ?, ?, ?)');
            // $stmt->bind_param("isss", $Lid_nummer, $Baan_code, $Reservering_datum, $Reservering_tijd);
            // $stmt->execute();
            echo $sql;
            if ($conn->query($sql) === TRUE) {
                echo "<script>window.location.href = 'http://localhost/dtv-boys/beheer/Reserveren/reserveren.php'; </script>";
                
            } else {
                echo "Error" . $conn->error;
            }
        };
?>