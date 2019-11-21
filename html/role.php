<ul>
  <li><a class="hover" href="./index.html"> Home </a></li>
  <li><a class="hover" href="./index.html"> Patient Info </a></li>
  <li><a class="hover" href="./index.html" target="_blank"> Logout </a></li>
</ul>

<?php
session_start();
include_once "../db.php";
$sql = "SELECT patientId, Fname, Lname FROM user WHERE patientId IS NOT NULL;";
$results = mysqli_query($conn, $sql);
$users = [];
$jsUsers= [];
#echo gettype($users);
$resultCheck = mysqli_num_rows($results);
$i = 0;
?>

<div class=table>
<?php
"SELECT * FROM `roles`";

  $roles = mysqli_query($conn, $sql);
  echo "<table border=1>";
  while($row = mysqli_fetch_assoc($results)){
    echo "<tr>";
    foreach($row as &$roles){
      echo "<td>{$roles}</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
?>
</div>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../css/role.css">
    <meta name="viewport" content="width=device-width" />
    <title> Role </title>
  </head>
  <body>
  <div class="form">
    <h1> Create Role </h1>
    <!-- this is where the php will go for the table to display current roles -->
    <form  method="post" accept-charset="utf-8">
      <label class="register"> New Role : <input type="text" value="" name="newRole" id="newRole"/></label>
      <label class="register"> Access Level : <input type="text" value="" name="accessLevel" id="accessLevel"/></label>
      <button type="submit" value="Submit" name="submit" class="submit" form="login"> Submit </button>
      <a class="cancel" href="./index.html" target="_self"> Cancel </a>
    </form>
  </div>
  </body>
</html>
