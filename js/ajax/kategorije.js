$(document).ready(() => {
    $.ajax({
        type: "POST",
        data: {
           kategorije : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            $.each(data, (i, el) => {
                $("#kategorija").append(
                   $("<option></option>").val(el.ID_kategorija).html(el.Naziv_kategorije)
                )
            });

            $('#kategorije').DataTable ({
                "data" : data,
                "columns" : [
                    {  "data" : "Naziv_kategorije" },
                    {   
                       "data": null,
                       "render": function ( data, type, row, meta ) {
                           return '<a href=moderatoriKategorije.php?id='+data.ID_kategorija+'>Uredi moderatore</a>'; 
                        }
                    }
                ]
            } );     

        }, error: (er) => {
            console.log(er);
        }
    });   
});