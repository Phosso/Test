<?php

session_start();

?>

<html>
<head>
	<title>Тестирование</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="container">
			<h1>Тест по Борджиа</h1>
		</div>
	</header>

	<main>
			<div class="container">
				<p>Итог</p>
				<p>Поздравляем, тестирование завершено.</p>
				<h2>Количество верных ответов <?php echo $_SESSION['score']; ?>  </h2>
				<?php unset($_SESSION['score']); ?>

			</div>

	</main>


	<footer>
			<div class="container">
				Copyright &copy; Исторический архив
			</div>


	</footer>








</body>
</html>