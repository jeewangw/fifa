<html>
<body>

<?php
    include 'db_connection.php';

    //Preventing Possible SQL Injection O_O
    $player_name = mysqli_real_escape_string($conn,$_POST['player_name']);
    
    if(empty($player_name)){
        echo "</br>";
        echo "Player Name was not entered";
        echo "</br>";
    }
    else
    {
            echo "</br>";
            echo "Player Name given was: ". $player_name . "</br>";

        $sql = "SELECT `Game ID`, `Team Name`, `Player Name`, `Player Club`, `Number of Goals` 
                FROM  goal_info
                WHERE `Player Name` LIKE '$player_name%'
                GROUP BY `Game ID`, `Team Name`, `Player Name`, `Player Club`, `Number of Goals`
                ORDER BY `Player Name`";

        //$result = $conn->query($sql)->fetch_array();
        $count = 0;
        echo "<table>";
        echo "<tr>";
        echo "<th>GameID</th>";
        echo "<th>Team</th>";
        echo "<th>PName</th>";
        echo "<th>Club</th>";
        echo "<th>No. of Goals</th>";
        echo "</tr>";

        $result = mysqli_query($conn,$sql) or die("Bad Query: $sql");

            while($row = mysqli_fetch_assoc($result)) {
                //print_r($row[1]);
                //echo "<tr><td>" . $row["GameID"]. "</td><td>\t\t\t" . $row["PName"]. "</td><td>\t\t\t" . $row["COUNT(Penalty)"]. "</td></tr>";
                echo "<tr>";
                echo "<td>".$row["Game ID"]."</td>";
                echo "<td>".$row["Team Name"]."</td>";
                echo "<td>".$row["Player Name"]."</td>";
                echo "<td>".$row["Player Club"]."</td>";
                echo "<td>".$row["Number of Goals"]."</td>";
                echo "</tr>";
                $count = $count + 1;
            }
            echo "</table>";
            echo "</br>";
            echo "Total Rows Returned: ". $count ."</br>";
    }
    ?>
</body>
</html>