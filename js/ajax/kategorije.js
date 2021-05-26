const naslovi = ['Naziv kategorije', 'Uredi', 'Moderatori'];
const stupci = {
    'Naziv_kategorije': 0,
    'Uredi': '<a href=kategorijaUredi.php?id={ID_kategorija}>Uredi</a>',
    'Moderatori': '<a href=moderatoriKategorije.php?id={ID_kategorija}>Uredi moderatore</a>'
};
const filteri = {'Kategorija' : ''};
const tablica = new Tablica('kategorije', 'kategorije', stupci, naslovi, filteri, 0);

$(document).ready(() => {
    $('#kategorija').keyup(() => {
        tablica.postaviFilter('Kategorija', $('#kategorija').val());
    });
});