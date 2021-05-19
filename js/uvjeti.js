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