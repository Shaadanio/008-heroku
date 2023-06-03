<?php
    $name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Netology</title>
</head>
<body>
<form class="box-info" action="exit.php" method="POST">
  <?php echo "<span class='user_name'>Вы вошли под именем: $name</span>";?>
  <input type="submit" name="submit" value="Выйти" />
</form>
</body>
</html>