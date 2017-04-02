<!DOCTYPE html>
<html>
<head>
	<title>PDO</title>
</head>
<body>
	
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

</body>
</html>