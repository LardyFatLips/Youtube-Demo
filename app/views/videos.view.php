<?php require ('partials/head.php'); ?>


<h1> Submit Your Video Search </h1>


<form method="POST" action="/videos">


	<input name="title"> </input>

	<button type="submit">Submit</button>

</form>

<h1> All Videos </h1>


<?php foreach ($videos as $video) :?>

	<li><?= $video->title; ?></li>

<?php endforeach; ?>	
