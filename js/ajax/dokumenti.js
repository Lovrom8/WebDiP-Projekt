$(document).ready(() => {
    $.ajax({
        type: "POST",
        data: {
           dokumenti : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            $('#dokumenti').DataTable ({
                "data" : data,
                "columns" : [
                    {"data" : "Naslov"},
                    {"data" : "Status"},
                    {"data" : "Poveznica"},
                    {
                        "data": null,
                        "render": function ( data, type, row, meta ) {
                          return '<a href=dokumenti.php?idDokumenta='+data.ID_dokument+'&status=1>Potvrdi</a>'; 
                        }
                    },
                    {
                        "data": null,
                        "render": function ( data, type, row, meta ) {
                          return '<a href=dokumenti.php?idDokumenta='+data.ID_dokument+'&status=2>Odbij</a>'; 
                        }
                    },
                ],
                "createdRow" : ( row, rowData, dataIndex ) => {
                    if ( rowData.Status === '1' ) {        
                        $(row).addClass('zeleniRed');
                    } else if ( rowData.Status === '2') {
                        $(row).addClass('crveniRed');
                    }
                }
            } );        
        }
    });   
});