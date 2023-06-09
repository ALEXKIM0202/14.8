 <?php

	session_start();

	?>
 <!DOCTYPE html>
 <!--атрибут lang определяет язык содержимого элемента.-->
 <html lang="ru">

 <!--метаданные-->

 <head>
 	<!--данная запись указывает браузеру кодировку в которой была написана данная страница - формат документа и раскладку клавиатуры-->
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 	<!--призывает Internet Explorer работать в определённом режиме документа-->
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<!--мeta-тег viewport сообщает браузеру о том, как именно обрабатывать размеры страницы, и изменять её масштаб-->
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<!--определяет заголовок документа, который отображается в заголовке окна браузера или на вкладке страницы.-->
 	<title>14.8</title>
 	<!--подключение файла стилей-->
 	<link rel="stylesheet" type="text/css" href="pages/style.css" media="all">
 </head>

 <body style="display:flex; justify-content: space-between; background-image:url(img/tim-chow-9IcKPSQ9G5Q-unsplash.jpg); background-size:cover; background-attachment:fixed; background-position:center;">

 	<div class="login_left" style="background-image:url(img/atikah-akhtar-gzfIO69Q6eM-unsplash.jpg); background-size:cover; background-attachment:fixed; background-position:center; border: 1px solid black; display: flex; flex-direction: column; top: 50%; width: 30%; margin: 0 2% 0 2%;">
 	</div>

 	<div>
 		<h1 class="title">Спа салон "Relax"</h1>
 		<form method="post" action="pages/index.php" class="form">
 			<label>Логин</label>
 			<input type="text" name="user" placeholder="Введите свой логин">
 			<label>Пароль</label>
 			<input type="password" name="password" placeholder="Введите пароль">
 			<label>Дата рождения</label>
 			<input type="number" name="day" id="day" min="1" max="31" placeholder="Введите день рождения">
 			<input type="number" name="month" id="month" min=" 1" max="12" placeholder="Введите месяц рождения">
 			<input type="number" name="year" id="year" min="1900" max="2022" placeholder="Введите год рождения">
 			<button type="submit">Войти</button>
 			<?php
				if ($_SESSION['message']) {
					echo "<p style = color:red;> " . $_SESSION['message'] . " </p>";
				}
				unset($_SESSION['message']);
				?>
 		</form>
 	</div>

 	<div class="login_right" style="border: 1px solid black; display: flex; flex-direction: column; justify-content: space-around; top: 50%; width: 30%; margin: 0 2% 0 2%;">
 		<h3 style="font-size: 22px; "> Акции в нашем салоне:</h3>
 		<div style="display: flex;flex-direction: column; justify-content: space-around;">
 			<p style="border: 1px solid red; font-size: 20px;">Каждую среду - скидка 15% на массаж;</p>
 			<p style="border: 1px solid red; font-size: 20px;">Каждую субботу - скидка 15% на чайную церемонию со сладостями</p>
 			<p style="border: 1px solid red; font-size: 20px;">Каждое воскресенье - скидка 15% на кремовое шоколадное обертывание всего тела</p>
 		</div>
 	</div>

 </body>

 </html>