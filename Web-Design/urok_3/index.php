<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="reviveTheStaticLayote.css">
  <title>Lesson 3 reviveTheStaticLayote</title>
</head>
<body>
  <header>
    <nav class = "container">
     <!-- <ul id = "menu">   /* так делать нельзя */
        <?php for($i = 1; $i <= 5; $i++) { ?>
        <li><a href="#">Item <?php echo $i; ?> </a></li>
        <?php } ?>
      </ul> -->
      <ul id = "menu">
        <?php
        include 'template.php';
        ?>
      </ul>
    </nav>
  </header>

</body>
</html>
