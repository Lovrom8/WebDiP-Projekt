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

function postaviCSS() {
    var el = document.getElementById("css_stil_accesibility");

    if(el.disabled === true) {
        el.disabled = false;
        postaviKolacic('prilagodljivost', 'da');
    }
    else {
        el.disabled = true;
        postaviKolacic('prilagodljivost', 'ne');
    }
}

function provjeriPostavke() {
    const prilagodljivost = dohvatiVrijednostKolacica('prilagodljivost');

    if(prilagodljivost === 'da')
        postaviCSS();
}

function sakrijStupac(idTablice, brojStupca, pokazi) {
    var tablica = document.getElementById(idTablice);
    var stupac = tbl.getElementsByTagName('col')[brojStupca];
    if (stupac) {
      stupac.style.visibility=pokazi?"":"collapse";
    }
 }

function postaviHamburger() {
    const tren = $('#navWrapper').css('visibility');
    $('#navWrapper').css('visibility', tren === 'hidden' ? 'visible' : 'hidden');
}

$(document).ready(() => {
    $('#icoPrilagodljivost').click(() => postaviCSS());
    $('#hamburger').click(() => postaviHamburger());
    $('nav a').click(() => postaviHamburger());
    provjeriPostavke();
});