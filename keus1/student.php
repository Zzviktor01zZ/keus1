<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Школьный портал</title>
</head>
<body>
    <div class="container">
   <div><header class="page-header">
        <h1>Школьный Портал</h1>

       

    </header>
     

    <img class="fit-picture"
     src="image/logo.png"
     alt="Grapefruit slice atop a pile of other slices">
   
    
  <div>  <nav class="crumbs">
        <ol class="crumbs ol">
            <li class="crumb"><a href="#" class="form_button">Главная</a></li>
            <li class="crumb"><a href="#" class="form_button">Мероприятия</a></li>
            <li class="crumb"><a href="#" class="form_button">Достижения</a></li>
            <li class="crumb"><a href="#" class="form_button">Расписание</a></li>
            <li class="crumb"><a href="#" class="form_button">Успеваемость</a></li>
        </ol>
    </nav>
    
   
    </div>
</div>

<div class="crumb">
    <div class="header__logo" >
    <?php
    if($_COOKIE['user'] == 'text'):
?>
<?php else:?>
    <div class="avto">
                <p><div class="header__logo" >
                <img src="../Media/avatar.png" width="75px" height="75px">
                </div><?=$_COOKIE['user']?><br><a href="/"> Выход</a>. </p>

            <?php endif;?>
    </div>
</div>

</div>

<div class="container">
    
<div class="ocenka">
    
    <h2 class="ot">Новая оценка 5</h2>
    <h3 class="ot">Чт. 25.02.2022 Оценка 5</h3>
    <h3 class="ot">Ср. 24.02.2022 Оценка 4</h3>
    <h3 class="ot">Вт. 23.02.2022 Оценка 4</h3>
    <h3 class="ot">Пн. 22.02.2022 Оценка 5</h3>

</div>






    
</div>




<div class="container">
   <div class="raz">
       <h1 class="h1"> Достижения обучающихся</h1>
    <img class="img" src="image/fon.jpg" >
        <h2 class="p">  Название </h2>
        <p class="p"> Описание </p>
        <p class="p1"> Дата </p>
    <img class="img" src="image/fon.jpg" >
        <h2 class="p">  Название  </h2>
        <p class="p"> Описание </p>
        <p class="p1"> Дата </p>
    <img class="img" src="image/fon.jpg" >
        <h2 class="p"> Название  </h2>
        <p class="p"> Описание </p>
        <p class="p1">  Дата </p>
    <img class="img" src="image/fon.jpg" >
        <h2 class="p"> Название  </h2>
        <p class="p"> Название  </p>
        <p class="p"> Описание </p>
        <p class="p1"> Дата </p>

   </div>
    
    
    
    
    
        
    </div>



    <div class="container">
    
        <div class="ocenka">
            <h1 class="h1"> План мероприятий</h1>
            <h3 class="ot">Мероприятие 1 22.02.2022</h3>
            <h3 class="ot">Мероприятие 2 01.03.2022</h3>
            <h3 class="ot">Мероприятие 3 15.03.2022</h3>
            <h3 class="ot">Мероприятие 4 29.03.2022</h3>
            <h3 class="ot">Мероприятие 5 05.04.2022</h3>
        
        </div>
        
        
        
        
        
        
            
        </div>


<script src="JS/app.js"></script>

</body>
</html>