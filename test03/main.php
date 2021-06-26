<?php
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));


?>
<html>
<head>
	<title>Тестирование</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="container">
			<p>Тест</p>
		</div>
	</header>

	<main>
			<div class="container">
				<h2>на знания о биографии Борджиа</h2>
				<p>
					Здесь вы проверите и узнаете свой уровень в знаниях истории Италии XV века эпохи Борджиа.
				</p>
				<ul>
					<li><strong>Всего вопросов:</strong><?php echo $total_questions; ?> </li>
					<li><strong>Тема:</strong> Борджиа</li>
					<li><strong>Время:</strong> <?php echo $total_questions*1.5; ?></li>

				</ul>

				<a href="question.php?n=1" class="start">НАЧАТЬ</a>

			</div>

	</main>


	<footer>
			<div class="container">
				Copyright &copy; Исторический архив
			</div>


	</footer>
