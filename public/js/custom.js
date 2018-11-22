
$(document).ready(function () {
    $('#videos').DataTable();
    $('.dataTables_length').addClass('bs-select');
});


$('.btn-outline-primary').click(function () {

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

    alert('Saved');
});
