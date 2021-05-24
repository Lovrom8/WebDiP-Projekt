$(document).ready(() => {
    const sve = $("#ajaxDionice").attr('sve');

    var naslovi = ["Oznaka", "Polazište", "Odredište", "Naziv kategorije"];
    var stupci = {
        "Oznaka": 0,
        "Polazište": 0,
        "Odredište": 0,
        "Naziv_kategorije": 0
    };

    if (sve === "1") {
        naslovi.push("Dokumenti", "Obilazak");

        stupci['Dokumenti'] =  '<a href=dokumentDodaj.php?id={ID_dionica}&oznaka={Oznaka}>Dodaj</a>';
        stupci['Obilazak'] = '<a href=obilasci.php?id={ID_dionica}>Evidentiraj</a>';
    }

    const filteri = {
        'Polazište': '',
        'Odredište': ''
    };
    const tablica = new Tablica('dionice', 'dionice', stupci, naslovi, filteri, 0);

    $('#polaziste').change(() => {
        tablica.postaviFilter('Polazište', $('#polaziste').val());
    });

    $('#odrediste').change(() => {
        tablica.postaviFilter('Odredište', $('#odrediste').val());
    });
});