<!DOCTYPE html>
<html lang="en" id="background-pallete">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Ali Mohammad Jobaer" />
  <title>Enhancementforphp</title>
  <link href="style/style.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,500;1,300;1,700&display=swap" rel="stylesheet">
</head>
<h1 id="header-title">PHP Enhancements</h1>
<?php
include_once("menu.inc");
?>

<body>
  <header>
    <h1 id="showcase">Welcome To the enhancement page for php</h1>
    <p>There are two enhancements done in the php part</p>
  </header>
  <section id="section-a">
    <p>The first enhancement which was done was normalising the tables.
      A link is created between two tables when the column that holds the primary key value for one table is referenced by the column in another table. ... This column becomes a foreign key in the second table.
    </p>
    <figure>
      <img src="style/sreeya.png" alt="Enhancementforphp" title="Normalising the tables">
    </figure>
  </section>
  <section id="section-b">
    <p>The sign up system records singed up username and passsword and the login system verifies if the entered username and password are correct and gives access to manage.php page</p>
  </section>
  <?php
  include_once("footer.inc");
  ?>
</body>

</html>