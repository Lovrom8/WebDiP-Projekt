class Tablica {
    constructor(_imeTablice, _nazivPodataka, _stupci, _paginacija, _formatiranje = {}, _vidljivostCelija = {}) {
        this.ime = _imeTablice;
        this.naziv = _nazivPodataka;
        this.stupci = _stupci;
        this.trenutnaStranica = 1;
        this.brojStranica = 1;
        this.formatiranje = _formatiranje;
        this.vidljivostCelija = _vidljivostCelija;

        $.getJSON("../../base/postavke.json", (json) => {
            if(_paginacija == 0) 
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
               podaci : this.naziv,
               paginacija: this.paginacija,
               trenutna_stranica: this.trenutnaStranica
            },
            url: "base/dohvati.php",
            dataType: "json",
            success: (data) => {
                this.postaviPodatke(data);
            }, error: (er) => {
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

            this.provjeriGumbe();
            this.dohvatiPodatke();
        });

        btnPrethodna.click(() => {
            this.trenutnaStranica--;

            this.provjeriGumbe();
            this.dohvatiPodatke();
        });

        tblFooter.append(btnPrethodna);
        tblFooter.append(btnSljedeca);

        $('#' + this.ime).append(tblFooter);
    }

    prikaziTablicu() {
        $('#' + this.ime).find('tbody').remove();

        var tblBody = document.createElement("tbody");

        this.podaci.forEach((el) => {
            var redak = document.createElement("tr");

            Object.entries(this.stupci).forEach(([stupac, vrijednost]) => {
                var celija = document.createElement("td");
                var sadrzaj = document.createElement("p");;

                if (vrijednost === 0) {
                    sadrzaj = document.createTextNode(el[stupac]);
                } else {
                    var vrijednost = this.stupci[stupac];

                    var matches = vrijednost.match(/[^{\}]+(?=})/g); //dohvati sve unutar {} parova
                    matches.forEach((match) => {
                        vrijednost = vrijednost.replace(match, el[match]).replace('{', '').replace('}', ''); //zamjeni sa vrijednošću s tim propom
                    });

                    sadrzaj.innerHTML = vrijednost;
                }

                if(stupac in this.vidljivostCelija) {
                    var formatStupca = this.vidljivostCelija[stupac];

                    Object.entries(formatStupca).forEach(([stupacUvjet, vrijednostUvjeta]) => {
                        if(el[stupacUvjet] == vrijednostUvjeta) {
                            celija.style.visibility = "hidden";
                        }
                    });
                }

                celija.appendChild(sadrzaj);
                redak.appendChild(celija);
            });


            Object.entries(this.formatiranje).forEach(([stupac, uvjeti]) => { // Dodaj posebna formatiranja
                const uvjet = el[stupac];
                
                if(uvjet in uvjeti) {
                    redak.className = uvjeti[uvjet];
                }
            });

            tblBody.append(redak);
        });

        this.provjeriGumbe();
        $('#' + this.ime).append(tblBody);
    }

    provjeriGumbe() {
        $('#btnSljedeca' + this.ime).prop('disabled', this.trenutnaStranica + 1 == this.brojStranica);
        $('#btnPrethodna' + this.ime).prop('disabled', this.trenutnaStranica === 1);
    }

    postaviPodatke(data) {
        this.podaci = data.podaci;
        this.brojStranica = data.brojStranica;
        this.prikaziTablicu();
        this.provjeriGumbe();
    }

    postaviPaginaciju(paginacija) {
        if(!isNaN(paginacija)) {
            this.paginacija = paginacija;
            this.dohvatiPodatke();    
        }
    }
}