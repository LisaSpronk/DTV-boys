<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toernooi System</title>
    <link rel="stylesheet" href="css_test.css">
</head>
<body>
    <?php 
    
    include 'connection.php';
 
    
    $x = 1;
    $aantal = 32;
 

    class Deelnemer {
        public $deelnemer_naam;
        public $deelnemer_score;
        public $deelnemer_id;

        public function setId($deelnemer_id) {
            $this->id = $deelnemer_id;
        }

        public function getId(){
            return $this->id;
        }

        public function setName($deelnemer_naam) {
            $this->name = $deelnemer_naam;
        }
        
        public function getName(){
            return $this->name;
        }

        public function setScore($deelnemer_score){
            $this->score = $deelnemer_score;
        }

        public function getScore(){
            return $this->score;
        }
        
    }
    
 
    


    // $deelnemer1 = new Deelnemer();
    // $deelnemer1->setName($name);
    // $deelnemer1->setScore(rand(0,6));

    // $name1 = $deelnemer1->getName();
    // $score1 = $deelnemer1->getScore();

    // $deelnemer2 = new Deelnemer();
    // $deelnemer2->setName($name2);
    // $deelnemer2->setScore(rand(0,6));

    // $name2 = $deelnemer2->getName();
    // $score2 = $deelnemer2->getScore();

    // makeDeelnemer();
    // $name = $deelnemer->getName();
    // $score = $deelnemer->getScore();
    // $id = $deelnemer->getId();
    // $i++;

    
    // function makeDeelnemer()  {
    //     $i = 0;
    //     $firstname=array("Tim","Lisa D","Teun","Lisa S","Leo","Mark","Thomas","Klaas");
    //     $nameGenerator = $firstname[rand ( 0 , count($firstname) -1)];


    //     $deelnemer = new Deelnemer();
    //     $deelnemer->setId($i);
    //     $deelnemer->setName($nameGenerator);
    //     $deelnemer->setScore(rand(0,6));
    //     $deelnemer = $deelnemer++;


    // }

    // $x = 0;
    // while ($x <=  5) {
    //     makeDeelnemer();
    //     $i++;
    //     $x++;
    // }
   
   


        // $i = 0;

        // while ($i < 5) {
        //     $deelnemer = new Deelnemer();
        //     $deelnemer->setId($i);
        //     $deelnemer->setName($nameGenerator);
        //     $deelnemer->setScore(rand(0,6));
    
        //     $name = $deelnemer->getName();
        //     $score = $deelnemer->getScore();
        //     $id = $deelnemer->getId();
        //     $i++;
        // }

        //Deelnemer object 1

        

        //Deelnemer object 2
        // $deelnemer2 = new Deelnemer();
        // $deelnemer2->setId($i);
        // $deelnemer2->setName($nameGenerator2);
        // $deelnemer2->setScore(rand(0,6));
        
        // $name2 = $deelnemer2->getName();
        // $score2 = $deelnemer2->getScore();
        // $id2 = $deelnemer2->getId();

    


        // //User 1
        // echo "ID: " . $id;
        // echo "<br>";
        // echo "Score: " . $score;
        // echo "<br>";
        // echo "Name: " . $name;

        // echo "<br>";
  
        // $x = 0;
        // $aantal = 32;

        // $deelnemer = array();

        // $firstname=array("Tim","Lisa D","Teun","Lisa S","Leo","Mark","Thomas","Klaas");
            
        // while($x  < $aantal) {
        //     $nameGenerator = $firstname[rand ( 0 , count($firstname) -1)];
        //     $deelnemer[$x] = new Deelnemer();
        //     $deelnemer[$x]->setName($nameGenerator);
        //     $deelnemer[$x]->setScore(rand(0,6));
        //     $deelnemer[$x]->setId($x);
        //     $x++;
        // }
        
   
       $sql = "SELECT `ID`, `lid_voornaam`, `lid_tussenvoegsel`, `lid_achternaam` FROM `leden` WHERE 1";
       $result = $conn -> query($sql);

       if ($result->num_rows > 0) {
            echo "<table class='table'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Voornaam</th>";
            echo "<th>Tussenvoegsel</th>";
            echo "<th>Achternaam</th>";
            echo "</tr>";
        while($row = $result -> fetch_assoc()){
            echo "<tr>";
            echo "<td>", $row['ID'], "</td>";
            echo "<td>", $row['lid_voornaam'], "</td>";
            echo "<td>", $row['lid_tussenvoegsel'], "</td>";
            echo "<td>", $row['lid_achternaam'], "</td>";
            echo "</tr>";
           }
           echo "</table>";
       }

       $result->free();
       $conn->close();

    ?>
</body>
</html>