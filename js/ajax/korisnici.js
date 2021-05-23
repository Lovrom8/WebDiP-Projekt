const stupci = {
    "Korisnicko_ime": 0,
    "Blokiraj": '<a href=korisnici.php?id={ID_korisnik}&status=3>Blokiraj</a>',
    "Odblokiraj": '<a href=korisnici.php?id={ID_korisnik}&status=2>Odblokiraj</a>'
};
const formatiranjeCelije = {
    'Blokiraj': {
        'Status': 3
    },
    'Odblokiraj': {
        'Status': 2
    }
};
const naslovi = ['Korisničko ime', 'Blokiraj', 'Odblokiraj'];
const filteri = {
    'KorisnickoIme': '',
    'SamoBlokirani': ''
};
const tablica = new Tablica('korisnici', 'korisnici', stupci, naslovi, filteri, 0, {}, formatiranjeCelije);

$(document).ready(() => {
    $('#korIme').change(() => {
        tablica.postaviFilter('KorisnickoIme', $('#korIme').val());
    });

    $('#samoBlokirani').change(() => {
        tablica.postaviFilter('SamoBlokirani', $('#samoBlokirani').is(":checked"));
    });
});