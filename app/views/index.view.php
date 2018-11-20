<?php require ('partials/head.php'); ?>

<h1> Submit Your Video Search </h1>


<form method="POST" action="/videos">


	<input name="title" required="true"> </input>
    <input name="limit"> </input>

	<button type="submit">Submit</button>

</form>

<?php foreach ($videos as $video) :?>

    <div>
    <iframe width="420" height="315"
            src="https://www.youtube.com/embed/<?=$video->id->videoId?>">
    </iframe>

        <form action="/videos-store" method="post">

<!--            <input type="hidden" name="description" value="83" />-->
<!--            <input type="hidden" name="" value="100" />-->
            <button type="submit" name="videoId" value= <?=$video->id->videoId?>> Upvote </button

        </form>

    </div>



<?php endforeach; ?>

<?php require ('partials/footer.php'); ?>