<?php
include_once '../config/configAgenda.php';
include_once '../classes/CrudUsu.php';
$crud = new Crud($db);
$data = $crud->read();
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<script src="script.js" defer></script>
<meta charset="UTF-8">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="calendar">
    <div class="header">
      <a data-action="prev-month" href="javascript:void(0)" title="Previous Month"><i></i></a>
      <div class="text" data-render="month-year"></div>
      <a data-action="next-month" href="javascript:void(0)" title="Next Month"><i></i></a>
    </div>
    <div class="months" data-flow="left">
      <div class="month month-a">
        <div class="render render-a"></div>
      </div>
      <div class="month month-b">
        <div class="render render-b"></div>
      </div>
    </div>
  </div>
</body>

</html>