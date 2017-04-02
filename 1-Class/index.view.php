<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP by Jeffrey Way</title>
</head>
<body>
	<ul>
		<?php foreach($tasks as $task) : ?>
			<li>
				<?php if($task->isComplete()): ?>
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