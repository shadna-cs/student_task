<?php
include "db.php";

$result = $conn->query("SELECT * FROM students");

while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['status']."</td>";
    echo "<td><button class='toggle' data-id='".$row['id']."'>Toggle</button></td>";
    echo "</tr>";
}
?>