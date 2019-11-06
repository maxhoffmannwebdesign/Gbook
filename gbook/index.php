<?php
require("gbook.php");
?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <div>
    <h1>Guestbook</h1>  
    <?php
    $gBook = new GBook();
    $gBook->showEntries();
    ?>
  </div>
  <div>  
    <form class="messageform" action="createentry.php" method="post" style="">
      <h3 style="margin-left: 1rem">Nachricht hinterlassen</h3>
      <p class="signupp">
        Name:
      </p>
      <input type="text" name="name" placeholder="Name">
      <p class="signupp">
        Nachricht:
      </p>
      <textarea rows="4" cols="50" name="message"></textarea>
      <p><button class="formbutton" type="submit" name="message-submit" >Abschicken</button></p>
    </form>
  </div>
</body>
</html>
