const naslovi = ["Ime", "Prezime", "Korisničko ime", "Uredi"]
const stupci = { "Ime" : 0, "Prezime" : 0, "Korisnicko_ime" : 0, "Obriši" : '<a href=modObrisi.php?idKat={ID_kategorija}&idMod={ID_moderator}>Obriši</a>' };
const filteri = {
    'Ime': '',
    'Prezime': ''
}
const tablica = new Tablica('moderatori', 'moderatori_kategorije', stupci, naslovi, filteri, 0, {}, {}, id);

$(document).ready(() => {
    $('#ime').change(() => {
        tablica.postaviFilter('Ime', $('#ime').val());
    });

    $('#prezime').change(() => {
        tablica.postaviFilter('Prezime', $('#prezime').val());
    });
});
