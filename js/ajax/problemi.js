const stupci = {
    'Oznaka': 0,
    'Datum': 0,
    'Opis': 0,
    'Otvori': '<a href=problemi.php?id={ID_dionica}&status=1>Otvori</a>',
    'Zatvori': '<a href=problemi.php?id={ID_dionica}&status=0>Zatvori</a>'
};
const naslovi = ["Dionica", "Datum", "Opis", "Otvoreni", "Zatvori"];
const formatiranjeCelije = {
    'Otvori': {
        'Otvorena': 1
    },
    'Zatvori': {
        'Otvorena': 0
    }
};
const filteri = {
    'Dionica': '',
    'Opis': ''
};
const tablica = new Tablica('problemi', 'problemi', stupci, naslovi, filteri, 0, {}, formatiranjeCelije);

$(document).ready(() => {
    $('#dionica').change(() => {
        tablica.postaviFilter('Dionica', $('#dionica').val());
    });

    $('#opis').change(() => {
        tablica.postaviFilter('Opis', $('#opis').val());
    });
});