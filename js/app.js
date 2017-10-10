/*

$("#data #data_rows").table({
    ajax: {
        url: '/proyectoFinal/modificacionFinal/getGrupos.php',
        dataType: 'json',
        processResults: function (data, page) {
            data = $.dat(data.results, function (item) { return { text: item.nombre_grupo } });
            return {
                results: data
            };
        },
        cache: true,
        delay: 500
    }
}).on('table:tabla', function (e) {
    var data = e.params.data;
    $('td.table-data').value(data.text);
});

*/

 $(document).ready(
        function () {
			$('.interno').on('click', function(ev){
				$('#sub-content').load($(this).attr('href'));
				 $("html, body").animate({ scrollTop: 0 }, "slow");
				ev.preventDefault();
			})
            $.ajax({
                url: "datatable.php"
                , method: "POST"
                , dataType: "html"
                , success: function(pagina) {
                    $("#data #data_rows").html(pagina);
                }

            });
        }
    );



    $(document).ready(
        function () {
            $.ajax({
                url: "datatable.php"
                , method: "POST"
                , dataType: "html"
                , success: function(pagina) {
                    $("#data #data_rows").html(pagina);
                }

            });
        }
    );

