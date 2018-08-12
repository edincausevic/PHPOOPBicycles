<?php
require_once('../../private/initialize.php'); 

$id = $_GET['id'];
if(!$id) { redirect_to('index.php'); }

$result = Bicycle::removeBike($id);
if($result) {
  redirect_to('index.php');
}