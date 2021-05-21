const stupci = {
    "Naziv_kategorije": 0,
    "BrojProblema": 0
};
const tablica = new Tablica('problemi', 'statistika_problema', stupci, 0);

function prikaziGraf(podaci) {
    var polje = document.getElementById("grafStatistike");
    polje.width = 500;
    polje.height = 500;

    let brojProblema = podaci.reduce((a,b) => {a[b.Naziv_kategorije] = parseInt(b.BrojProblema) 
                                              return a}, {});
    //let brojProblema = podaci.map(problem => parseInt(problem.BrojProblema));
    //console.log(brojProblema);
    
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
           podaci : 'statistika_problema',
           paginacija: 0
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            prikaziGraf(data.podaci);
        }, error: (er) => {
            console.log(er);
        }
    });   
});