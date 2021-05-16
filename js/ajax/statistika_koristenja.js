var odDatum, doDatum;

function provjeriDatum(datum) {
        var min = odDatum.val();
        var max = doDatum.val();
        var date = new Date ( datum ); 

        if (( min === null && max === null ) ||
            ( min === null && date <= max ) ||
            ( min <= date   && max === null ) ||
            ( min <= date   && date <= max ))
        {
            return true;
        }

         return false ;
}
 
function zadovoljavaFitler(redak) {
    return provjeriDatum(redak.Datum_vrijeme) && redak.Korisnicko_ime.includes($('#korisnik').val());
}

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
            const stupci = { 'Opis' : 0, 'Korisnicko_ime' : 0, 'Datum_vrijeme' : 0 };
            const tablica = new Tablica('statistika', data, stupci, 0);

            $('#od, #do').on('change', () => {
                tablica.postaviPodatke(data.filter(podatak => zadovoljavaFitler(podatak)));
            } );
        
            $('#korisnik').on('keyup', () => {
                tablica.postaviPodatke(data.filter(podatak => zadovoljavaFitler(podatak)));
            } );
        }, error: (er) => {
            console.log(er);
        }
    });   

    $('#generirajPDF').click(() => {
        var doc  = new jsPDF();
        doc.autoTable({ html: '#statistika' })
        doc.save('statistikaKoristenja.pdf');
    });
 
});