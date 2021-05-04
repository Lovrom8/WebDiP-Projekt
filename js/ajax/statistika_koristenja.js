var odDatum, doDatum;

$.fn.dataTable.ext.search.push(
    ( settings, data, dataIndex ) => {
        var min = odDatum.val();
        var max = doDatum.val();
        var date = new Date ( data[2] ); 

        var datumOk = false;

        if (( min === null && max === null ) ||
            ( min === null && date <= max ) ||
            ( min <= date   && max === null ) ||
            ( min <= date   && date <= max ))
        {
            datumOk = true;
        }

        var korisnikOk = false;

        var korisnik = data[1]; 
        var korisnikPretraga = $('#korisnik').val(); 
        var korisnikOk = korisnik === korisnikPretraga || korisnikPretraga === "";

        return datumOk && korisnikOk;
    }
);
 

$(document).ready(() => {
    var table;

    odDatum = new DateTime($('#od'), {
        format: 'YYYY-MM-DD HH:MM:SS'
    });
    doDatum = new DateTime($('#do'), {
        format: 'YYYY-MM-DD HH:MM:SS'
    });

    $.ajax({
        type: "POST",
        data: {
           statistika_koristenja : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            table = $('#statistika').DataTable ({
                "data" : data,
                "columns" : [
                    {"data" : "Opis"},
                    {"data" : "Korisnicko_ime"},
                    {"data" : "Datum_vrijeme"}
                ]
            } );        
        }, error: (er) => {
            console.log(er);
        }
    });   

    $('#od, #do').on('change', () => {
        table.draw();
    } );

    $('#korisnik').on('keyup', () => {
        table.draw();
    } );
});