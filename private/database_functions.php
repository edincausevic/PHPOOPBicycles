<?php

function db_connect() {
  $con = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  confirm_db_connect($con);
  return $con;
}

function confirm_db_connect($con) {
  if($con->connect_errno) {
    $msg = "Database connection failed: ";
    $msg .= $con->connect_error;
    $msg .= " (" . $con->connect_errno . ")";
    exit($msg);
  }
}

function db_disconnect($con) {
  if(isset($con)) {
    $con->close();
  }
}


