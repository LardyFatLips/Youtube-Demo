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

        $('#btn btn-primary').click(function () {

            alert('hi');



        });
    });


</script>


</body>


</html>