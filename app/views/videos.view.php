<?php require('partials/head.php'); ?>


<h1> Saved Videos </h1>

<section class="mb-10">


    <div class="card p-5 mb-7">

        <div class="row">

            <div class="col-lg-5 col-md-12">


                <table id="videos" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">Name

                        </th>
                        <th class="th-sm">Video

                        </th>
                        <th class="th-sm">Description

                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($videos as $video) : ?>

                        <tr>

                            <td><?= $video->title ?> </td>

                            <td>
                                <iframe src="<?= $video->url ?>"></iframe>
                            </td>

                            <td><?= $video->description ?></td>

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
                    </tr>
                    </tfoot>
                </table>

            </div>

        </div>

    </div>

</section>


<?php require('partials/footer.php'); ?>
