function postaviKolacic(naziv, vrijednost, trajanje) {
    var istjek = "";

    var date = new Date();
    date.setTime(date.getTime() + (trajanje * 24 * 60 * 60 * 1000));
    istjek = "; expires=" + date.toUTCString();

    document.cookie = naziv + "=" + (vrijednost || "") + istjek + "; path=/";
}

function dohvatiVrijednostKolacica(naziv) {
    naziv = naziv + "=";
    var kolacic = decodeURIComponent(document.cookie);
    var vrijednosti = kolacic.split(';');
    for (var i = 0; i < vrijednosti.length; i++) {
        var c = vrijednosti[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(naziv) == 0) {
            return c.substring(naziv.length, c.length);
        }
    }
    return "";
}

function prikaziUpitnik() {
    if (confirm('Želite li potvrditi uvjete korištenja?')) {
        var trenutniDatum = new Date().toISOString();
        postaviKolacic('uvjeti', trenutniDatum, 7);
    } else {
        console.log('Thing was not saved to the database.');
    }
}

$(document).ready(() => {
    $.getJSON("../../base/postavke.json", (json) => {
        var datumUvjeta = json.datumUvjeta
    
        var datumPotvrde = dohvatiVrijednostKolacica('uvjeti');

        if (!datumPotvrde) {
            prikaziUpitnik();
        } else {
            if (new Date(datumPotvrde).getTime() < new Date(datumUvjeta).getTime()) {
                prikaziUpitnik();
            }
        }
    });

  
});