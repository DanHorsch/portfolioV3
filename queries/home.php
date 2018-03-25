<?php
  $query    = "SELECT * FROM projects WHERE id = '1'";
  $result   = $mysqli->query($query);
  $featured = $result->fetch_assoc();

  $query    = "SELECT * FROM messageLog";
  $logs     = $mysqli->query($query);
?>
