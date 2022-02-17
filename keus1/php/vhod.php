<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header class="page-header">
  <div class="tab">
    <button class="tablinks" onclick="(event, 'Личный кабинет')">Личный кабинет</button>
    <button class="tablinks" onclick="(event, 'Главная')"><a href="../index.php">Главная</a></button>
    <button class="tablinks" onclick="(event, 'Решистрация')"><a href="registr.php">Решистрация</a></button>
  </div>
</header>
<header class="page-header">
    <img class="fit-picture"
     src="../image/logo.png"
     alt="Grapefruit slice atop a pile of other slices">
</header>

<body>
    <p><h2>Форма авторизации</h2></p>
<form action="avtori.php" method="post" class="form-example">
    <div class="form-example">
      <label for="name">Логин: </label>
      <input type="text" name="name" id="name" required>
    </div>
    <div class="form-example">
      <label for="email">Пароль: </label>
      <input type="password" name="password" id="password" required>
    </div>
    <div class="form-example">
      <input type="submit" value="Войти">
    </div>
  </form>
</body>
</html>