$(document).ready(() => {
    var naslovi = ["Oznaka", "Polazište", "Odredište", "Naziv kategorije", "Uredi"];
    var stupci = {
        "Oznaka": 0,
        "Polazište": 0,
        "Odredište": 0,
        "Naziv_kategorije": 0,
        "Obilazak": '<a href=dionicaUredi.php?id={ID_dionica}>Uredi</a>'
    };

    const filteri = {
        'Polazište': '',
        'Odredište': ''
    };
    const tablica = new Tablica('dionice', 'dioniceMod', stupci, naslovi, filteri, 0);

    $('#polaziste').change(() => {
        tablica.postaviFilter('Polazište', $('#polaziste').val());
    });

    $('#odrediste').change(() => {
        tablica.postaviFilter('Odredište', $('#odrediste').val());
    });
});