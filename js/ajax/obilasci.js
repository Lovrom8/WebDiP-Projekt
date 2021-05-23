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

    $.ajax({
        type: "POST",
        data: {
            obilasci : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            let ukupno = 0;
            data.podaci.forEach((el) => {
                ukupno += el.Broj_kilometara;
            });

            $('#ukupnoKm').text(ukupno);
        },
        error: (er) => {
            console.log(er);
        }
    });
});
