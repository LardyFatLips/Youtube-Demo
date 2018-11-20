<?php require ('partials/head.php'); ?>


<h1> Saved Videos </h1>

<?php foreach ($videos as $video) :?>
<div>
    <iframe width="420" height="315"
            src="https://www.youtube.com/embed/<?=$video->url?>">
    </iframe>


</div>
<?php endforeach; ?>


<?php require ('partials/footer.php'); ?>
