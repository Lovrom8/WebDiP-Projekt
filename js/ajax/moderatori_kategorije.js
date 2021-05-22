const naslovi = ["Ime", "Prezime", "Korisničko ime", "Uredi"]
const stupci = { "Ime" : 0, "Prezime" : 0, "Korisnicko_ime" : 0, "Obriši" : '<a href=modObrisi.php?idKat={ID_kategorija}&idMod={ID_moderator}>Obriši</a>' };
const tablica = new Tablica('moderatori', 'moderatori_kategorije', stupci, naslovi, 0, {}, {}, id);