<?php
  $photoname = (str) $_POST['photoname'];
  $date = (str) $_POST['date'];
  $photographer = (str) $_POST['photographer'];
  $location = preg_replace('/\t|\R/',' ',$_POST['location']);
  //$document_root = $_SERVER['DOCUMENT_ROOT'];
  //$date = date('H:i, jS F Y');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>View Photos</title>
  </head>
  <style>
  .viewallphotosarea {
  width: auto;
  max-width: 400px;
  height: auto;
  padding: 10px;
  margin: 20px;
  border: 1px solid black;
}
  </style>
  <body>
  <div class="addphotoarea">
    <h1>View all photos</h1>
    <h2>Order Results</h2> 
    <?php