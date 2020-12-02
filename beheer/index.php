<?php include('beheer_header.php');
include('../database.php');
$stmt = $conn->prepare("SELECT * FROM Leden ORDER BY Leden .Lid_nr DESC LIMIT 5");
$stmt->execute();
$result = $stmt->get_result();




?>
<div id="content_beheer">
<div class="sides side">
</div>
<div id="dashbord">
    <h1 class="title">Beheer</h1>
    <p>Welkom dit is het beheer van de website dan de Doetinchemse Tennis vereneging</p>
    <hr>
    <table class="border">
        <tr>
            <th>Nieuwste Leden</th>
            </td>
        </tr>
            <?php
                while ($row = $result->fetch_assoc()) { 
                    echo" <tr><td>".$row['Lid_voornaam']."<td><td>".$row['Lid_tussenvoegsel']."<td><td>".$row['Lid_achternaam']."<td></tr>";
                }
            ?>
    </table>
    <img class="dasbordImage" src="../images/maxresdefault.jpg" alt="">
</div>
<div class="sides side"></div>
</div>
<?php include('beheer_footer.php');$stmt->close();?>