<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Learn ALL THE THINGS</h1>
    <p>
      <img src="https://i.imgflip.com/4exm.jpg" style="width: 200px;" />
    </p>
    <?php
      # Script 1.6 - strings.php
      $first_name = "Haruki"; #AC preference on single vs. double quotes?
      $last_name = "Murakami";
      $book = "Kafka on the Shore";
      $author = $first_name . ' ' . $last_name;

      echo "<p>The book <em>$book</em> was writted by $author.</p>";
    ?>
  </body>
</html>
