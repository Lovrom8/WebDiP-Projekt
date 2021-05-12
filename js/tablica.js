class Tablica {
    constructor(_ime, _podaci, _stupci, _paginacija) {
        this.podaci = _podaci;
        this.raspon = this.podaci.length;
        this.ime = _ime;
        this.stupci = _stupci;
        this.paginacija = _paginacija;
        this.od = 0;
        this.do = this.paginacija;
    
        this.prikaziTablicu();
        this.dodajGumbe();
        this.provjeriGumbe();
    }

    dodajGumbe() {
        var btnPrethodna = $('<button id="btnPrethodna' + this.ime + '">Prethodna stranica</button>');
        var btnSljedeca =  $('<button id="btnSljedeca' + this.ime + '">Sljedeća stranica</button>');
     
        var tblFooter = $("<tfoot></tfoot>");
    
        btnSljedeca.click(() => {
            this.od += this.paginacija;;
            this.do += this.paginacija;
    
            this.provjeriGumbe();
            this.prikaziTablicu();
        });
    
        btnPrethodna.click(() => {
            this.od -= this.paginacija;
            this.do -= this.paginacija;
    
            if(this.od < 0) {
                this.od = 0;
                this.do = this.paginacija;
            }
    
            this.provjeriGumbe();
            this.prikaziTablicu();
        });
    
        tblFooter.append(btnPrethodna);
        tblFooter.append(btnSljedeca);
    
        $('#'+this.ime).append(tblFooter);
    }
    
    prikaziTablicu() {
        $('#'+this.ime).find('tbody').remove();
    
        var tblBody = document.createElement("tbody");
    
        this.podaci.slice(this.od, this.do).forEach((el) => {
            var redak = document.createElement("tr");
    
            Object.entries(this.stupci).forEach(([stupac, vrijednost]) => {
                var celija = document.createElement("td");
                var sadrzaj = '';

                if(vrijednost === 0) {
                    sadrzaj = document.createTextNode(el[stupac]);
                }else {
                    var vrijednost = this.stupci[stupac];

                    var matches = vrijednost.match(/[^{\}]+(?=})/g); //dohvati sve unutar {} parova
                    matches.forEach((match) => {
                        vrijednost = vrijednost.replace(match, el[match]).replace('{', '').replace('}', ''); //zamjeni sa vrijednošću s tim propom
                    });


                    sadrzaj = document.createElement('td');
                    console.log(vrijednost);
                    sadrzaj.innerHTML = vrijednost;
                }
                
                celija.appendChild(sadrzaj);
                redak.appendChild(celija);
            });
    
            tblBody.append(redak);
        });
    
        this.provjeriGumbe();
        $('#'+this.ime).append(tblBody);
    }
    
    provjeriGumbe() {
        $('#btnSljedeca'+this.ime).prop('disabled', this.do + this.paginacija > this.raspon);
        $('#btnPrethodna'+this.ime).prop('disabled', this.od - this.paginacija < 0);
    }
}
