<?php require 'partials/head.php'; ?>

	<h1>Submit your Name</h1>

	<form method="POST" action="/names">
		<input type="text" name="name" />
		<button type="submit">Submit</button>
	</form>

	<ul>
	<?php foreach ($users as $user) : ?>
		<li><?= $user->name; ?></li>
	<?php endforeach; ?>
	</ul>
	
<?php require 'partials/footer.php'; ?>