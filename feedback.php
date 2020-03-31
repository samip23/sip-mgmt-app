<?php

include_once 'resource/Database.php';

$statement = $db->query("SELECT * FROM feedback");

echo "<table border='1' style='solid-color: black' align='center'>"; // start a table tag in the HTML

echo "<tr><td align='center'>Name</td><td align='center'>Email</td><td align='center'>Message</td></tr>";

while($row = $statement->fetch(PDO::FETCH_NUM)){   //Creates a loop to loop through results
    echo "<tr><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
}

echo "</table>"; //Close the table in HTML

?>