<?php require('partials/header.php'); ?>	

	<h1>Submit your Name</h1>

	<ul>
		<?php foreach ($users as $user) :?>
			<li><?= $user->name ?></li>
		<?php endforeach?>
	</ul>
	
	<form method="post" action="names">
		<input type="text" name="name" placeholder="name" required>
		<button type="submit">Save</button>
	</form>

<?php require('partials/footer.php'); ?>	
