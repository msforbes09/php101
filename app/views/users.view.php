<?php require('partials/header.php'); ?>	


	<h1>Users</h1>
	
	<ul>
		<?php foreach ($users as $user) :?>
			<li>
				<strong>Name:</strong> <?= $user->name ?>
				<strong>Age:</strong> <?= $user->age ?>
			</li>
		<?php endforeach?>
	</ul>
	
	<h1>Submit your Name</h1>
	
	<form method="post" action="users">
		<p>
			<input type="text" name="name" placeholder="name" required>
		</p>
		<p>
			<input type="number" name="age" placeholder="age" required>
		</p>
		<p>
			<button type="submit">Save</button>
		</p>
	</form>

<?php require('partials/footer.php'); ?>	
