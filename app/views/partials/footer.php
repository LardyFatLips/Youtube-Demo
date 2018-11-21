<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/js/addons/datatables.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="/js/mdb.min.js"></script>

<script>
    $(document).ready(function () {
        $('#videos').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });


    $('.btn-primary').click(function () {

        var table = $('#videos').DataTable();
        var getUrl = window.location;
        var baseurl = getUrl.origin;
        var data_array = table.row($(this).closest('tr')).data();
        var sanitised =[];
        var json = new Object();

        data_array.forEach(function(element) {


            var stripped = element.match(/(?:"[^"]*"|^[^"]*$)/)[0].replace(/"/g, "");
            sanitised.push(stripped);

        });

        json.title = sanitised[0];
        json.url = sanitised[1];
        json.description = sanitised[2];
        var jsonString= JSON.stringify(json);

        console.log(jsonString)

        $.ajax({

            type: 'POST',
            url: baseurl + '/videos-store',
            data: {data: json}

        });
    });


</script>


</body>


</html>