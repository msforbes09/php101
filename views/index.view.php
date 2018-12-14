<!DOCTYPE html>
<html>
<head>
	<title>PHP Practitioner</title>
</head>
<body>
	<nav>
		<ul>
			<li><a href="/about.php">About Us</a></li>
			<li><a href="/contact.php">Contact Us</a></li>
		</ul>
	</nav>
	<ul>
		<?php foreach ($tasks as $task) : ?>
			<?php if($task->completed) : ?>
				<li><strike><?= $task->description; ?></strike></li>
			<?php else : ?>
				<li><?= $task->description; ?></li>
			<?php endif ?>
		<?php endforeach ?>
	</ul>
</body>
</html>