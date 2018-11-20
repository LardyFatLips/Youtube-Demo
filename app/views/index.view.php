<?php require ('partials/head.php'); ?>

<h1> Submit Your Video Search </h1>


<form method="POST" action="/videos">


	<input name="title"> </input>

	<button type="submit">Submit</button>

</form>


<?php foreach ($videos as $video) :?>

    <iframe width="420" height="315"
            src="https://www.youtube.com/embed/<?=$video->id->videoId?>">
    </iframe>

<?php endforeach; ?>

<?php require ('partials/footer.php'); ?>