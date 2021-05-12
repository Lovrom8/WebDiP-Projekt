$(document).ready(() => {
    $.ajax({
        type: "POST",
        data: {
           moderatori_kategorije : id
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            $('#moderatori').DataTable ({
                "data" : data,
                "columns" : [
                    {"data" : "Ime"},
                    {"data" : "Prezime"},
                    {"data" : "Korisnicko_ime"},
                    {
                        "data": null,
                        "render": function ( data, type, row, meta ) {
                          return '<a href=modObrisi.php?idKat='+data.ID_kategorija+'&idMod='+data.ID_moderator+'>Obriši</a>'; 
                        }
                    }
                ], 
            } );
            
            const stupci = { "Ime" : 0, "Prezime" : 0, "Korisnicko_ime" : 0, "Obriši" : '<a href=modObrisi.php?idKat={ID_kategorija}&idMod={ID_moderator}>Obriši</a>' };
            const tablica = new Tablica('moderatori2', data, stupci, 3);
 
        }
    });   
});