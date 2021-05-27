var odDatum, doDatum;

/*function provjeriDatum(datum) {
    var min = odDatum.val();
    var max = doDatum.val();
    var date = new Date(datum);

    if ((min === null && max === null) ||
        (min === null && date <= max) ||
        (min <= date && max === null) ||
        (min <= date && date <= max)) {
        return true;
    }

    return false;
}

function zadovoljavaFitler(redak) {
    return provjeriDatum(redak.Datum_vrijeme) && redak.Korisnicko_ime.includes($('#korisnik').val());
}*/

const stupci = {
    'Opis': 0,
    'Korisnicko_ime': 0,
    'Datum_vrijeme': 0
};
const naslovi = ["Stranica", "Korisnik", "Datum"];
const filteri = {
    'Korisnik': '',
    'Od': '',
    'Do': ''
}
const tablica = new Tablica('statistika', 'statistika_koristenja', stupci, naslovi, filteri, 0);

function prikaziGraf(podaci) {
    var polje = document.getElementById("grafStatistike");
    polje.width = 500;
    polje.height = 500;

    let brojPosjeta = podaci.reduce((a, b) => {
        a[b.Opis] = parseInt(b.BrojPosjeta)
        return a
    }, {});

    var graf = new TortaGraf({
        canvas: polje,
        podaci: brojPosjeta
    });

    graf.nacrtaj();
    graf.nacrtajLegendu(brojPosjeta);
}

$(document).ready(() => {
    odDatum = new DateTime($('#od'), {
        format: 'YYYY-MM-DD HH:MM:SS'
    });
    doDatum = new DateTime($('#do'), {
        format: 'YYYY-MM-DD HH:MM:SS'
    });

    $.ajax({
        type: "POST",
        data: {
            statistika_koristenja_grupirano: "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            prikaziGraf(data);
        },
        error: (er) => {
            console.log(er);
        }
    });

    $('#generirajPDF').click(() => {
        var doc = new jsPDF();
        doc.autoTable({
            html: '#statistika'
        })
        doc.save('statistikaKoristenja.pdf');
    });

    $('#isprintaj').click(() => {
        window.print();
    });

    $('#korisnik').keyup(() => {
        tablica.postaviFilter('Korisnik', $('#korisnik').val());
    });

    $('#od').change(() => {
        tablica.postaviFilter('Od', $('#od').val());
    });

    $('#do').change(() => {
        tablica.postaviFilter('Do', $('#do').val());
    });
});