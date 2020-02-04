<?php
  ob_start(); //wait until we have all of the data before sending to server
  session_start();


  $timezone = date_default_timezone_set("America/Toronto");

  $con = mysqli_connect("localhost", "root", "", "slotify");

  if(mysqli_connect_errno()) {
    echo "Failed to connect: " - mysqli_connect_errno();
  }

 ?>
