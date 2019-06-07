<html>
<body>

<?php
    include 'db_connection.php';

    //Preventing Possible SQL Injection O_O
    $team_name = mysqli_real_escape_string($conn,$_POST['team_name']);
    
    if(empty($team_name)){
        echo "</br>";
        echo "Team Name was not entered";
        echo "</br>";
    }
    else
    {
            //Breaking a Line Using Php
            echo "</br>";
            echo "Team Name given was: ". $team_name . "</br>";
            echo "</br>";
            echo "Querying Data from GOAL_INFO View Table";
            echo "</br>";
            echo "</br>";

        $sql =  "SELECT DISTINCT `Game ID`,`Player Name`, `Number of Goals`
                FROM goal_info
                WHERE `Team Name` = '$team_name'
                GROUP BY `Game ID`, `Player Name`, `Number of Goals`
                ORDER BY `Number of Goals` DESC";
        $count = 0;
        //$result = $conn->query($sql)->fetch_array();
        echo "<table>";
        echo "<tr>";
        echo "<th>GameID</th>";
        echo "<th>PName</th>";
        echo "<th>Number of Goals</th>";
        echo "</tr>";

        $result = mysqli_query($conn,$sql) or die("Bad Query: $sql");

            while($row = mysqli_fetch_assoc($result)) {
                //print_r($row[1]);
                //echo "<tr><td>" . $row["GameID"]. "</td><td>\t\t\t" . $row["PName"]. "</td><td>\t\t\t" . $row["COUNT(Penalty)"]. "</td></tr>";
                echo "<tr>";
                echo "<td>".$row["Game ID"]."</td>";
                echo "<td>".$row["Player Name"]."</td>"; 
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