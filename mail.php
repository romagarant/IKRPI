<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="utf-8">
   <title>ИК РПИ</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png" data-mce-href="/apple-touch-icon-57x57.png">
   <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png" data-mce-href="/apple-touch-icon-60x60.png">
   <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png" data-mce-href="/apple-touch-icon-72x72.png">
   <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png" data-mce-href="/apple-touch-icon-76x76.png">
   <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png" data-mce-href="/apple-touch-icon-114x114.png">
   <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png" data-mce-href="/apple-touch-icon-120x120.png">
   <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png" data-mce-href="/apple-touch-icon-144x144.png">
   <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png" data-mce-href="/apple-touch-icon-152x152.png">
   <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png" data-mce-href="/apple-touch-icon-180x180.png">
   <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32" data-mce-href="/favicon-32x32.png">
   <link rel="icon" type="image/png" href="img/favicon/android-chrome-192x192.png" sizes="192x192" data-mce-href="/android-chrome-192x192.png">
   <link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96" data-mce-href="/favicon-96x96.png">
   <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16" data-mce-href="/favicon-16x16.png">
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"> -->
   <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
   <div class="page-header">
      <div class="head wrap">
         <a href="index.html" class="logo"></a>
         <ul class="nav">
            <li><a class="back-btn" href="#back-form">Обратная связь</a></li>
            <li><a href="#partners">Партнёры</a></li>
            <li><a href="#projects">Проекты</a></li>
            <li><a href="vacancy.html">Вакансии</a></li>
            <!-- <li><a href="#clients">Клиенты</a></li> -->
            <!-- <li><a href="#team">Команда</a></li> -->
            <li><a style="padding-right: 0;" href="contacts.html">Контакты</a></li>
         </ul>
   
            <div class="header-line wrap"></div>
         
      </div>
   </div>
   <div class="mail wrap">
	<?php
   $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
   if(!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['mail']) 
   and !empty($_POST['message'])){
      $name = trim(strip_tags($_POST['name']));
      $phone = trim(strip_tags($_POST['phone']));
      $mail = trim(strip_tags($_POST['mail']));
      $message = trim(strip_tags($_POST['message']));
 
      mail('roman27ufk@gmail.com', 'Письмо с адрес_вашего_сайта', 
      'Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />Его почта: '.$mail.'<br />
      Его сообщение: '.$message,"Content-type:text/html;charset=utf-8");
 
      echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
      ближайшее время<Br> $back";
 
      exit;
   } 
   else {
      echo "Для отправки сообщения заполните все поля! $back";
      exit;
   }
?>
</div>
</body>
</html>