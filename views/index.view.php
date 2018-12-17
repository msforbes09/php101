<?php require 'partials/header.php'; ?>	

	<h1>My tasks</h1>
	<ul>
		<?php foreach ($tasks as $task) : ?>
			<?php if($task->completed) : ?>
				<li><strike><?= $task->description; ?></strike></li>
			<?php else : ?>
				<li><?= $task->description; ?></li>
			<?php endif ?>
		<?php endforeach ?>
	</ul>

<?php require 'partials/footer.php'; ?>	
