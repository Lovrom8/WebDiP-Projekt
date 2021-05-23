const stupci = {
    "Oznaka": 0,
    "Datum": 0,
    "Broj_kilometara": 0
};
const naslovi = ["Oznaka", "Datum", "Broj kilometara"];
const filteri = {
    'BrojKilometara': '',
    'Oznaka': ''
}
const tablica = new Tablica('obilasci', 'obilasci', stupci, naslovi, filteri, 0);

$(document).ready(() => {
    $('#brojKilometara').change(() => {
        tablica.postaviFilter('BrojKilometara', $('#brojKilometara').val());
    });

    $('#oznaka').change(() => {
        tablica.postaviFilter('Oznaka', $('#oznaka').val());
    });
});

/*let ukupno = 0;
data.forEach((el) => {
    ukupno += el.Broj_kilometara;
    $('#ukupnoKm').text(ukupno);
});*/