<!DOCTYPE html>
<html>
<head>
	<title>PHP Practitioner</title>
</head>
<body>
	<ul>
		<?php foreach ($info as $attr => $value) : ?>
			<li><strong><?= $attr ?> : </strong><?= $value ?></li>
		<?php endforeach ?>
	</ul>
</body>
</html>