<?php require ('partials/head.php'); ?>


<h1> Saved Videos </h1>


<?php foreach ($videos as $video) :?>

	<li><?= $video->title; ?></li>

<?php endforeach; ?>	
