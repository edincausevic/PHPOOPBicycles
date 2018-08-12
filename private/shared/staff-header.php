<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $company->name; ?> <?php if (isset($page_title)) echo '- '.  $page_title; ?></title>
  <link rel="stylesheet" href="<?php echo get_folder_name($file_loc) == 'staff' ?  '../css/style.css' : '../../css/style.css'; ?> ">
  
</head>
<body>
<header>
  <div class="row">
    <div class="logo-box">
      <img src="<?php echo get_folder_name($file_loc) == 'staff' ?  '../img/bbs-main-logo.png' : '../../img/bbs-main-logo.png'; ?> " class="logo" alt="Logo">
      <h1>The Bicycle Shop <?php echo $company->name; ?></h1>
      <h2><?php echo $company->address; ?> <?php echo $company->phone; ?></h2>
      <h3>Open <?php echo $company->open; ?></h3>
    </div>
  </div>
</header>