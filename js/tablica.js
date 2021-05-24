class Tablica {
    constructor(_imeTablice, _nazivPodataka, _stupci, _naslovi, _filteri, _paginacija, _formatiranje = {}, _vidljivostCelija = {}, _id = '') {
        this.ime = _imeTablice;
        this.naziv = _nazivPodataka;
        this.naslovi = _naslovi;
        this.stupci = _stupci;
        this.filteri = _filteri;
        this.trenutnaStranica = 1;
        this.brojStranica = 1;
        this.formatiranje = _formatiranje;
        this.vidljivostCelija = _vidljivostCelija;
        this.sortStupac = '';
        this.id = _id;

        $.getJSON("../../base/postavke.json", (json) => {
            if (_paginacija == 0)
                this.paginacija = parseInt(json.brojElPoStranici);
            else
                this.paginacija = _paginacija;

            this.dodajGumbe();
            this.dohvatiPodatke();
        });
    }

    dohvatiPodatke() {
        $.ajax({
            type: "POST",
            data: {
                podaci: this.naziv,
                paginacija: this.paginacija,
                trenutna_stranica: this.trenutnaStranica,
                sort_stupac: this.sortStupac,
                id: this.id,
                filteri: JSON.stringify(this.filteri)
            },
            url: "base/dohvati.php",
            dataType: "json",
            success: (data) => {
                this.postaviPodatke(data);
            },
            error: (er) => {
                console.log(er);
            }
        });
    }

    dodajGumbe() {
        var btnPrethodna = $('<button id="btnPrethodna' + this.ime + '">Prethodna stranica</button>');
        var btnSljedeca = $('<button id="btnSljedeca' + this.ime + '">Sljedeća stranica</button>');

        var tblFooter = $("<tfoot></tfoot>");

        btnSljedeca.click(() => {
            this.trenutnaStranica++;

            this.dohvatiPodatke();
        });

        btnPrethodna.click(() => {
            this.trenutnaStranica--;

            this.dohvatiPodatke();
        });

        tblFooter.append(btnPrethodna);
        tblFooter.append(btnSljedeca);

        $('#' + this.ime).append(tblFooter);
    }

    prikaziTablicu() {
        $('#' + this.ime).find('thead').remove();

        var tblHead = document.createElement("thead");

        var zaglavlje = document.createElement("tr");
        this.naslovi.forEach((el, index) => {
            var stupacZaglavlja = document.createElement("th");
            var naslov = document.createElement('a');

            naslov.appendChild(document.createTextNode(el));
            naslov.href = '#';

            naslov.onclick = () => { // Postavi sort stupac za stupac koji je kliknut
                this.postaviSortStupac(Object.keys(this.stupci)[index]);
            };

            stupacZaglavlja.appendChild(naslov);
            zaglavlje.append(stupacZaglavlja);
        });

        tblHead.append(zaglavlje);
        $('#' + this.ime).append(tblHead);

        $('#' + this.ime).find('tbody').remove();

        var tblBody = document.createElement("tbody");

        this.podaci.forEach((el) => {
            var redak = document.createElement("tr");

            Object.entries(this.stupci).forEach(([stupac, vrijednost]) => {
                var celija = document.createElement("td");
                var sadrzaj = document.createElement("p");

                if (vrijednost === 0) {
                    sadrzaj = document.createTextNode(el[stupac]);
                } else {
                    var vrijednost = this.stupci[stupac];

                    var unutarZagrada = vrijednost.match(/[^{\}]+(?=})/g); //dohvati sve unutar {} parova
                    unutarZagrada.forEach((match) => {
                        vrijednost = vrijednost.replace(match, el[match]).replace('{', '').replace('}', ''); //zamjeni sa vrijednošću s tim propom
                    });

                    sadrzaj.innerHTML = vrijednost;
                }

                if (stupac in this.vidljivostCelija) {
                    var formatStupca = this.vidljivostCelija[stupac];

                    Object.entries(formatStupca).forEach(([vrijednostUvjeta, stupacUvjet]) => { // Hacky but functional za slučaj kada su uvjetni stupci isti
                        console.log(stupacUvjet + " " + vrijednostUvjeta);
                        if (el[stupacUvjet] == vrijednostUvjeta) {
                            celija.style.visibility = "hidden";
                        }
                    });
                }

                celija.appendChild(sadrzaj);
                redak.appendChild(celija);
            });


            Object.entries(this.formatiranje).forEach(([stupac, uvjeti]) => { // Dodaj posebna formatiranja
                const uvjet = el[stupac];

                if (uvjet in uvjeti) {
                    redak.className = uvjeti[uvjet];
                }
            });

            tblBody.append(redak);
        });

        this.provjeriGumbe();
        $('#' + this.ime).append(tblBody);
    }

    postaviSortStupac(stupac) {
        console.log('Postavljam sort stupac: ' + stupac);
        this.sortStupac = stupac;
        this.dohvatiPodatke();
    }

    provjeriGumbe() {
        $('#btnSljedeca' + this.ime).prop('disabled', this.trenutnaStranica == this.brojStranica);
        $('#btnPrethodna' + this.ime).prop('disabled', this.trenutnaStranica === 1);
    }

    postaviFilter(naziv, vrijednost) {
        this.filteri[naziv] = vrijednost;
        this.dohvatiPodatke();
    }

    postaviPodatke(data) {
        this.podaci = data.podaci;
        this.brojStranica = data.brojStranica;
        this.prikaziTablicu();
        this.provjeriGumbe();
    }

    postaviPaginaciju(paginacija) {
        if (!isNaN(paginacija)) {
            this.paginacija = paginacija;
            this.dohvatiPodatke();
        }
    }
}