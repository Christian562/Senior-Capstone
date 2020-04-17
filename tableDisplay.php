<?php
include 'db_connect.php';

$sql = "SELECT * FROM DOGBREED ORDER BY name ASC";

$result = $conn->query($sql);

if (!empty($result) && $result->num_rows > 0) {
  echo "<thead><tr><th>Name</th><th>Average Size</th>
  <th>Average Grooming</th><th>Average Energy</th>
  <th>Family Friendly</th><th>Average Lifespan</th></tr></thead>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["name"]. "</td><td>" . $row["avgSize"] . "</td><td>"
    . $row["avgGroom"]. "</td><td>". $row["avgEnergy"]. "</td><td>". $row["famFriend"]. "</td><td>". $row["avgLife"]. "</td></tr>";
  }
}

else {
  echo "0 results";
}
?>
