const stupci = { "Naziv_kategorije" : 0, "BrojProblema" : 0};
const tablica = new Tablica('problemi', 'statistika_problema', stupci, 0);

$(document).ready(() => {
    $('#generirajPDF').click(() => {
        var doc  = new jsPDF();
        doc.autoTable({ html: '#problemi' })
        doc.save('statistikaProblema.pdf');
    });
});

