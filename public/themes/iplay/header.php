<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>

</head>

<body>
  <header>
    <nav role="navigation">
      <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
  </nav>
  </header>
