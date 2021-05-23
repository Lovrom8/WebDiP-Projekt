$(document).ready(() => {
    const sve = $("#ajaxDionice").attr('sve');

    if (sve === "1")
        $("#dok").css("display", "block");

    const naslovi = ["Oznaka", "Polazište", "Odredište", "Naziv kategorije", "Dokumenti", "Obilazak "];
    const stupci = {
        "Oznaka": 0,
        "Polazište": 0,
        "Odredište": 0,
        "Naziv_kategorije": 0,
        'Dokumenti': '<a href=dokumentDodaj.php?id={ID_dionica}&oznaka={Oznaka}>Dodaj</a>',
        'Obilazak': '<a href=obilasci.php?id={ID_dionica}>Evidentiraj</a>',
    };
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