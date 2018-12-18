<?php require('partials/header.php'); ?>	

	<h1>Submit your Name</h1>

	<ul>
		<?php foreach ($users as $user) :?>
			<li><?= $user->name ?></li>
		<?php endforeach?>
	</ul>
	
	<form method="post" action="names">
		<p>
			<input type="text" name="age" placeholder="age" required>
		</p>
		<p>
			<input type="text" name="name" placeholder="name" required>
		</p>
		<p>
			<button type="submit">Save</button>
		</p>
	</form>

<?php require('partials/footer.php'); ?>	
