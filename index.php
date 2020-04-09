<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <title>Dog Breed Database</title>
</head>
<body>

  <div class="row">
    <div class="col-sm-9">
      <h1>Dog Breeds</h1>
    </div>

    <div class="col-sm-3">
        <form name="Login" method="post">
            <label for="fname">Login:</label><br>
            <input type="text" id="login" name="login" placeholder="example@gmail.com"><br>
            <label for="lname">Password:</label><br>
            <input type="text" id="pass" name="pass" ><br><br>
            <input type="submit" value="Log In">
        </form>
        <button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>

        <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">times;</span>
  <form class="modal-content" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Login</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="pass"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>

      <label for="pass-re"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="pass-re" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="submit">Sign Up</button>
      </div>
    </div>
  </form>
</div>
    </div>
  </div><br>


  <div class="row">
    <div class="col-sm-3">
      <label style="margin: 4%" for="nameSort1">Name Sort:</label>
        <div class="btn-group" style="margin-left: 5px">
          <form name="Name Sort" method="post">
            <button type="submit" class="btn btn-secondary" name="nameSort1">Z-A</button>
          </form>
          <form name="Name Sort" method="post">
            <button type="submit" class="btn btn-secondary" name="nameSort2">A-Z</button>
          </form>
        </div>

        <label style="margin: 4%" for="sizeSort1">Avg. Size Sort:</label>
        <div class="btn-group" style="margin-left: 5px">
          <form name="Name Sort" method="post">
            <button type="submit" class="btn btn-secondary" name="sizeSort1">Large</button>
          </form>
          <form name="Name Sort" method="post">
            <button type="submit" class="btn btn-secondary" name="sizeSort2">Small</button>
          </form>
        </div>

        <label style="margin: 4%" for="groomSort1">Avg. Groom Sort:</label>
        <div class="btn-group" style="margin-left: 5px">
          <form name="Name Sort" method="post">
            <button type="submit" class="btn btn-secondary" name="groomSort1">Often</button>
          </form>
          <form name="Name Sort" method="post">
            <button type="submit" class="btn btn-secondary" name="groomSort2">Rarely</button>
          </form>
        </div>

        <label style="margin: 4%" for="energySort1">Avg. Energy Sort:</label>
        <div class="btn-group" style="margin-left: 5px">
          <form name="Name Sort" method="post">
            <button type="submit" class="btn btn-secondary" name="energySort1">High</button>
          </form>
          <form name="Name Sort" method="post">
            <button type="submit" class="btn btn-secondary" name="energySort2">Low</button>
          </form>
        </div>

        <label style="margin: 4%" for="familySort1">Family Friendly Sort:</label>
        <div class="btn-group" style="margin-left: 5px">
          <form name="Name Sort" method="post">
            <button type="submit" class="btn btn-secondary" name="familySort1">Yes</button>
          </form>
          <form name="Name Sort" method="post">
            <button type="submit" class="btn btn-secondary" name="familySort2">No</button>
          </form>
        </div>

        <label style="margin: 4%" for="lifeSort1">Avg. Life Sort:</label>
        <div class="btn-group" style="margin-left: 5px">
          <form name="Name Sort" method="post">
            <button type="submit" class="btn btn-secondary" name="lifeSort1">Higher</button>
          </form>
          <form name="Name Sort" method="post">
            <button type="submit" class="btn btn-secondary" name="lifeSort2">Lower</button>
          </form>
        </div>

        <label style="margin: 4%" for="reset">Reset Sorting:</label>
        <div class="btn-group" style="margin-left: 10px">
          <form name="Name Sort" method="post">
            <button type="submit" class="btn btn-secondary" name="resetSort">Reset</button>
          </form>
        </div>
    </div>


    <div class="col-sm-9">
      <table class="table table-striped">
        <tr>
          <th>Name</th>
          <th>Average Size</th>
          <th>Average Grooming</th>
          <th>Average Energy</th>
          <th>Family Friendly</th>
          <th>Average Lifespan</th>
        </tr>
        <?php
        include 'db_connection.php';
        ?>
      </table>
    </div>

  </div>


</body>
</html>
