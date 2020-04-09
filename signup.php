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

  if(isset($_POST['submit'])){
  SignUp();
  }

   function SignUp() {
     if(!empty($_POST['user'])) { //checking the email, is it empty or does it have text
      $query = mysql_query("SELECT * FROM Users WHERE userEmail = '$_POST[email]' AND pass = '$_POST[pass]'") or die(mysql_error());

        if(!$row = mysql_fetch_array($query) or die(mysql_error())) {
          newuser();
        }
        else {
          echo "Sorry, an account has already been linked with that email.";
        }
      }
    }

    function NewUser() {
       $userEmail = $_POST['email'];
       $pass = $_POST['pass'];
       $query = "INSERT INTO Users ('userEmail','pass') VALUES ('$userEmail','$pass')";
       $data = mysql_query($query)or die(mysql_error());
       if($data) {
         echo "You have been registered!";
       }
     }

  ?>
