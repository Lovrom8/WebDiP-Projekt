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

            const tablica = new Tablica('dionice_test', data,{"Oznaka" : 0, "Polazište" : 0, "Broj_kilometara" : 0}, 3);
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
            
            const stupci2 = { "Oznaka" : 0, "Polazište" : 0, "Odredište" : 0, "Naziv_kategorije" : 0, 
                            'Dokumenti': '<a href=dokumentDodaj.php?id={ID_dionica}&oznaka={Oznaka}>Dodaj dokument</a>',
                            'Obilazak' :  '<a href=obilasci.php?id={ID_dionica}>Evidentiraj obilazak</a>'};
            const tablica2 = new Tablica('dionice2', data, stupci2, 3);

        }
    });   
});