<!DOCTYPE html>
<html>
<head>
	<title>PHP Practitioner</title>
</head>
<body>
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