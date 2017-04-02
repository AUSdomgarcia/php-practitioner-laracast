<?php require 'partials/head.php'; ?>

	<h1>Submit your Name</h1>

	<?php foreach ($users as $user) : ?>
		<li><?= $user->name; ?></li>
	<?php endforeach; ?>

	<form method="POST" action="/names">
		<input type="text" name="name" />
		<button type="submit">Submit</button>
	</form>

<?php require 'partials/footer.php'; ?>