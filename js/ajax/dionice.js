$(document).ready(() =>{
    const sve = $("#ajaxDionice").attr('sve');

    if(sve === "1")
        $("#dok").css("display", "block");

    $.ajax({
        type: "POST",
        data: {
           dionice : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            $('#dionice').DataTable ({
                "data" : data,
                "columnDefs": [
                    { "visible": false, "targets": 3 },
                    { "visible": sve === "1", "targets": 4 }
                ],
                "columns" : [
                    {"data" : "Oznaka"},
                    {"data" : "Polazište"},
                    {"data" : "Odredište"},
                    {"data" : "Naziv_kategorije"},
                    {
                        "data": null,
                        "render": ( data, type, row, meta ) => {
                          return '<a href=dokumentDodaj.php?id='+data.ID_dionica+'&oznaka='+data.Oznaka+'>Dodaj dokument</a>'; 
                        }
                    },
                    {
                        "data": null,
                        "render": ( data, type, row, meta ) => {
                          return '<a href=obilasci.php?id='+data.ID_dionica+'>Evidentiraj obilazak</a>'; 
                        } 
                    }
                ], 
                order: [[3, 'asc']],
                rowGroup: {
                    dataSrc: "Naziv_kategorije"
                }        
            } );        
        }
    });   
});