$(document).ready(() => {
    $.ajax({
        type: "POST",
        data: {
           statistika_problema : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
           const stupci = { "Naziv_kategorije" : 0, "BrojProblema" : 0};
           const tablica = new Tablica('problemi', data, stupci, 0);
        }, error: (er) => {
            console.log(er);
        }
    });   

    $('#generirajPDF').click(() => {
        var doc  = new jsPDF();
        doc.autoTable({ html: '#problemi' })
        doc.save('statistikaProblema.pdf');
    });
});