<?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $db = "DogBreed";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password,$db);
  // Check connection
  if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM DogBreed ORDER BY name ASC";


  if(isset($_POST['nameSort1'])){
        $sql="SELECT * FROM DogBreed ORDER BY name DESC";
   }
  if(isset($_POST['nameSort2'])){
         $sql="SELECT * FROM DogBreed ORDER BY name ASC";
  }
  if(isset($_POST['sizeSort1'])){
          $sql="SELECT * FROM DogBreed ORDER BY avgSize ASC";
  }
  if(isset($_POST['sizeSort2'])){
          $sql="SELECT * FROM DogBreed ORDER BY avgSize DESC";
  }
  if(isset($_POST['groomSort1'])){
          $sql="SELECT * FROM DogBreed ORDER BY avgGroom DESC";
  }
  if(isset($_POST['groomSort2'])){
          $sql="SELECT * FROM DogBreed ORDER BY avgGroom ASC";
  }
  if(isset($_POST['energySort1'])){
          $sql="SELECT * FROM DogBreed ORDER BY avgEnergy ASC";
  }
  if(isset($_POST['energySort2'])){
          $sql="SELECT * FROM DogBreed ORDER BY avgEnergy DESC";
  }
  if(isset($_POST['familySort1'])){
          $sql="SELECT * FROM DogBreed ORDER BY famFriend DESC";
  }
  if(isset($_POST['familySort2'])){
          $sql="SELECT * FROM DogBreed ORDER BY famFriend ASC";
  }
  if(isset($_POST['lifeSort1'])){
          $sql="SELECT * FROM DogBreed ORDER BY avgLife DESC";
  }
  if(isset($_POST['lifeSort2'])){
          $sql="SELECT * FROM DogBreed ORDER BY avgLife ASC";
  }
  if(isset($_POST['resetSort'])){
          $sql="SELECT * FROM DogBreed ORDER BY name ASC";
  }


  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["name"]. "</td><td>" . $row["avgSize"] . "</td><td>"
      . $row["avgGroom"]. "</td><td>". $row["avgEnergy"]. "</td><td>". $row["famFriend"]. "</td><td>". $row["avgLife"]. "</td></tr>";
    }
    echo "</table>";
  }

  else {
    echo "0 results";
  }

?>
