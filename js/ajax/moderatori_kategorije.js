$(document).ready(() => {
    $.ajax({
        type: "POST",
        data: {
           moderatori_kategorije : id
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {         
            const stupci = { "Ime" : 0, "Prezime" : 0, "Korisnicko_ime" : 0, "Obriši" : '<a href=modObrisi.php?idKat={ID_kategorija}&idMod={ID_moderator}>Obriši</a>' };
            const tablica = new Tablica('moderatori', data, stupci, 0);
        }
    });
});