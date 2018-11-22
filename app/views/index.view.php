<?php require('partials/head.php'); ?>


    <h1> Submit Your Video Search </h1>


    <section class="mb-5">

        <div class="card p-2 mb-5">

            <div class="row">

                <div class="col-lg-5 col-md-12">


                    <form method="POST" action="/videos">

                        <input name="title" required="true"> </input>

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

                            <th style="visibility:hidden">>


                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($videos as $video) : ?>

                            <tr>

                                <td><?= $video->snippet->title ?></td>

                                <td class="vid">
                                    <iframe src="https://www.youtube.com/embed/<?= $video->id->videoId ?>">/></iframe>
                                </td>

                                <td><?= $video->snippet->description ?></td>

                                <td>

                                    <button type="button" class="btn btn-outline-primary btn-sm m-0 waves-effect">Save
                                    </button>

                                </td>

                                <td style="visibility:hidden" class="hidden"><?= $video->etag ?></td>
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
                            <th style="visibility:hidden">>


                            </th>

                        </tr>
                        </tfoot>
                    </table>

                </div>


            </div>


        </div>


    </section>


<?php require('partials/footer.php'); ?>