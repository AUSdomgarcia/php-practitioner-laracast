<?php require 'partials/head.php'; ?>

	<h1>Submit your Name</h1>

	<form method="POST" action="/names">
		<input type="text" name="name" />
		<button type="submit">Submit</button>
	</form>

 	<h1>My Tasks</h1>

	<ul>
		<?php foreach($tasks as $task) : ?>
			<li>
				<?php if($task->completed) : ?>
					<strike>
						<?= $task->description; ?>
					</strike>
				<?php else: ?>
						<?= $task->description; ?>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ul>

<?php require 'partials/footer.php'; ?>