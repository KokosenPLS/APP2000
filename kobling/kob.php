<?php

$servername = "itfag.usn.no";
$dBusername = "h20DAT2000gr6";
$dBpassword = "pw.123456";
$dBname ="h20DAT2000_dbgr6";

$conn = mysqli_connect($servername, $dBusername, $dBpassword, $dBname);

if (!$conn) {
  die("connection failed: ".mysqli_connect_error());
}
