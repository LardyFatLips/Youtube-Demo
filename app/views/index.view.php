<?php require ('partials/head.php'); ?>

<h1> Submit Your Video Search </h1>


<form method="POST" action="/videos">

	<input name="title" required="true"> </input>
    <input name="limit"> </input>

	<button type="submit">Submit</button>

</form>

    <table id="videos" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th class="th-sm">Name

            </th>
            <th class="th-sm">Video

            </th>
            <th class="th-sm">Description

            </th>
            <th class="th-sm">Save

            </th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($videos as $video) :?>

            <tr>

                <td>System Architect</td>

                <td>
                    <iframe src="https://www.youtube.com/embed/<?=$video->id->videoId?>">/></iframe>
                </td>

                <td>System Architect</td>


                <td>

                    <button type="button" class="btn btn-primary">Save</button>

                </td>
            </tr>


        <?php endforeach; ?>

        </tbody>
        <tfoot>
        <tr>
            <th>Name
            </th>
            <th>Video
            </th>
            <th>Description
            </th>
            <th>Save
            </th>
        </tr>
        </tfoot>
    </table>

</body>

<?php require ('partials/footer.php'); ?>