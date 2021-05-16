$(document).ready(() => {
    $.ajax({
        type: "POST",
        data: {
           problemi : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            const stupci = { 'Oznaka' : 0, 'Datum' : 0, 'Opis' : 0, 'Otvori' : '<a href=problemi.php?id={ID_dionica}&status=1>Otvori</a>', 'Zatvori': '<a href=problemi.php?id={ID_dionica}&status=0>Zatvori</a>' };
            const formatiranjeCelije = {'Otvori' : {'Otvorena' : 1}, 'Zatvori' : {'Otvorena' : 0}};
            const tablica = new Tablica('problemi', data, stupci, 0, {}, formatiranjeCelije);

        }, error: (er) => {
            console.log(er);
        }
    });   
});