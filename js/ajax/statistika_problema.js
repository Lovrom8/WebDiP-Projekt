const stupci = {
    "Naziv_kategorije": 0,
    "BrojProblema": 0
};
const naslovi = ["Kategorija", "Broj problema"];
const filteri = {
    'MinProblema': '',
    'Kategorija': ''
};
const tablica = new Tablica('problemi', 'statistika_problema', stupci, naslovi, filteri, 0);

function prikaziGraf(podaci) {
    var polje = document.getElementById("grafStatistike");
    polje.width = 500;
    polje.height = 500;

    let brojProblema = podaci.reduce((a, b) => {
        a[b.Naziv_kategorije] = parseInt(b.BrojProblema)
        return a
    }, {});
   
    var graf = new TortaGraf({
        canvas: polje,
        podaci: brojProblema
    });

    graf.nacrtaj();
    graf.nacrtajLegendu(brojProblema);
}

$(document).ready(() => {
    $('#generirajPDF').click(() => {
        var doc = new jsPDF();
        doc.autoTable({
            html: '#problemi'
        })
        doc.save('statistikaProblema.pdf');
    });

    $.ajax({
        type: "POST",
        data: {
            podaci: 'statistika_problema',
            paginacija: 0
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            prikaziGraf(data.podaci);
        },
        error: (er) => {
            console.log(er);
        }
    });

    $('#isprintaj').click(() => {
        window.print();
    });

    $('#minProblema').change(() => {
        tablica.postaviFilter('MinProblema', $('#minProblema').val());
    });

    $('#kategorija').change(() => {
        tablica.postaviFilter('Kategorija', $('#kategorija').val());
    });
});