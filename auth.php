<?php

if (!isset($_SESSION["user"]) OR isset($_COOKIE["login"])) {
   header("Location: login.php");
}

 $id_session = $_SESSION["user"]["id"];
 $sql_session = "SELECT * FROM users WHERE id='$id_session'";
 $query_session = mysqli_query($link, $sql_session);
 $row_session = mysqli_fetch_array($query_session);

if ($row_session['active'] == "N") {
 if (isset($_SESSION["user"])) {
  header("Location: activation.php");
 }
}

?>